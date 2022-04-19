<!-- Fazendo a inclusão de um arquivo de programação -->
<?php include "recursos.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de Recursos</title>
</head>
<body>
    <h1>Inclusão de Recursos</h1>
    <hr>


<h2> <?=ESCOLA?> </h2>
<p>Estamos fazendo o curso de <?=$curso?>.</p>
<ul>
    <?php foreach($tecnologias as $tecnologia){?>
        <li> <?=$tecnologia?> </li>
    <?php }?>
</ul>
<p>O aluno Chapolin Colorado tem 25 anos e é <?=verificaIdade(25)?> de idade. </p>
<hr>

<article>
    <h2>Conteúdo qualquer</h2>
    <?php include "textos.php" ?>
    <!--NO CASO DE ERROS O REQUIRE PARA TUDO, JAO INCLUDE NAO E TENTA CONTINUAR MESMO COM ERRO-->
</article>

</body>
</html>