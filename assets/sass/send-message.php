<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set the recipient email address (your Gmail account)
    $to = 'jdsnavarro@gmail.com';

    // Set the email subject
    $email_subject = 'New message from ' . $name . ' (' . $email . ') - ' . $subject;

    // Set the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";

    // Set the email headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send the email
    if(mail($to, $email_subject, $email_message, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Sorry, there was a problem sending your message.";
    }

}
?>
