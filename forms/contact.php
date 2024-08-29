<?php
$to = 'contact@eduvision.co.nz';
$subject = $_POST['subject'];
$message = 'From: ' . $_POST['name'] . "\n" . 'Email: ' . $_POST['email'] . "\n\n" . $_POST['message'];
$headers = 'From: ' . $_POST['email'];

if (mail($to, $subject, $message, $headers)) {
    echo 'Message sent!';
} else {
    echo 'Message could not be sent!';
}
?>
