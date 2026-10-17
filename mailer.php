<?php
/*
 * BioHub / Aayan Hub - Contact Form Mailer
 * ----------------------------------------
 * This is the file your contact form (in index.html) already points to:
 *     <form id="contact-form" action="mailer.php" method="POST">
 * It was MISSING from the original zip, so the form could never send.
 *
 * WHERE IT WORKS:
 * - It only runs on a PHP hosting (for example Hostinger or InfinityFree),
 *   uploaded in the SAME folder as index.html.
 * - It will NOT run on GitHub Pages - GitHub Pages is static (HTML/CSS/JS)
 *   only, PHP files are never executed there. On GitHub, use the
 *   Web3Forms / Formspree method given in the email setup guide instead.
 *
 * TO CHANGE THE RECEIVER EMAIL: edit $toEmail below.
 */

// ===== CHANGE THIS if the receiver email ever changes =====
$toEmail = 'aayanfarooq48@gmail.com';
// ==========================================================

// Allow the form to post from your GitHub Pages site as well
// (needed only when this file lives on a different domain than the form).
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') { http_response_code(204); exit; }

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo 'Method not allowed.';
    exit;
}

// Read + clean the fields that contact.form.js sends
$name    = isset($_POST['name']) ? trim(strip_tags($_POST['name'])) : '';
$phone   = isset($_POST['phone']) ? trim(strip_tags($_POST['phone'])) : '';
$email   = isset($_POST['email']) ? trim($_POST['email']) : '';
$subject = isset($_POST['subject']) ? trim(strip_tags($_POST['subject'])) : '';
$message = isset($_POST['message']) ? trim(strip_tags($_POST['message'])) : '';

// Basic validation
if ($name === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo 'Please fill in your name, a valid email and your message.';
    exit;
}

$safeSubject = 'Website Contact: ' . ($subject !== '' ? $subject : 'New message from your website');
$safeSubject = str_replace(["\r", "\n"], ' ', $safeSubject); // header-injection protection

$body  = "You have received a new message from your website contact form.\n\n";
$body .= "Name:    " . $name . "\n";
$body .= "Email:   " . $email . "\n";
$body .= "Phone:   " . ($phone !== '' ? $phone : '-') . "\n";
$body .= "Subject: " . ($subject !== '' ? $subject : '-') . "\n\n";
$body .= "Message:\n" . $message . "\n";

$headers  = 'From: ' . $name . ' <' . $email . ">\r\n";
$headers .= 'Reply-To: ' . $email . "\r\n";
$headers .= 'Content-Type: text/plain; charset=UTF-8' . "\r\n";

if (mail($toEmail, $safeSubject, $body, $headers)) {
    echo 'Thank you! Your message has been sent successfully.';
} else {
    http_response_code(500);
    echo 'Oops! An error occurred and your message could not be sent. Please check that mail is enabled on this hosting (SMTP).';
}
