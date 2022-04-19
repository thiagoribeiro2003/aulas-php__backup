<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento Post</title>
</head>
<body>
    <h1>Seus dados são :</h1>
    <hr>

    <?php
 if ( empty($_POST['produto']) || empty($_POST ['preço']) ) {
    ?>
     <p style="color: red;">Você deve preencher 'produto' e 'preço'!</p>
<?php
 } else {

   
   
   // } else {

        // Captudando os dados transmitidos e sanitizando (limpando)
        $produto = filter_input(INPUT_POST,'produto', FILTER_SANITIZE_SPECIAL_CHARS);
        $fabricantes = filter_input(INPUT_POST,'fabricantes',FILTER_SANITIZE_SPECIAL_CHARS);
        $preco = filter_input(INPUT_POST, 'preço',FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $descricao = $_POST["descrição"];
    ?>

    <h2>Dados:</h2>

    <ul>
        <li>Produto: <?=$produto?></li>
        <li>Fabricante: <?=$fabricantes?></li>
        <li>Preço: R$ <?=number_format($preco, 2, ",", ".")?></li>
        <li>Descrição: <?=nl2br($descricao)?></li> <!-- nl2br -> new line 2 break (cria <br>) -->
    </ul>
   <?php
    }
   ?> 
</body>
</html>