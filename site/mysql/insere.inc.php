<?php
include 'conectar_mysql.inc';

    $nome = $_post["nome"];
    $email = $_post["gmail"];
    $senha = $_post["password"];

    $sql = "INSERT INTO cadastro values";
    $sql .= ('$nome','email','password')

    if ($conexao->query($sql) === TRUE){
        ECHO "USUARIO INCLUIDO COM SUCESSO"
    
    } else {
        echo 'erro:' . $sql . '<br>' . $conexao->erro;
    }

    $conexao->close();

    ?>