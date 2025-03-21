<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to = "sibonisolsibandze@gmail.com";
    $subject = "New Contact Form Submission";

    // Append all form details into the message variable
    $message = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";

    // Fix header formatting
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send email to $to from $email";
    }
} else {
    echo "Invalid request method.";
}
?>
