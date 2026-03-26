<?php
session_start();
require '../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

use PHPMailer\PHPMailer\PHPMailer;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ../../index.php");
    exit;
}

if (!empty($_POST['website'])) {
    header("Location: ../../index.php?err=email_falha");
    exit;
}

if (isset($_SESSION['last_send']) && time() - $_SESSION['last_send'] < 60) {
    header("Location: ../../index.php?err=cooldown");
    exit;
}

$nome = htmlspecialchars($_POST['nome'] ?? '', ENT_QUOTES, 'UTF-8');
$email = $_POST['email'] ?? '';
$assunto = htmlspecialchars($_POST['assunto'] ?? '', ENT_QUOTES, 'UTF-8');
$mensagem = htmlspecialchars($_POST['mensagem'] ?? '', ENT_QUOTES, 'UTF-8');

if (empty($nome) || empty($email) || empty($assunto) || empty($mensagem)) {
    header("Location: ../../index.php?err=campos_obrigatorios");
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../../index.php?err=email_invalido");
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

    $mail->setFrom('douglasgomesaqui@gmail.com', 'mensagem do portifólio');
    $mail->addAddress('douglasgomesaqui@gmail.com');

    $mail->addReplyTo($email, $nome);

    $mail->isHTML(true);
    $mail->Subject = $assunto;
    $mail->Body = "
        <b>Nome:</b> $nome <br>
        <b>Email:</b> $email <br><br>
        <b>Mensagem:</b><br>$mensagem
    ";

    if ($mail->send()) {
        $_SESSION['last_send'] = time();
        header("Location: ../../index.php?msg=email_sucesso");
        exit;
    } else {
        header("Location: ../../index.php?err=email_falha");
        exit;
    }
} catch (Exception $e) {
    header("Location: ../../index.php?err=email_falha");
    exit;
}
