<?php
// Replace contact@example.com with your real receiving email address
$receiving_email_address = 'principle@vipgroupofcolleges.com';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    require 'PHPMailer/PHPMailerAutoload.php';  // Ensure you have the PHPMailer library included

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'vipgroupofcollegesbot@gmail.com'; // Your Gmail address
    $mail->Password = 'zvdq gdfi zepg iahi'; // Your Gmail password or App Password if 2FA is enabled
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom($email, $name);
    $mail->addAddress($receiving_email_address);
    $mail->Subject = $subject;
    $mail->Body = "From: $name\nEmail: $email\n\nMessage:\n$message";

    if ($mail->send()) {
        echo 'Message sent successfully!';
    } else {
        echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    }
} else {
    die('Server Are Also Coming Soon!');
}
?>
