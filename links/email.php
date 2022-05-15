<?php
$remetente="gusttavitor14@gmail.com";
$nome=$_REQUEST['nome'];
$email=$_REQUEST['email'];
$assunto=$_REQUEST['assunto'];
$mensagem=$_REQUEST['mensagem'];

$body . "===================================" . "\n";
$body = $body . "Feedback - Portifólio Digital" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "===================================" . "\n";

mail($remetente, $assunto, $body, "From:$email\r\n");

header("location:agradecimento.htm");
?>