<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'tabacaria';

// Configurar mysqli para exibir erros
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conexao = new mysqli($host, $usuario, $senha, $banco);
    echo "Conexão realizada com sucesso!";
} catch (Exception $e) {
    die("Erro ao conectar: " . $e->getMessage());
}
?>
