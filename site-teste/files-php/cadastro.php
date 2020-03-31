<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Contato</title>
    <meta charset="utf-8">
</head>
<body>
<div>
<?php
$server ="localhost";
$user="root";
$password="";
$bd = "contato";

$connect = mysqli_connect($server,$user,$password,$bd);

$nome = $_GET["tnome"];
$telefone = $_GET["tphone"];
$email = $_GET["tmail"];
$cpf = $_GET["tcpf"];

$query = "INSERT INTO cadastro (nome, fone, email, cpf) VALUES ('$nome','$telefone', '$email', '$cpf')";

$executar = mysqli_query($connect, $query);
?>
    <a href="javascript:history.back()">Voltar</a>
</div>
</body>
</html>
