<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to = "sibonisolsibandze@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";
    $headers = "From: $email";
    $headers .= "\nReply-To: $email";


    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        error_log("Failed to send email to $to from $email", 0);
        echo "Failed to send message.";
    }
} else {
    echo "Invalid request method.";
}
?>
