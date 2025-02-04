<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Set the recipient email address
    $to = "purply.eye7@gmail.com"; // Replace with your email address

    // Set the email subject
    $subject = "New Contact Form Submission from $name";

    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Set the email headers
    $headers = "From: $name <$email>";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "<p style='color: #a742f5; text-align: center;'>Thank you for contacting me! I'll get back to you soon.</p>";
    } else {
        echo "<p style='color: red; text-align: center;'>Oops! Something went wrong. Please try again.</p>";
    }
} else {
    echo "<p style='color: red; text-align: center;'>Invalid request. Please submit the form.</p>";
}
?>
