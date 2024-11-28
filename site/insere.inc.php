<?php

session_start(); // Inicia ou continua a sessão

include 'D:\Xampp\htdocs\github\trabalho-final\site\conecta_mysql.inc.php'; 

if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}

// Captura os dados do formulário
$nome = $conexao->real_escape_string($_POST["nome"]);
$email = $conexao->real_escape_string($_POST["gmail"]);
$senha = $conexao->real_escape_string($_POST["password"]);

// Insere os dados no banco de dados
$sql = "INSERT INTO cadastro (nome, email, senha) VALUES ('$nome', '$email', '$senha');";

if ($conexao->query($sql) === TRUE) {
    // Armazena os dados do usuário na sessão
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;

    // Redireciona para a página principal
    header("Location: index.php");
    exit(); // Finaliza o script para evitar execução adicional
} else {
    echo "Erro ao inserir: " . $conexao->error;
}

$conexao->close();
?>