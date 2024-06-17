<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'ikrameachekar@outlook.com'; // Your email address
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/html\r\n";

    $body = "<h2>Contact Request</h2>
             <p><strong>Full Name:</strong> {$fullName}</p>
             <p><strong>Email:</strong> {$email}</p>
             <p><strong>Subject:</strong> {$subject}</p>
             <p><strong>Message:</strong><br>{$message}</p>";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message.";
    }
}
?>
