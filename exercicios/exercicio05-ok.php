<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05 - Resolvido</title>
    <style>
        .aprovado { color: blue; }
        .reprovado { color: red; }
    </style>
</head>
<body>
    <h1>Exercício 05 - Resolvido</h1>
    <hr>
    <!-- 
Exercício 05 - Funções
Crie duas variáveis para representar as notas de um aluno.
Calcule a média destas notas e verifique a situação do aluno (aprovado ou reprovado).
Desafio: use funções para isolar a lógica de cálculo da média e verificação da situação do aluno.        
     -->
<?php
function calculaMedia($n1, $n2) {
    $media = ($n1 + $n2) / 2;
    return $media;
}


function verificaSituacao( $m ) {
    if($m >= 7){
        return "aprovado";
    } else {
        return "reprovado";
    }
}

/* ************************* */
$nota1 = 7;
$nota2 = 10;
$media = calculaMedia($nota1, $nota2);
?>
<p> <?=$media?> </p>
<p class="<?=verificaSituacao($media)?>">
<?=verificaSituacao($media)?> </p>



</body>
</html>