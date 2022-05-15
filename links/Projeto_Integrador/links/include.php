<html>

<head>
    <meta charset="utf-8">
    <title>Inclusão de usuários no DB
    </title>
</head>

<body>
    <a href="../index.html"><button>Voltar para o cadastro</button></a>
</body>

</html>
<?php
include_once("conexao.php");
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$inserirDados = "insert into cadastro (nome, email, cpf, senha, created) values ('$nome', '$email', '$cpf', '$senha', now())";
$resultado = mysqli_query($link, $inserirDados);
if (!$resultado) {
    echo ("Usuário não cadastrado.");
} else {
    echo ("Usuário cadastrado com sucesso.");
}
?>
<br>