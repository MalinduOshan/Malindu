<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['contact-name']);
    $phone = htmlspecialchars($_POST['contact-phone']);
    $email = htmlspecialchars($_POST['contact-email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['contact-message']);

    $to = "oshanmalindu4@gmail.com"; // Replace with your email address
    $email_subject = "New Contact Form Message: $subject";
    $email_body = "Name: $name\n";
    $email_body .= "Phone: $phone\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Message:\n$message\n";

    $headers = "From: $email";

    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
}
?>
