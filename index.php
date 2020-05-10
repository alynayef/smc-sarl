<?php include_once("index.html");
include_once("assets/phpMailer/PHPMailerAutoload.php");  
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '587';
$mail->isHTLM();
$mail->Username = 'alynayef@gmail.com';
$mail->password = 'Hamete_16';
$mail->setFrom('no-reply@smc-sarl.com');
$mail->Body = 'test marchel way';
$mail->AddAddress('alynayef@gmail');
$mail->send();
?>
