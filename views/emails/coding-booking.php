<?php
/**
 * Email view: coding lesson session booking notification to admin.
 *
 * Variables (injected via extract()):
 *   string $name       Applicant's name
 *   string $email      Applicant's email
 *   string $phone      Applicant's phone (may be empty)
 *   string $ageGroup   child | teen | adult
 *   string $startDate  Preferred start date (Y-m-d)
 *   string $frequency  once_weekly | twice_weekly
 *   string $language   e.g. HTML/CSS/JS, Python, etc.
 */

$ageLabels = [
    'child' => 'Child (Age 10–12)',
    'teen'  => 'Teen (Age 13–17)',
    'adult' => 'Adult (Age 18+)',
];
$freqLabels = [
    'once_weekly'  => 'Once a week',
    'twice_weekly' => 'Twice a week',
];

$ageDisplay  = $ageLabels[$ageGroup]   ?? ucfirst($ageGroup);
$freqDisplay = $freqLabels[$frequency] ?? ucfirst($frequency);
$dateDisplay = !empty($startDate) ? date('D, d M Y', strtotime($startDate)) : '—';
?>

<p style="margin:0 0 12px;font-family:Helvetica,Arial,sans-serif;font-size:14px;color:#444444;">
    A new coding lesson session request has been submitted. Details are below.
</p>

<table width="100%" cellpadding="0" cellspacing="0" border="0"
       style="border-collapse:collapse;margin:0 0 24px;">
    <tbody>

        <!-- Divider: Contact -->
        <tr>
            <td colspan="2"
                style="padding:10px 0 6px;font-family:Helvetica,Arial,sans-serif;font-size:11px;
                       font-weight:800;letter-spacing:.1em;text-transform:uppercase;
                       color:<?= htmlspecialchars($accentColour ?? '#17C3F5') ?>;
                       border-bottom:2px solid <?= htmlspecialchars($accentColour ?? '#17C3F5') ?>;">
                Applicant Details
            </td>
        </tr>

        <tr>
            <td width="140"
                style="padding:9px 12px 9px 0;font-family:Helvetica,Arial,sans-serif;font-size:13px;
                       font-weight:bold;color:#555555;vertical-align:top;border-bottom:1px solid #f0f0f0;">
                Name
            </td>
            <td style="padding:9px 0;font-family:Helvetica,Arial,sans-serif;font-size:13px;
                       color:#222222;font-weight:600;vertical-align:top;border-bottom:1px solid #f0f0f0;">
                <?= htmlspecialchars($name) ?>
            </td>
        </tr>
        <tr>
            <td style="padding:9px 12px 9px 0;font-family:Helvetica,Arial,sans-serif;font-size:13px;
                       font-weight:bold;color:#555555;vertical-align:top;border-bottom:1px solid #f0f0f0;">
                Email
            </td>
            <td style="padding:9px 0;font-family:Helvetica,Arial,sans-serif;font-size:13px;
                       color:#444444;vertical-align:top;border-bottom:1px solid #f0f0f0;">
                <a href="mailto:<?= htmlspecialchars($email) ?>"
                   style="color:<?= htmlspecialchars($accentColour ?? '#17C3F5') ?>;text-decoration:none;">
                    <?= htmlspecialchars($email) ?>
                </a>
            </td>
        </tr>
        <tr>
            <td style="padding:9px 12px 9px 0;font-family:Helvetica,Arial,sans-serif;font-size:13px;
                       font-weight:bold;color:#555555;vertical-align:top;border-bottom:1px solid #f0f0f0;">
                Phone
            </td>
            <td style="padding:9px 0;font-family:Helvetica,Arial,sans-serif;font-size:13px;
                       color:#444444;vertical-align:top;border-bottom:1px solid #f0f0f0;">
                <?= !empty($phone) ? htmlspecialchars($phone) : '<span style="color:#aaa;">Not provided</span>' ?>
            </td>
        </tr>

        <!-- Divider: Session -->
        <tr>
            <td colspan="2"
                style="padding:18px 0 6px;font-family:Helvetica,Arial,sans-serif;font-size:11px;
                       font-weight:800;letter-spacing:.1em;text-transform:uppercase;
                       color:<?= htmlspecialchars($accentColour ?? '#17C3F5') ?>;
                       border-bottom:2px solid <?= htmlspecialchars($accentColour ?? '#17C3F5') ?>;">
                Session Details
            </td>
        </tr>

        <tr>
            <td style="padding:9px 12px 9px 0;font-family:Helvetica,Arial,sans-serif;font-size:13px;
                       font-weight:bold;color:#555555;vertical-align:top;border-bottom:1px solid #f0f0f0;">
                Age Group
            </td>
            <td style="padding:9px 0;font-family:Helvetica,Arial,sans-serif;font-size:13px;
                       color:#222222;font-weight:600;vertical-align:top;border-bottom:1px solid #f0f0f0;">
                <?= htmlspecialchars($ageDisplay) ?>
            </td>
        </tr>
        <tr>
            <td style="padding:9px 12px 9px 0;font-family:Helvetica,Arial,sans-serif;font-size:13px;
                       font-weight:bold;color:#555555;vertical-align:top;border-bottom:1px solid #f0f0f0;">
                Preferred Start Date
            </td>
            <td style="padding:9px 0;font-family:Helvetica,Arial,sans-serif;font-size:13px;
                       color:#222222;font-weight:600;vertical-align:top;border-bottom:1px solid #f0f0f0;">
                <?= htmlspecialchars($dateDisplay) ?>
            </td>
        </tr>
        <tr>
            <td style="padding:9px 12px 9px 0;font-family:Helvetica,Arial,sans-serif;font-size:13px;
                       font-weight:bold;color:#555555;vertical-align:top;border-bottom:1px solid #f0f0f0;">
                Frequency
            </td>
            <td style="padding:9px 0;font-family:Helvetica,Arial,sans-serif;font-size:13px;
                       color:#222222;font-weight:600;vertical-align:top;border-bottom:1px solid #f0f0f0;">
                <?= htmlspecialchars($freqDisplay) ?>
            </td>
        </tr>
        <tr>
            <td style="padding:9px 12px 9px 0;font-family:Helvetica,Arial,sans-serif;font-size:13px;
                       font-weight:bold;color:#555555;vertical-align:top;">
                Course / Language
            </td>
            <td style="padding:9px 0;font-family:Helvetica,Arial,sans-serif;font-size:13px;
                       color:#222222;font-weight:600;vertical-align:top;">
                <?= htmlspecialchars($language) ?>
            </td>
        </tr>

    </tbody>
</table>

<p style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:13px;color:#777777;">
    Reply directly to this email to get in touch with the applicant.
</p>
