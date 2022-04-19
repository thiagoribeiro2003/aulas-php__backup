<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais PHP</title>
    <style>
        .ok { color: blue; }
        .repor { color: red; }
    </style>
</head>
<body>
    <h1>(VERSÃO 2) Estruturas de Controle Condicional</h1>
    <hr>

    <h2>Simples</h2>   
<?php
    $numero = 5;
    if( $numero > 1 ){
?>
        <p><?=$numero?> é maior que 1</p>
<?php
    }
?>
    

    <h2>Composta</h2>
<?php
    $produto = "Ultrabook Asus";
    $qtdEmEstoque = 0; 
    $qtdCritica = 14;
?> 

<h3><?=$produto?></h3>

<?php
if( $qtdEmEstoque < $qtdCritica ):
?>
    <p class="repor">É necessário comprar!</p>
    <?php
    if($qtdEmEstoque === 0):
    ?>
        <p><mark><b>URGENTE</b></mark></p>
<?php
    endif;
else: 
?>
    <p class="ok">Estoque OK</p>
<?php    
endif;
?>

    <h2>Encadeada</h2>
<?php
$opcao = 1;
if($opcao === 1){
    $opcaoEscolhida = "Pastel";
} elseif($opcao === 2) {
    $opcaoEscolhida = "Pizza";
} elseif($opcao === 3){
    $opcaoEscolhida = "Esfiha";
} else {
    $opcaoEscolhida = "Opção inválida";
}
?>
<p> <?=$opcaoEscolhida?> </p>

<h2>Switch/Case</h2>
<?php
switch($opcao){
    case 1: $pedido = "Pastel"; break;
    case 2: $pedido = "Pizza"; break;
    case 3: $pedido = "Esfiha"; break;
    default: $pedido = "Opção inválida"; break;
}
?>
<p> <?=$pedido?> </p>


</body>
</html>