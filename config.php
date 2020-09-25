<?php 
$con = mysqli_connect('localhost', 'root', '', 'testcyc');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth= true;
$mail->Username='MAIL_HERE';
$mail->Password='PASSWORD_HERE';
$mail->SMTPSecure='ssl';
$mail->Port=465;
$mail->isHTML(true);
$mail->setFrom('MAIL_HERE','Reset Password');

?>
