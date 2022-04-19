<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 - Resolvido</title>
    <style>
        article {
            padding: 2%;
            box-shadow: black 1px 1px 5px;
            width: 50vw;
            margin: auto;
        }
    </style>
</head>
<body>
    <h1>Exercício 02 - Resolvido</h1>
    <hr>

<?php
$dados1 = [
    "usuario" => "tiago.bsantos",
    "email" => "tiago@gmail.com",
    "idade" => 38,
    "sexo" => "masculino",
    "cidade" => "São Paulo"
];

$dados2 = [
    "usuario" => "fulana.silva",
    "email" => "fulana@hotmail.com",
    "idade" => 18,
    "sexo" => "feminino",
    "cidade" => "Rio de Janeiro"
];
?>
   <h2>Saída de dados</h2> 

<article>
    <h2>Dados</h2>
<p>
Usuário: <?=$dados1['usuario']?></p>
<p>E-mail: <?=$dados1['email']?></p>
<p>Idade: <?=$dados1['idade']?> anos.</p>
<p>Sexo: <?=$dados1['sexo']?></p>
</article>

   <hr>

   <article>
       <h2>Dados</h2>
       <p>Usuário: <?=$dados2['usuario']?></p>
       <p>E-mail: <?=$dados2['email']?></p>
       <p>Idade: <?=$dados2['idade']?> anos.</p>
       <p>Sexo: <?=$dados2['sexo']?></p>
   </article>

</body>
</html>