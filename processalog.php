<?php
    SESSION_START();
    include("conexao.php");

    if(empty($_POST['user']) || empty($_POST['pass']) ) {
        header("Location: index.php");
        exit();
    }

    $usuario = mysqli_real_escape_string($mysqli, $_POST['user']);
    $senha = mysqli_real_escape_string($mysqli, $_POST['pass']);

    $query = "SELECT id, nome FROM usuario WHERE nome= '{$usuario}' AND senha = '{$senha}'";

    $result = mysqli_query($mysqli, $query);

    $row = mysqli_num_rows($result);

    if($row == 1){
        $_SESSION['usuario'] = $usuario;
        header('Location: main.php');
        exit();
    } else {
        header('Location: index.php');
        exit();
    }
?>