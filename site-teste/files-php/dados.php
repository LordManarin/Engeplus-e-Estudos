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
    $mensagem = $_GET["nmsg"];
    echo "Obrigado pela mensagem $nome!";

    $query = "INSERT INTO contato(nome, telefone, email, mensagem) VALUES ('$nome','$telefone','$email','$mensagem')";
    $executar = mysqli_query($connect, $query);

    ?>    
	<a href="../contato.html">voltar</a>
	</div>
  </body>
</html>