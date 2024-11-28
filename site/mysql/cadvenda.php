<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lojavirtual";

// Criação da conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Recebe os dados JSON enviados via POST
$data = json_decode(file_get_contents('php://input'), true);

if (!empty($data)) {
    // Preparar a consulta SQL para evitar SQL injection
    $stmt = $conn->prepare("INSERT INTO vendas (produto, quantidade, preco_unitario, total) VALUES (?, ?, ?, ?)");

    // Verifica se a preparação da consulta foi bem-sucedida
    if ($stmt === false) {
        die("Erro na preparação da consulta: " . $conn->error);
    }

    // Itera sobre os itens no carrinho e insere cada um
    foreach ($data as $item) {
        $produto = $item['name'];
        $quantidade = $item['quantity'];
        $preco_unitario = $item['price'];
        $total = $preco_unitario * $quantidade;

        // Associa as variáveis com os parâmetros da consulta
        $stmt->bind_param("sidi", $produto, $quantidade, $preco_unitario, $total);

        // Executa a consulta
        if ($stmt->execute()) {
            echo "Venda registrada com sucesso para o produto: $produto\n";
        } else {
            echo "Erro ao registrar venda do produto $produto: " . $stmt->error . "\n";
        }
    }

    // Fecha a consulta preparada
    $stmt->close();
} else {
    echo "Nenhum dado recebido!";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
