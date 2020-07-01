<?php
session_start();

include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: /zerodengue');
    exit();
}

$USUARIO = mysqli_real_escape_string($CONEXAO, $_POST['usuario']);
$SENHA = mysqli_real_escape_string($CONEXAO, $_POST['senha']);

$QUERY = "SELECT usuarioId, usuario FROM usuario WHERE usuario = '{$USUARIO}' AND senha = md5('{$SENHA}')";

$RESULT = mysqli_query($CONEXAO, $QUERY);

$ROW = mysqli_num_rows($RESULT);

if($ROW == 1){
    $_SESSION['usuario'] = $USUARIO;
    header('Location: /zerodengue/dashboard.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: /zerodengue');
    exit();
}