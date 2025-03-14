<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["full-name"]);
    $email = htmlspecialchars($_POST["email"]);
    $assunto = htmlspecialchars($_POST["subject"]);
    $mensagem = nl2br(htmlspecialchars($_POST["message"]));

    $para = "eduardoo.js19@gmail.com";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $corpo_email = "<h2>Novo contato do site</h2>";
    $corpo_email .= "<p><strong>Nome:</strong> $nome</p>";
    $corpo_email .= "<p><strong>Email:</strong> $email</p>";
    $corpo_email .= "<p><strong>Assunto:</strong> $assunto</p>";
    $corpo_email .= "<p><strong>Mensagem:</strong><br>$mensagem</p>";

    if (mail($para, $assunto, $corpo_email, $headers)) {
        echo "sucesso";
    } else {
        echo "falha";
    }
} else {
    echo "Acesso negado.";
}
?>
