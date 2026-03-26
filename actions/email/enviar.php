<?php

require '../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

use PHPMailer\PHPMailer\PHPMailer;

$nome = htmlspecialchars($_POST['nome']);
$email = htmlspecialchars($_POST['email']);
$assunto = htmlspecialchars($_POST['assunto']);
$mensagem = htmlspecialchars($_POST['mensagem']);

if (empty($nome)) {
    header("Location: ../../index.php");
    exit;
}

if (empty($email)) {
     header("Location: ../../index.php");
    exit;
}

if (empty($assunto)) {
     header("Location: ../../index.php");
    exit;
}

if (empty($mensagem)) {
     header("Location: ../../index.php");
    exit;
}

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = $_ENV['host'];
    $mail->SMTPAuth = true;
    $mail->Username = $_ENV['username'];
    $mail->Password = $_ENV['password'];
    $mail->SMTPSecure = $_ENV['smtp_secure'];
    $mail->Port = $_ENV['port'];
    $mail->CharSet = 'UTF-8';
    $mail->addReplyTo($email, $nome);
    // $mail->SMTPDebug = 2;

    $mail->setFrom('douglasgomesaqui@gmail.com', 'Portfólio');
    $mail->addAddress('douglasgomesaqui@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = $assunto;
    $mail->Body = "
        <b>Nome:</b> $nome <br>
        <b>Email:</b> $email <br><br>
        <b>Mensagem:</b><br>$mensagem
    ";

    if($mail->send());
    {
        header("Location: ../../index.php");
    }

} catch (Exception $e) {
    echo "Erro: {$mail->ErrorInfo}";
}