<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas</title>
</head>
<body>
    <h1>Exe,plos de funções nativas do PHP</h1>
    <hr>

    <h2>Strings</h2>
    <?php 
    /*trim(parânetro)* -> remove espaços antes e depois de stringn*/ 
    $nome = "Thiago Ribeiro Lopes da Silva";
    $nomeSemEspaco = trim($nome);
    ?>
    <pre><?= var_dump($nome)?></pre>
    <pre><?= var_dump($nomeSemEspaco)?></pre>

    <h3>str_replace()</h3>

    <?php
        $fraseFeia = "<p> Fulano é bobão e xarope</p>";
        $fraseBonita = str_replace(
         ["bobão", "xarope"],
         ["cara legal","Thiago"],
                 $fraseFeia
                );
        
         echo $fraseFeia;
        echo $fraseBonita;
    ?>

    <h3>explode()</h3>
    <?php
    /*Dream: remove espaço*/
        $linguagens = "HTML - CSS - JS";
        $arrayLinguagens = explode(" - ", $linguagens);
    ?>

    <pre><?=var_dump($linguagens)?></pre>
    <pre> <?= var_dump($arrayLinguagens)?> </pre>

    <h2>Arrays</h2>

    <h3>implode()</h3>
<?php
$bandas = ["Savatage", "Nightwhish","Ghost"];
$stringBandas = implode(" / ", $bandas);
?>

<pre><?=var_dump($bandas)?></pre>
<pre><?=var_dump($stringBandas)?></pre>

    <h2>Filtros</h2>
<?php 
$email = "thiagoribeiro20003@gmail.com"
?>
<p>
<?= var_dump (filter_var($email, FILTER_VALIDATE_EMAIL) )?>
</p>

    <h3>Extract</h3>

<?php
$aluno = [
    "id" => "Thiago",
    "idade" => 18,
    "sexo" => "masculino",
    "cidade" => "São Paulo"
];
extract($aluno)
?>

<p><?=$id?></p>
<p><?=$idade?></p>
<p><?=$sexo?></p>
<p><?=$cidade?></p>

<?php
$email = "thiagoribeiro20003@gmail.com";
$ataque = "<script>document.body.innerHTML = 'Sou HACKHER'</script>";

$ataqueAnulado = filter_var($ataque, FILTER_SANITIZE_SPECIAL_CHARS);

echo $ataqueAnulado
?>

<p> <?= var_dump(filter_var($email,FILTER_VALIDATE_EMAIL))?></p>

<h2>Segurança(Criptografia)</h2>
<?php
$senha = "123abc"; //texto puro ou plain text (sem segurança)

/*Algoritmo mais comuns
MD5, SHA1, SHA256*/

//Ira transformar o valor da variável senha para criptografar em MD5
$senhaMD5 = md5($senha);

//Ira transformar o valor da variável senha para criptografar em SHA1
$senhaSHA1 = sha1($senha);

//Ira transformar o valor da variável senha para criptografar em SHA256
$senhaSHA256 = hash('sha256', $senha);

// Método recomendado atualmente para senhas 
$senhaSegura = password_hash($senha,PASSWORD_DEFAULT);
?>
<p>Senha (texto puro): <?=$senha?></p> 
<p>Senha (MD5): <?=$senhaMD5?></p>
<p>Senha (SHA1): <?=$senhaSHA1?></p>
<p>Senha (SHA256): <?=$senhaSHA256?></p>

<!-- Hash de 60 caracteres e toda vez q atualiza a pagina a senha muda-->
<p>Senha (usando ppassword_hash): <?=$senhaSegura?></p>

<?php 
// metodo para verificação de LOGIN e SENHAS (SEMPRE COLOCAR ESTA MESMA ESTRUTURA DE CODIGO QUANDO FOR USAR HASH) hash
$senhaDigitada = "123abc";
if (password_verify($senhaDigitada, $senhaSegura) ) {
    echo "beleza, senhas iguais...";
} else {
    echo "opa, senha errada!";
}
?>
</body>
</html>