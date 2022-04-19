<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando arrays no PHP</title>
</head>
<body>
    <h1>Trabalhando com arrays (vetores e matrizes)</h1>
    <hr>

    <h2>Arrays com índices numéricos</h2>

<?php
    // Sintaxe com colchetes
    $bandas = ["Savatage", "Iron Maiden", "Nightwish"];

    // Sintaxe com função array()
    $cursos = array("HTML5", "CSS3", "Nodejs", "Photoshop");

    // Sintaxe indicando indíce manualmente
    $comidaDeButeco[0] = "Bolinho de Bacalhau";
    $comidaDeButeco[1] = "Pastel";
    $comidaDeButeco[2] = "Esfiha de carne";

    // Constantes de arrays
    define("UNIDADES_SENAC", ["Penha", "Tatuapé", "Itaquera"]);
    const FRUTAS = ["Morango", "Abacaxi"];
?>

    <h3>Acessando os dados</h3>

    <ol>
        <li>Uma das bandas que mais gosto:
            <?=$bandas[2]?>
        </li>
        <li>Linguagem base da web: 
            <?=$cursos[0]?>
        </li>
        <li>Quero comer: <?=$comidaDeButeco[0]?></li>
        <li>Senac <?=UNIDADES_SENAC[1]?></li>
        <li>Fruta: <?=FRUTAS[1]?></li>
    </ol>

    <h2>Array associativos</h2>

<?php
    $curso = [
        // chave associativa (identificação => valor)
        "nome" => "Gastronomia",
        "cargaHoraria" => 150,
        "unidade" => "Penha"
    ];
?>
    <p>Nome do curso: <?=$curso["nome"]?> </p>
    <p>CH: <?=$curso["cargaHoraria"]?> horas </p>
    <p>Unidade: Senac <?=$curso["unidade"]?> </p>


    <h2>Matriz (array dentro de array)</h2>

<?php
    // Plano de Estudos de Front, Back e Design
    $planoDeEstudos = [  
        // 0                      1           2
        ["JavaScript Avançado", "Node.js", "React"], // 0

        // 0      1       2       3
        ["PHP", "POO", "MySQL", "Python"], // 1

        // 0                    1           2
        ["Teoria das Cores", "Photoshop", "UX/UI"]  // 2
    ];
?>

    <!-- Mini-exercício:
    Crie uma lista não-ordenada e mostre nela os seguintes itens:
    React, PHP/MySQL, Photoshop e Teoria das cores.    
-->
    <ul>
        <li> <?=$planoDeEstudos[0][2]?>  </li>
        <li> <?=$planoDeEstudos[1][0]?>/<?=$planoDeEstudos[1][2]?> </li>
        <li> <?=$planoDeEstudos[2][1]?> e <?=$planoDeEstudos[2][0]?> </li>
    </ul>

    <h2>Análise de arrays (debug/depuração)</h2>

    <p><?php var_dump($bandas); ?></p>
    <pre><?=var_dump($bandas)?></pre>

    <hr>
    <p><?php print_r($bandas); ?></p>
    <pre><?=print_r($bandas)?></pre>

    <hr>

    <pre> <?=var_dump($planoDeEstudos)?> </pre>






</body>
</html>