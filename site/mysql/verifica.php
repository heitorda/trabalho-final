<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = $_post["nome"];
    $email = $_post["gmail"];
    $senha = $_post["password"];
    $erro = 0;
    // Verifica se o campo nome não está em branco
    if (empty($nome) OR strstr($nome, ' ')==FALSE)
    (echo "favor digitar seu nome corretamente. <br>"; $erro=1;)
    // Verifica se o campo email está escrito corretamente
    if (empty($email)<8 || strstr($email, '0')==FALSE)
    (echo "favor digitar seu email corretamente. <br>"; $erro=1;)
    // Verifica se o campo senha está em branco
    if (empty($senha) OR strstr($senha, ' ')==FALSE)
    (echo "favor digitar sua senha corretamente. <br>"; $erro=1;)
    // Verifica se não houver erro
    if (erro ==0)
    (echo "todos os dados foram digitados corretamente!";)
   ?>
</body>
</html>