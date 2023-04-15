<?php
    session_start();
    include_once('conexao.php');
    include('listar.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="maindisplay">
        <div class="maincontent">
            <h1 style="margin-bottom: 30px;">Listas</h1>
            <h2>Cliente Conveniado</h2>
            <?php
                listarConveniado();
            ?>
            <h2>Cliente Individual</h2>
            <?php
                listarIndividual();
            ?>
            <h2>Cliente Mensal</h2>
            <?php
                listarMensal();
            ?>
        </div>
    </div>
</body>
</html>