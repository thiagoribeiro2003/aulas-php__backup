<?php
define("ESCOLA","Senac");
$curso = "Técnico em informática para Internet";
$tecnologias = ["HTML", "CSS", "JS", "PHP"];

function verificaIdade(int $idade):string {
    return $idade >- 18 ? "maior" : "menor";
}

?> 

