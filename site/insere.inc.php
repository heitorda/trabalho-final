<?php
include 'D:\Xampp\htdocs\github\trabalho-final\site\conecta_mysql.inc.php';

$nome = $conexao->real_escape_string($_POST["nome"]);
$email = $conexao->real_escape_string($_POST["gmail"]);
$senha = $conexao->real_escape_string($_POST["password"]);

$sql = "INSERT INTO cadastro (nome, email, senha) VALUES ('$nome', '$email', '$senha');";

if ($conexao->query($sql) === TRUE) {
    echo "Usuário incluído com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>
