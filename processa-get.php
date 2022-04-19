<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento GET</title>
</head>
<body>
    <h1>Processamneto de dados usando GET</h1>
    <hr>

<?php
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $mensagem = $_GET['mensagem'];
?>

<h2>Dados:</h2>
<ul>
    <li>Nome: <?=$nome?></li>
    <li>E-mail:<?=$email?> </li>
    <li>Mensagem: <?=$mensagem?></li>
</ul>    
</body>
</html>
