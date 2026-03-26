<?php

$msg = [
// email
"email_sucesso" => "Email enviado com sucesso! Obrigado por entrar em contato.",  
];

$err = [
// email
"email_falha" => "Ocorreu um erro ao enviar seu email. Por favor, tente novamente",
"campos_obrigatorios" => "Por favor, preencha todos os campos obrigatórios.",
"email_invalido" => "O email fornecido é inválido. Por favor, insira um email válido.",
"cooldown" => "Espere 1 minuto antes de enviar novamente.",
];
?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // Exibição de mensagem de alerta do SweetAlert2:
    <?php
    // Mensagens de sucesso:
    if (isset($_GET['msg']) && array_key_exists($_GET['msg'], $msg)) {
        $message = $msg[$_GET['msg']];
        echo "Swal.fire({
            icon: 'success',
            title: 'Sucesso',
            text: '$message',
            confirmButtonColor: '#3085d6',
        });";
         // Remover a mensagem da URL para evitar reaparecimento:
         echo "if (history.replaceState) {
            const url = new URL(window.location);
            url.searchParams.delete('msg');
            window.history.replaceState({}, document.title, url.toString());
        }";
    }
    ?>
    <?php
    // Mensagens de erro:
    if (isset($_GET['err']) && array_key_exists($_GET['err'], $err)) {
        $message = $err[$_GET['err']];
        echo "Swal.fire({
            icon: 'error',
            title: 'Erro',
            text: '$message',
            confirmButtonColor: '#d33',
        });";
    }
    // Remover a mensagem da URL para evitar reaparecimento:
    echo "if (history.replaceState) {
        const url = new URL(window.location);
        url.searchParams.delete('err');
        window.history.replaceState({}, document.title, url.toString());
    }";
    ?>
</script>