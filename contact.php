<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'kevinsukadana@gmail.com';
    $subject = $_POST['subject'];

    $body = "From: $name\nE-Mail: $email\nSubject: $subject\nMessage:\n$message";

    $headers = 'From: your-email@gmail.com' . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        header("Location: thank-you.html");
        exit;
    } else {
        echo "Error!";
    }
}
?>
