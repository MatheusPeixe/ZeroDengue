<?php
session_start();

include('conexao.php');

ini_set('default_charset', 'UTF-8');

$NOME_COMPLETO = mysqli_real_escape_string($CONEXAO, $_POST['nomeCompleto']);
$EMAIL = mysqli_real_escape_string($CONEXAO, $_POST['email']);
$RG = mysqli_real_escape_string($CONEXAO, $_POST['rg']);
$CPF = mysqli_real_escape_string($CONEXAO, $_POST['cpf']);
$ESTADO = mysqli_real_escape_string($CONEXAO, $_POST['estado']);
$CIDADE = mysqli_real_escape_string($CONEXAO, $_POST['cidade']);
$ENDERECO = mysqli_real_escape_string($CONEXAO, $_POST['endereco']);
$BAIRRO = mysqli_real_escape_string($CONEXAO, $_POST['bairro']);
$NUMERO = mysqli_real_escape_string($CONEXAO, $_POST['numero']);
$TELEFONE = mysqli_real_escape_string($CONEXAO, $_POST['telefone']);
$USUARIO = mysqli_real_escape_string($CONEXAO, $_POST['usuario']);
$SENHA = mysqli_real_escape_string($CONEXAO, $_POST['senha']);

$QUERY = "SELECT usuarioId, usuario FROM usuario WHERE usuario = '{$USUARIO}' OR email = '{$EMAIL}'";

$SQL = mysqli_query($CONEXAO, $QUERY);

$RESULT = mysqli_fetch_assoc($SQL);

if($RESULT == true){
    
    $_SESSION['cadastro_existente'] = true;
    header('Location: /zerodengue/cadastro.php');
    exit();

} else{
    $SQL = "INSERT INTO `usuario` (`usuario`, `senha`, `nomeCompleto`, `email`, `cpf`, `rg`, `endereco`, `telefone`, `cidade`, `bairro`, `numero`, `estado`)
    VALUES ('{$USUARIO}', MD5('{$SENHA}'), '{$NOME_COMPLETO}', '{$EMAIL}', '{$CPF}', '{$RG}', '{$ENDERECO}', '{$TELEFONE}', '{$CIDADE}', '{$BAIRRO}', '{$NUMERO}', '{$ESTADO}')";

    if(mysqli_query($CONEXAO, $SQL)){
        echo 'Gravado com sucesso!';
    } else{
        echo "Error: " . $SQL . "<br>" . mysqli_error($CONEXAO);
    };

    $_SESSION['cadastro_realizado'] = true;
    header('Location: /zerodengue/cadastro.php');
    exit();
};