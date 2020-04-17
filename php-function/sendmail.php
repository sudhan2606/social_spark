<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'tushar.solanki4@gmail.com';          // SMTP username
$mail->Password = 'lordvishnu99'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom('tushar.solanki4@gmail.com', 'SocialSpark');
//$mail->addReplyTo('tushar.solanki4@gmail.com', 'SocialSpark');
$mail->addAddress($email);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Welcome to SocialSpark</h1>
<h4>This is a social platform for teachers and student to discuss about the queries and have general discussion on various topics!</h4>
<h3>Welcome aboard, have fun socialising! ThankYou </h3>';

$mail->Subject = 'WelcomeMessage';
$mail->Body    = $bodyContent;

//$mail->addAttachment('/var/tmp/file.tar.gz');
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); 

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} 

?>