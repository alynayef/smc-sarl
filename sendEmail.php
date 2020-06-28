<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "mail.privateemail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "contact@reine-nature.xyz";
        $mail->Password = 'Hamete_16';
        $mail->Port = 465; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom('ne_pas_repondre@scm.contact.com', 'Accusé de Reception');
        $mail->addAddress($email);
        $mail->Subject = $subject;
        $mail->Body = $body;
		

        if ($mail->send()) {
			//Email Settings
			$mail->isHTML(true);
			$mail->setFrom('ne_pas_repondre@scm.contact.com', 'Accusé de Reception');
			$mail->addAddress('alynayef@gmail.com');
			$mail->Subject = $subject;
			$mail->Body = $body;
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>
