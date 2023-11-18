<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if(isset($_POST['send'])) {

    /* class instance PHPMailer */
$mail = new PHPMailer(true);

try {
    /*settings*/

    
    $mail->isSMTP();


    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'ana.dev.php@gmail.com';
    $mail->Password   = '';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    //Recipients
    $mail->setFrom('ana.dev.php@gmail.com', 'Mailer');
    $mail->addAddress('ana.dev.php@gmail.com', 'Ana Salazar');
    $mail->addReplyTo('ana.dev.php@gmail.com', 'Information');

    $mail->isHTML(true);

    $mail->Subject = 'Mensagem: via Construsite';
    
    $message = "Mensagem enviada via site: <br>:
                Nome:". $_POST["nName"]. "<br>
                Telefone:". $_POST["nTel"]. "<br>
                Email:". $_POST["nEmail"]. "<br>
                Mensagem: <br>".
                $_POST["nMessage"];
    
    $mail->Body = $message;
    $mail->AltBody = '';

    $mail->send();

    
    echo "";


} catch (Exception $e) {
    echo "Erro ao enviar email. Mailer Error: {$mail->ErrorInfo}";
};
} else {
    echo "Erro ao enviar email, acesso não foi via formulário";
}


?>


