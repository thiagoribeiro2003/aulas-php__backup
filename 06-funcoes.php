<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções no PHP</title>
</head>
<body>
    <h1>Criando e usando funções</h1>
    <hr>

    <h2>Funções como sub-rotina ou procedimento</h2>
<?php
    function dadosAutor() {
        echo "<div>";
        echo "<p>Tiago B. dos Santos</p>";
        echo "<p>tiago@gmail.com</p>";
        echo "</div>";
    }
?>
<section>
    <h3>Chamada da sub-rotina</h3>
    <?=dadosAutor()?>
    <article>
        <h4>Outra chamada</h4>
        <?=dadosAutor()?>
    </article>
</section>

<hr>

    <h2>Função com retorno de dados</h2>
<?php
function dadosCurso(){
    return "Téc. em Informática para Internet";    
}
?>
<p> Estamos no curso de <?=dadosCurso()?> </p>
<p><?=dadosCurso()?> é ministrado no Senac Penha</p>

<hr>

<h2>Função com parâmetros (ou argumentos)</h2>
<?php
/* O terceiro parâmetro quando não informado
assumirá o valor padrão (no caso, zero) */
function soma($valor1, $valor2, $valor3 = 0) {
    /* Usando variável local: */
    $total = $valor1 + $valor2 + $valor3;
    return $total;
}
?>
<p> <?=soma(10, 20, 30)?> </p>
<p> <?=soma(100, 200, 300)?> </p>
<p> <?=soma(1, 2)?> </p>

<!-- VARIAVEL ABAIXO É DE ESCOPO GLOBAL -->
<?php $total = soma(1500, 2000, 125); ?>
<p> <?=$total?> </p>

<?php
/* Passando uma função como condição de um if */
if( soma(500, 200, 700) > 1000 ){
    echo "Resultado da função é maior/igual a 1000";
}

function verificaNegativo($valor){
    // VERSÃO 1: if/else tradicional
    /* if( $valor < 0 ){
        return "negativo";
    } else {
        return "não é negativo";
    } */
    
    // VERSÃO 2: if/else usando operador ternário
    return $valor < 0 ? "negativo" : "não é negativo";
}
?>
<p> <?=verificaNegativo(10)?> </p>
<p> <?=verificaNegativo(-150)?> </p>
<p> <?=verificaNegativo(258.99)?> </p>

<h2>Função anônima (closure, lambda)</h2>
<?php
$formataPreco = function($valor) {
    return "R$ " .number_format($valor, 2, ",", ".");
};
?>

<p> <?=$formataPreco(1000)?> </p>
<p> <?=$formataPreco(1500)?> </p>
<p> <?=$formataPreco(1500.75)?></p>
<hr>

<h2>Indução de tipos</h2>
<?php
/*Tipos de dados no PHP
float: valores númericos podendo ter casa decimal
int: valores númericos inteiros
string: caracteres*/ 
function calculaMedia(float $n1, float $n2):float {
    $media = ($n1 + $n2) / 2;
    return $media;
}
?>
<p><?=calculaMedia(8.5,7)?></p>
<?php
function verificaSituacao( float $m ):string {
    if($m >= 7){
        return "aprovado";
    } else {
        return "reprovado";
    }
}
?>
<p><?php verifiSituacao ?></p>






</body>
</html>