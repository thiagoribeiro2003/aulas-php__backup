<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento POST</title>
</head>
<body>
    <h1>Processamneto de dados usando POST</h1>
    <hr>
    

<?php
 //if ( empty($_POST['nome']) || empty($_POST ['email']) ) {
if ( empty($_POST['nome']) ){
    echo "preencha nome";
    die();
} 

if(empty($_POST ['email']) ) {
    echo "preencha email";
    die();
}

    ?>
     <!-- <p style="color: red;">Você deve preencher nome e e-mail!</p> -->
<?php
 //} else {

    // Capturando os dados transmitidos e sanitizando (limpando)
    $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input (INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    $mensagem = filter_input(INPUT_POST,'mensagem',FILTER_SANITIZE_SPECIAL_CHARS);

    // POST é um array super global.
    /*Usando o operador de coalescência nula ?? Se houver interesses, armazene seus valores. Senão, deixa o array vazio.*/ 

    //$interesses = $_POST["interesses"] ?? [];
    $interesses = filter_var_array(
        $_POST['interesses'] ?? [],
        FILTER_SANITIZE_SPECIAL_CHARS
    ); 


    // ?? (php >= 7) esse operador verifica se o valor que ta na esquerda existe, se ele nao existir ele pega o que esta na direita, por isso lembra o operador ternario, soq o ternario alem de ter a posiçao ele presupoe q vc tem dois valores um verdadeiro e o outro falso, com ?? vc so precisa de dois.
    // Isso é um array -> [] (no caso ele ta vazio)

    $informativos = filter_input(INPUT_POST, "informativos",FILTER_SANITIZE_SPECIAL_CHARS);
?>

<h2>Dados:</h2>


<ul>
    <li>Nome: <?=$nome?></li>
    <li>E-mail: <?=$email?> </li>
    <li>Idade: <?=$idade?></li>
    <li>Informativos: <?=$informativos?></li>
   
<?php if( !empty($interesses)) { ?>
    <!-- Oção 1: Implodir o array, transformando em string -->
   <li>Interesses: <?=implode(",", $interesses)?></li> 
   <li>Interesses:
         <ul>
             <!-- Opção 2: acessar o array usando loop -->
             <?php foreach ($interesses as $interesse){ ?>
                    <li><?=$interesse?></li>
             <?php } ?>
         </ul>
    </li>
<?php } ?>

    <li>Mensagem: <?=$mensagem?></li>
</ul>

<?php 
//} // fim if/else da validação de campos obrigatórios
?>   

</body>
</html>
