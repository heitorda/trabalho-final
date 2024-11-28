<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'tabacaria';

$conexao = mysqli_connect('localhost','root','usbw','tabacaria');
mysqli_set_charset($conexao, 'utf8');
if($conexao->connect_error)

?>