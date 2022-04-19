<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 (corrigido)</title>
</head>
<body>
    <h1>Exercício 01 (corrigido)</h1>
    <hr>

<?php
// $data = "18/03/2022";

// Configurando o timezone para nossa região
date_default_timezone_set("America/Sao_Paulo"); 

$data = date("d/m/Y H:i"); // função date()
//define("NOME", "Ozzy Osbourne"); // Sintaxe 1
const NOME = "Ozzy Osbourne"; // Sintaxe 2
$curso = "Gastronomia";
$cargaHoraria = 500;
$limite = $cargaHoraria * 0.25;
?>

<h2>Dados (acesso feito em <?=$data?>) </h2>
<p>Nome: <?=NOME?> </p> <!-- Saída simplificada -->
<p>Curso: <?=$curso?> </p>
<p>Este curso tem <?=$cargaHoraria?> horas e seu limite de faltas
 é de <?=$limite?> horas.</p>


</body>
</html>