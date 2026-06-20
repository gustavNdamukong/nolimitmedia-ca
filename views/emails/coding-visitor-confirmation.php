<?php
/**
 * Email view: confirmation to visitor after submitting a coding lessons inquiry or booking.
 *
 * Variables (injected via extract()):
 *   string $name          Visitor's name
 *   string $appBusinessName  e.g. "Nolimit Media"
 *   string $accentColour  Site accent colour
 */
$firstName = explode(' ', trim($name))[0];
?>

<p style="margin:0 0 16px;font-family:Helvetica,Arial,sans-serif;font-size:15px;color:#333333;line-height:1.7;">
    Hi <strong><?= htmlspecialchars($firstName) ?></strong>,
</p>

<p style="margin:0 0 16px;font-family:Helvetica,Arial,sans-serif;font-size:15px;color:#333333;line-height:1.7;">
    Thank you for reaching out - we have received your message and we are excited to hear from you!
</p>

<p style="margin:0 0 16px;font-family:Helvetica,Arial,sans-serif;font-size:15px;color:#333333;line-height:1.7;">
    Someone from the <strong><?= htmlspecialchars($appBusinessName) ?></strong> team will be in touch with you
    very soon to follow up.
</p>

<p style="margin:0 0 0;font-family:Helvetica,Arial,sans-serif;font-size:15px;color:#333333;line-height:1.7;">
    We look forward to speaking with you!
</p>
