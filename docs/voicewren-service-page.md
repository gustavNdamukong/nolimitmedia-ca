# VoiceWren service page — handover / deploy notes

Written 2026-07-31. Everything below is **done and verified on local MAMP**; nothing has been
uploaded to live yet.

VoiceWren is Nolimit Media's **own product**, not a design-service client (unlike camerooncom.com,
cmetalmenders.com). That distinction drives the copy, the placement, and the link treatment.

---

## 1. What was built

**`/voicewren`** — a full service-detail page, following the existing `codingLessons` pattern:

- page hero + breadcrumb (Home / Services / VoiceWren)
- "the problem" section (missed calls = lost jobs)
- three-card solution (holds a conversation / books the work / instant lead alert)
- the demo video embedded (`youtube-nocookie`, lazy-loaded, 16:9)
- "who it suits" — four cards (trades, mobile teams, small shops, out-of-hours)
- "under the hood" — six cards hinting at AWS, API synergy, multi-tenancy, Canadian
  numbers, PWA install, automation. **No vendor is named** (no Retell, Twilio, ElevenLabs).
- CTA section with **both** conversion paths: Calendly inline widget
  (`https://calendly.com/gustavfn/new-meeting`, same as voicewren.com) **and** a
  "Request a Call Back" Bootstrap modal → `POST /voicewren/inquiry`.

**`/services`** — new group **placed first**, "Our Own Products", with a VoiceWren card carrying
the bird logo and a "Learn More" button. The `'logo'` key is generic: any future in-house product
gets a logo by adding a filename to the services array, no new code.

**Header nav** — the Services dropdown now reads **All Services → VoiceWren → Coding Lessons**
(previously it only held Coding Lessons, and the fact that clicking "Services" itself went
somewhere was not obvious). VoiceWren was added to the mobile menu too, so it is reachable on
phones.

### Copy is deliberately NOT a rewrite of voicewren.com
voicewren.com leads with the product ("AI receptionist that never misses a call"); this page leads
with the customer's behaviour (furnace dies on a Sunday, they ring the next name on the list). Two
pages under the same owner competing on near-identical text is duplicate content — Google picks
one and discounts the other. Keep them different if either is ever rewritten.

---

## 2. Files to upload (FileZilla)

| Action | Path |
|---|---|
| **NEW** | `views/voicewren.php` |
| **NEW** | `assets/images/voicewren-bird.png` |
| MODIFIED | `views/services.php` |
| MODIFIED | `src/controllers/HomeController.php` |
| MODIFIED | `routes/web.php` |
| MODIFIED | `layouts/nolimitmediaCa/nlm_header.inc.php` |
| MODIFIED | `sitemap.xml` (web root) |
| **DELETE on the server** | `storage/cache/routes.php` |

No DB migration. No `.env` change. No composer change.

### ⚠️ The route cache — this WILL bite
`storage/cache/routes.php` is a cached route table. A new route does **not** exist until that file
is deleted; the symptom is the Dorguzen **exception page with nothing logged** (seen locally on
2026-07-31, fixed by deleting it). It rebuilds automatically on the next request. After uploading,
load `https://nolimitmedia.ca/voicewren` once to rebuild it.

Same family as the `bootstrap/cache/config.php` gotcha in the `manual-deploy` and
`seo-search-submission` skills.

---

## 3. Local verification already done (2026-07-31)

- `/`, `/services`, `/voicewren`, `/coding-lessons` → all HTTP 200, no exception text
- `assets/images/voicewren-bird.png` → 200
- dropdown renders All Services / VoiceWren / Coding Lessons
- `POST /voicewren/inquiry` with a real CSRF token + invalid data → correct JSON
  `{"success":false,...}`; nothing saved, no email sent
- `php -l` clean on all changed PHP files; `sitemap.xml` valid XML

**Note:** a POST to `/voicewren/inquiry` *without* a CSRF token returns the home page HTML rather
than JSON. That is the CSRF middleware, not a bug — the existing `/coding-lessons/inquiry`
behaves identically.

Local MAMP serves at **http://127.0.0.1/nolimitmedia-ca** (Apache on port 80). It answers only
once MAMP has fully started — it returns nothing for the first while.

---

## 4. Portfolio entry (paste into the admin Portfolio module)

Table `portfolio` fields: `portfolio_title`, `portfolio_company_name`, `portfolio_website`,
`portfolio_description`, `portfolio_image`.

**Title:**
> VoiceWren — AI Receptionist & Call Automation Platform

**Company name:**
> Nolimit Media (in-house product)

**Website:**
> https://voicewren.com

**Image:** `voicewren-bird.png` (or the mascot hero / a landing-page screenshot)

**Description:**
> A complete AI voice platform, designed and built in-house, that answers a business's phone around
> the clock — holding a natural spoken conversation with the caller, answering questions about that
> specific business, booking the job, and delivering the lead as a written summary and full
> transcript within seconds of the call ending.
>
> The project is our clearest demonstration of practical AI integration. Telephony, speech
> recognition, conversational reasoning, scheduling and multi-channel notifications are each
> specialist third-party services; the engineering sits in fusing them into a single product that
> feels effortless to the person using it — and in keeping any one of them replaceable as the
> technology moves.
>
> It runs on AWS cloud infrastructure with encrypted traffic, automated certificates and monitored
> uptime, and is multi-tenant by architecture: every client receives their own local phone number,
> their own knowledge base, and strictly isolated call data. The customer dashboard installs to a
> phone's home screen like a native app and delivers push notifications, with no app store involved.
>
> Live at voicewren.com, serving businesses across the Greater Toronto Area.

---

## 5. Remaining steps (Gustav's plan, 2026-07-31)

1. Add the portfolio entry **locally**, upload the logo with it, check how it looks.
2. If happy → replicate on **live** via FileZilla (file list in §2, and delete the route cache).
3. **Then** resubmit to the search engines — sitemap has a new URL (`/voicewren`), so resubmit
   `sitemap.xml` in Google Search Console for nolimitmedia.ca, and Bing picks it up via the
   Google import.

## 5b. Portfolio title double-escaping bug — FIXED 2026-08-01

**Symptom:** the portfolio title saved as `VoiceWren — AI Receptionist & Call Automation Platform`
displayed as `VoiceWren &mdash; AI Receptionist &amp; Call Automation Platform`. Same for existing
items (`Copper &amp; Metal Menders`).

**Cause — escaped twice:**
1. **In:** `DGZ_Validate::fix_string()` ends in `htmlentities()`, so the DB stores the value
   *already encoded* (`&mdash;`, `&amp;`).
2. **Out:** the views ran `htmlspecialchars()` on it *again* → the browser received
   `&amp;mdash;` and printed `&mdash;` literally.

**Fix (app-level, no framework change):** two helpers added to `bootstrap/custom_helpers.php` —
the framework's designated extension point, autoloaded via `composer.json` and required in
`index.php`:

- `esc($value)` — decodes entities, then escapes once. Still XSS-safe: the final
  `htmlspecialchars()` neutralises anything the decode reveals (a stored `&lt;script&gt;` goes
  back out as `&lt;script&gt;`). A no-op on values that were never encoded, so it stays correct
  if the framework's input handling is ever fixed.
- `excerpt($value, $length)` — decode → strip tags → `mb_substr` → escape, in that order.
  Trimming first would slice an entity in half (`&amp;` → `&am`) or split a multi-byte character
  such as an em dash into broken bytes.

Applied at every portfolio output site: `views/portfolio.php` (4 fields + the card excerpt),
`views/home.php` (4 fields), `views/search.php` (title + excerpt).

**Files to upload for this fix:** `bootstrap/custom_helpers.php`, `views/portfolio.php`,
`views/home.php`, `views/search.php`. No route change, so **no route-cache delete needed** for
this one. No composer step — the file path is unchanged.

**Verified locally 2026-08-01** by inserting a throwaway portfolio row containing the exact
encoded strings, confirming `/portfolio` and `/` rendered
`VoiceWren — AI Receptionist & Call Automation Platform` and `Copper & Metal Menders` with zero
`&amp;mdash;` left in the HTML, then deleting the row.

### ⏳ Scheduled Dorguzen FRAMEWORK change (not done — deliberately)
The real root cause is framework-level: **`DGZ_Validate::fix_string()` HTML-encodes on the way IN**.
Storing presentation-encoded text in the database is the wrong layer — it corrupts the data for
every non-HTML consumer (emails, JSON APIs, CSV exports, search indexing, `mb_strlen` counts).
The correct design is *store raw, escape once at output*.

Fixing that properly means: change `fix_string()` to sanitise without encoding, audit every view
that currently relies on the double-encode, and migrate existing rows
(`UPDATE ... SET col = html_entity_decode(col)`) across every Dorguzen site. That is a framework
release with a data migration — hence scheduled, not bundled into this bug fix.

`esc()` is deliberately written to survive that change: once the DB holds raw text, decoding is a
no-op and `esc()` keeps behaving correctly. Nothing here has to be unwound.

**Note:** `bootstrap/helpers.php` is a FRAMEWORK file (912 lines, byte-identical to the reference
install at `/Applications/MAMP/htdocs/dorguzen`). Do not add app code there — it will be
overwritten by the next framework update. Use `bootstrap/custom_helpers.php`.

---

## 6. Known nit, deliberately not changed

With several blank fields the modal shows the validation errors run together —
`Please enter your namePlease enter a messageNo Email was entered`. That comes from
`FeedbackService::validateContactInput`, which `/coding-lessons/inquiry` shares, so the existing
form behaves the same. Fixing it in the service improves both pages; fixing it in one place only
would make them inconsistent. Gustav's call.
