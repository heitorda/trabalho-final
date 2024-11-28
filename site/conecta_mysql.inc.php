<?php
$host = 'localhost';
$usuario = 'root';
$senha = ''; // Alterar para a senha correta, se houver
$banco = 'tabacaria';

// Estabelecendo a  conexão
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

// Verificando a conexão
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>
