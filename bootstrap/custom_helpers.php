<?php 

use Dorguzen\Core\DGZ_Request;
use Dorguzen\Core\DGZ_Response;
use Dorguzen\Core\DGZ_Application;
use Dorguzen\Core\DGZ_Logger;
use Dorguzen\Core\DGZ_Auth;
use Dorguzen\Core\DGZ_Messenger;
use Dorguzen\Core\DGZ_Exception;
use Dorguzen\Controllers\ExceptionController;
use Symfony\Component\VarDumper\VarDumper;
use Dorguzen\Config\Config;


/*/----------------------------------------------------------------------
|
|                    CUSTOM GLOBAL HELPER FUNCTIONS                  
|
//---------------------------------------------------------------------*/

// ----------------------------------------------------------------------
//  OPTIONAL FUNCTION NAME LIST FOR QUICK LOOK UP
// ----------------------------------------------------------------------
/*
    -testing()        retrieve DGZ_Auth instance (data on current user).


*/
// ----------------------------------------------------------------------


// ----------------------------------------------------------------------
// Function group heading here
// ----------------------------------------------------------------------

/**
 * testing function just to demonstrate (please delete or modify to use). 
 * This function can be called anywhere in your application
 */
if (!function_exists('testing()')) {
    function testing(): string
    {
        $config = container(Config::class);
        $appName = $config->has('app.appName') ? $config->get('app.appName') : "application";
        return "Test string from your awesome {$appName}";
    }
} 


// ----------------------------------------------------------------------
// SAFE HTML OUTPUT
// ----------------------------------------------------------------------

/**
 * esc() — escape a value for HTML output EXACTLY ONCE.
 *
 * Why this exists: input is sanitised on the way IN by
 * DGZ_Validate::fix_string(), which ends in htmlentities(). So a portfolio
 * title typed as
 *
 *      VoiceWren — AI Receptionist & Call Automation Platform
 *
 * is stored in the database already encoded, as
 *
 *      VoiceWren &mdash; AI Receptionist &amp; Call Automation Platform
 *
 * Escaping that a second time at output yields "&amp;mdash;", which the browser
 * prints literally as "&mdash;". esc() decodes first, then escapes once, so the
 * real characters show up.
 *
 * Still XSS-safe: the final htmlspecialchars() escapes everything, so any
 * decoded markup such as "<script>" is neutralised before it reaches the page.
 * Safe on raw values too — decoding a string containing no entities is a no-op.
 */
if (!function_exists('esc')) {
    function esc($value): string
    {
        return htmlspecialchars(
            html_entity_decode((string) $value, ENT_QUOTES | ENT_HTML5, 'UTF-8'),
            ENT_QUOTES,
            'UTF-8'
        );
    }
}


/**
 * excerpt() — a shortened, safely escaped snippet of a longer stored value.
 *
 * Decodes entities and strips tags BEFORE trimming, then escapes once. The
 * order matters: cutting first would slice an entity in half ("&amp;" becomes
 * "&am") and could also split a multi-byte character such as an em dash into
 * broken bytes. mb_substr keeps multi-byte characters whole.
 */
if (!function_exists('excerpt')) {
    function excerpt($value, int $length = 120, string $suffix = ''): string
    {
        $plain = trim(strip_tags(html_entity_decode((string) $value, ENT_QUOTES | ENT_HTML5, 'UTF-8')));

        if (mb_strlen($plain, 'UTF-8') > $length) {
            $plain = rtrim(mb_substr($plain, 0, $length, 'UTF-8')) . $suffix;
        }

        return htmlspecialchars($plain, ENT_QUOTES, 'UTF-8');
    }
}


// ----------------------------------------------------------------------
// SEO
// ----------------------------------------------------------------------

/**
 * canonicalUrl() — the ONE authoritative absolute URL for the current page.
 *
 * Emitted as <link rel="canonical"> so that the www/non-www and http/https
 * variants of a page are understood as the same page rather than as duplicates
 * competing with each other.
 *
 * Built from APP_URL (config app.appURL), so it always names the production
 * domain even when the request arrived on some other hostname.
 *
 * @param string $basePath the install sub-folder, e.g. "/" live or
 *                         "/nolimitmedia-ca/" under MAMP. Stripped so the
 *                         canonical is identical in both environments.
 */
if (!function_exists('canonicalUrl')) {
    function canonicalUrl(string $basePath = '/'): string
    {
        $site = rtrim((string) (config('app.appURL') ?: 'https://nolimitmedia.ca'), '/');

        $uri   = $_SERVER['REQUEST_URI'] ?? '/';
        $parts = explode('?', $uri, 2);
        $path  = $parts[0];
        $query = $parts[1] ?? '';

        $basePath = '/' . trim($basePath, '/');
        if ($basePath !== '/' && str_starts_with($path, $basePath)) {
            $path = substr($path, strlen($basePath));
        }
        $path = '/' . ltrim($path, '/');

        // Drop marketing/tracking parameters only. Genuine parameters are KEPT:
        // "/news/article?id=7" identifies a distinct page, and stripping the id
        // would collapse every article onto a single canonical URL — which would
        // tell Google the articles are all the same page.
        if ($query !== '') {
            parse_str($query, $params);
            foreach (array_keys($params) as $key) {
                if (preg_match('/^(utm_|fbclid$|gclid$|msclkid$|ref$)/i', (string) $key)) {
                    unset($params[$key]);
                }
            }
            $query = http_build_query($params);
        }

        return $site . $path . ($query !== '' ? '?' . $query : '');
    }
}


// ----------------------------------------------------------------------
// Another function group heading here
// ----------------------------------------------------------------------