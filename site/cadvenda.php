<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lojavirtual";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connection_error) {
    die("conexão falhou: " . $conn->connection_error);
}

$data = json_decode(file_get_contents('php://input'), true);

if (!empty($data)) {
    foreach ($dade as $item) {
        $produto = $item['name'];
        $quantidade = $item['quantity'];
        $preço_unitario = $item['price'];
        $total = $preço_unitario * $quantidade;
        
        $sql = "INSERT INTO vendas (produto, quantidade, preco_unitario, total)
        VALUES ('$produto, $quantidade,  $preço_unitario, $total)";
    }
}