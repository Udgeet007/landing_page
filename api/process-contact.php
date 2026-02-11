<?php
/**
 * Contact Form Processing
 * This file handles form submissions from contact.php
 * 
 * To use this file:
 * 1. Configure your email settings below
 * 2. Or integrate with your database
 * 3. Add reCAPTCHA or other spam protection for production
 */

// Start session for flash messages
session_start();

// Only process POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

// Sanitize and validate input
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Get form data
$firstName = sanitizeInput($_POST['firstName'] ?? '');
$lastName = sanitizeInput($_POST['lastName'] ?? '');
$email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
$company = sanitizeInput($_POST['company'] ?? '');
$phone = sanitizeInput($_POST['phone'] ?? '');
$interest = sanitizeInput($_POST['interest'] ?? '');
$teamSize = sanitizeInput($_POST['teamSize'] ?? '');
$message = sanitizeInput($_POST['message'] ?? '');
$newsletter = isset($_POST['newsletter']) ? 1 : 0;

// Validation
$errors = [];

if (empty($firstName)) {
    $errors[] = "First name is required";
}

if (empty($lastName)) {
    $errors[] = "Last name is required";
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Valid email is required";
}

if (empty($interest)) {
    $errors[] = "Please select your interest";
}

if (empty($message)) {
    $errors[] = "Message is required";
}

// If there are errors, redirect back with error messages
if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    $_SESSION['form_data'] = $_POST;
    header('Location: contact.php?error=1');
    exit;
}

// ============================================
// OPTION 1: Send Email
// ============================================

// Configure your email settings here
$to = "hello@flowsync.com"; // Change this to your email
$subject = "New Contact Form Submission from $firstName $lastName";

// Email body
$emailBody = "
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #6366f1; color: white; padding: 20px; text-align: center; }
        .content { background: #f9f9f9; padding: 20px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #6366f1; }
        .value { margin-left: 10px; }
        .footer { text-align: center; padding: 20px; color: #888; font-size: 12px; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2>New Contact Form Submission</h2>
        </div>
        <div class='content'>
            <div class='field'>
                <span class='label'>Name:</span>
                <span class='value'>$firstName $lastName</span>
            </div>
            <div class='field'>
                <span class='label'>Email:</span>
                <span class='value'>$email</span>
            </div>
            <div class='field'>
                <span class='label'>Company:</span>
                <span class='value'>$company</span>
            </div>
            <div class='field'>
                <span class='label'>Phone:</span>
                <span class='value'>$phone</span>
            </div>
            <div class='field'>
                <span class='label'>Interest:</span>
                <span class='value'>$interest</span>
            </div>
            <div class='field'>
                <span class='label'>Team Size:</span>
                <span class='value'>$teamSize</span>
            </div>
            <div class='field'>
                <span class='label'>Newsletter:</span>
                <span class='value'>" . ($newsletter ? 'Yes' : 'No') . "</span>
            </div>
            <div class='field'>
                <span class='label'>Message:</span>
                <div style='margin-top: 10px; padding: 15px; background: white; border-left: 3px solid #6366f1;'>
                    " . nl2br($message) . "
                </div>
            </div>
        </div>
        <div class='footer'>
            <p>Submitted on " . date('F j, Y \a\t g:i A') . "</p>
        </div>
    </div>
</body>
</html>
";

// Email headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: FlowSync Contact Form <noreply@flowsync.com>" . "\r\n";
$headers .= "Reply-To: $email" . "\r\n";

// Send email (uncomment to enable)
// $emailSent = mail($to, $subject, $emailBody, $headers);

// For development, we'll simulate success
$emailSent = true; // Change to actual mail() result in production

// ============================================
// OPTION 2: Save to Database
// ============================================

/*
// Uncomment this section to save to database
// Make sure to create the database and table first

try {
    // Database connection
    $host = 'localhost';
    $dbname = 'flowsync';
    $username = 'root';
    $password = '';
    
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Prepare statement
    $stmt = $pdo->prepare("
        INSERT INTO contacts 
        (first_name, last_name, email, company, phone, interest, team_size, message, newsletter, created_at) 
        VALUES 
        (:first_name, :last_name, :email, :company, :phone, :interest, :team_size, :message, :newsletter, NOW())
    ");
    
    // Execute
    $stmt->execute([
        ':first_name' => $firstName,
        ':last_name' => $lastName,
        ':email' => $email,
        ':company' => $company,
        ':phone' => $phone,
        ':interest' => $interest,
        ':team_size' => $teamSize,
        ':message' => $message,
        ':newsletter' => $newsletter
    ]);
    
    $dbSaved = true;
    
} catch(PDOException $e) {
    $dbSaved = false;
    error_log("Database error: " . $e->getMessage());
}
*/

// ============================================
// Redirect with Success Message
// ============================================

if ($emailSent) {
    $_SESSION['success'] = "Thank you for your message! We'll get back to you within 24 hours.";
    
    // If newsletter signup, you might want to add to mailing list here
    if ($newsletter) {
        // Add to your email marketing service (MailChimp, SendGrid, etc.)
        // addToMailingList($email, $firstName, $lastName);
    }
    
    header('Location: contact.php?success=1');
    exit;
} else {
    $_SESSION['error'] = "Sorry, there was an error sending your message. Please try again or email us directly.";
    header('Location: contact.php?error=1');
    exit;
}
?>