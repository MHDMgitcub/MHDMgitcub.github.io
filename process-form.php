<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Change this to the email address where you want to receive form submissions
    $to = "morgan.hd.monchenault@gmail.com";
    $subject = "New Contact Form Submission";
    $messageBody = "Name: $name\nEmail: $email\nMessage: $message";

    // Use the mail() function to send the email
    mail($to, $subject, $messageBody);

    // Optionally, you can redirect the user to a thank-you page
    header("Location: thank-you.html");
    exit();
}
?>

