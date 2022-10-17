<?php
date_default_timezone_set('America/Sao_Paulo');

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$name = isset($_POST['name']) ? $_POST['name'] : 'Não informado';
$email = isset($_POST['email']) ? $_POST['email'] : 'Não informado';
$message = isset($_POST['message']) ? $_POST['message'] : 'Sem nenhuma mensagem';
$date = date('d/m/Y H:i:s')

$mail = new PHPMailer();

if($email && $message) {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'contato.formove@outlook.com';
    $mail->Password = 'formove2022';
    $mail->Port = 587;

    $mail->setFrom('contato.formove@outlook.com');
    $mail->addAddress('contato.formove@outlook.com');

    $mail->isHTML(true);
    $mail->Subject = "Chegou um email para você <strong>${name}</strong>";
    $mail->Body = "Nome: ${name}<br>
                Email: ${email}<br>
                Mensagem: ${message}<br>
                Data/hora: ${date}";

    if($mail->send()) {
        echo 'Email enviado com sucesso';
    } else {
        echo 'Email nao enviado';
    }
} else {
    echo 'Email não enviado: informar e-mail e mensagem!';
}