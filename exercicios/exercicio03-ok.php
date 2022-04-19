<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 - Resolvido</title>
</head>
<body>
    <h1>Exercício 03 - Resolvido</h1>
    <hr>

<!-- 
Se salário menor que 500, calcule um aumento de 15%
Senão, se salário menor ou igual a 1000, calcule um aumento de 10%
Senão calcule um aumento de 5%

Mostre no HTML uma mensagem informando o valor do salário antigo (antes do reajuste) e do novo salário (após o reajuste).
 -->
<?php
$salario = 5000; // entrada

if($salario < 500){
    $novoSalario = $salario * 1.15;
} elseif($salario <= 1000){
    $novoSalario = $salario * 1.10;
} else {
    $novoSalario = $salario * 1.05;
}
/* number_format(valor, 2, ",", ".") */
?>
<p>Salário antigo: <?=$salario?></p>
<p>Salário antigo: R$ <?=number_format($salario, 2, ",", ".")?></p>

<p>Salário novo: <?=$novoSalario?></p>
<p>Salário novo: R$ <?=number_format($novoSalario, 2, ",", ".")?></p>




</body>
</html>