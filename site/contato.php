<?php
$titulo = "Contato";
require "includes/cabecalho.php"
?>
    <h2>Contato</h2>
    <p><b>Bem vindo a página de contato!</b> para falar conosco, entre em contato pelo: </p>
    <form action="" method="post">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
        </p>
        <button type="submit">Enviar</button>
    </form>

<?php require "includes/rodape.php";?>
