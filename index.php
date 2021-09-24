<?php
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mai = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'socleandrosamuel18@gmail.com';
    $mail->Password = 'sandra13L';
    $mail->port = '587';

    $mail->setFrom('socleandrosamuel18@gmail.com');
    $mail->addAdress('socleandrosamuel18@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'teste de email via gmail';
    $mail->Body = 'Chegou o email teste <strong>Leandro Samuel</strong>';
    $mail->AltBody = 'Chegou o email teste';

    if(! $mail->send()) {
        echo 'Email enviado com sucesso';
    } else {
        echo 'Email nao enviado';
    }

} catch (Exception $e) {
    echo "Erro ao enviar a mensagem: {$mail->ErrorInfo}";
}

?>