<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops PHP</title>
</head>
<body>
    <h1>Estruturas de Controle de Repetição</h1>
    <hr>
    <h2>while (enquanto)</h2>

<?php
$i = 1;
while( $i <= 5 ){
    echo "<p>$i</p>";    
    $i++;
}
?>

<?php
$ii = 1;
while( $ii <= 5 ){
?>
    <p><?=$ii?></p>    
<?php
    $ii++;
}
?>

<hr>

<h2>do/while (repita)</h2>

<?php
$j = 1;
do {
?>
    <div> <h3>Olá!</h3></div>
<?php
    $j++;
} while ($j <= 3);
?>

<hr>

<h2>for (para)</h2>

<?php
// para i de 1 até 10 faça

//   controle; condição; atualização
for( $i = 1; $i <= 10; $i++ ){
    echo $i." ";
}

/* Exercícios
1) Crie um array com os meses do ano
2) Usando um loop for, acesse e mostre os nomes dos meses dentro de uma lista ordenada. */

$meses = ["janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"];
?>

<ol>
<?php 
$quantidade = count($meses);
for($i = 0; $i < $quantidade; $i++){ ?>
    <li> <?=$meses[$i]?> </li>
<?php } ?>
</ol>

<hr>

<h2>foreach (para cada...)</h2>
<ol>
    <?php foreach( $meses as $mes ) { ?>
    <li> <?=$mes?> </li>
    <?php } ?>
</ol>

<?php
// Array associativo
$clubes = [
    "Corinthians" => "Timão",
    "Palmeiras" => "Porco",
    "São Paulo" => "Tricolor",
    "Santos" => "Peixe"
];

// foreach( $clubes as $clube ){
foreach($clubes as $clube => $apelido) {
?>
    <p>
    O <?=$clube?> é conhecido como <?=$apelido?> 
    </p>
<?php
}

// Matriz (array dentro de array)
$alunos = [
    [
        "nome" => "Chaves",
        "idade" => 8
    ],
    [
        "nome" => "Chapolin",
        "idade" => 20
    ],
    [
        "nome" => "Chiquinha",
        "idade" => 10
    ]
];

foreach( $alunos as $aluno ){
?>
    <p> Nome: <?=$aluno['nome']?> </p>
    <p> Idade: <?=$aluno['idade']?> </p>
    <hr>
<?php
}
?>






</body>
</html>