<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = $_POST["nome"];
    $email = $_POST["gmail"];
    $senha = $_POST["password"];
    $erro = 0;
    
    // Verifica se o campo nome não está em branco
    if (empty($nome) OR strstr($nome, ' ')==FALSE)
    {echo "favor digitar seu nome corretamente. <br>"; $erro=1;}

    // Verifica se o campo email está escrito corretamente
    if (empty($email) || strlen($email) < 8 || strstr($email, '@') == FALSE) {
        echo "Favor digitar seu email corretamente. <br>";
        $erro = 1;
    }
    

    // Verifica se o campo senha está em branco
    if (empty($senha) || strlen($senha) < 6) { // Exemplo: senha com no mínimo 6 caracteres
        echo "Favor digitar sua senha corretamente. <br>";
        $erro = 1;
    }
    

    // Verifica se não houver erro
    if ($erro==0)
    {echo "todos os dados foram digitados corretamente!";}
    

    // verifica se não houver erro - neste caso chama a include para inserir os dados
    if ($erro == 0) {
        echo "todos os dados foram digitados corretamente. <br>";
        include 'insere.inc.php';
    }
   ?>
</body>
</html>