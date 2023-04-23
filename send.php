<?php
if(isset($_POST['submit'])) {
    $to = "pranavranav24@gmail.com"; // Change this to your email address
    $subject = "Message from Contact Form";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $body = "From: $name\nEmail: $email\nMessage:\n$message";

    // Send email
    mail($to, $subject, $body);

    // Redirect to thank you page
    header("Location: thank-you.html");
    exit();
}
?>
