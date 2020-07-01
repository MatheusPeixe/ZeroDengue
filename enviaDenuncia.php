<?php
session_start();

include('conexao.php');
ini_set('default_charset', 'UTF-8');

$ESTADO = mysqli_real_escape_string($CONEXAO, $_POST['estado']);
$CIDADE = mysqli_real_escape_string($CONEXAO, $_POST['cidade']);
$ENDERECO = mysqli_real_escape_string($CONEXAO, $_POST['endereco']);
$BAIRRO = mysqli_real_escape_string($CONEXAO, $_POST['bairro']);
$NUMERO = mysqli_real_escape_string($CONEXAO, $_POST['numero']);

// UPLOAD DA FOTO

$ARQUIVO = $_FILES['fotoLocal']['name'];
		
//Pasta onde o arquivo vai ser salvo
$_UP['pasta'] = 'upload/';

//Tamanho máximo do arquivo em Bytes
$_UP['tamanho'] = 1024*1024*100; //5mb

//Array com a extensões permitidas
$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');

//Renomear
$_UP['renomeia'] = true;

//Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';

//Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
if($_FILES['fotoLocal']['error'] != 0){
    die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['fotoLocal']['error']]);
    
    exit; //Para a execução do script
}

//Faz a verificação da extensao do arquivo
$EXTENSAO = strtolower(end(explode('.', $_FILES['fotoLocal']['name'])));
if(array_search($EXTENSAO, $_UP['extensoes'])=== false){		
    echo 'extensao invalida';
}

//Faz a verificação do tamanho do arquivo
else if ($_UP['tamanho'] < $_FILES['fotoLocal']['size']){
    echo 'arquivo muito grande';
}

//O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
else{
    //Primeiro verifica se deve trocar o nome do arquivo
    if($_UP['renomeia'] == true){
        //Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
        $NOME_FINAL = time().'.jpg';
    }else{
        //mantem o nome original do arquivo
        $NOME_FINAL = $_FILES['fotoLocal']['name'];
    }
    //Verificar se é possivel mover o arquivo para a pasta escolhida
    if(move_uploaded_file($_FILES['fotoLocal']['tmp_name'], $_UP['pasta']. $NOME_FINAL)){
        //Upload efetuado com sucesso, exibe a mensagem
        echo 'Arquivo enviado com Sucesso! <br>';	
    }else{
        //Upload não efetuado com sucesso, exibe a mensagem
        echo 'falha ao enviar arquivo.';
    }
}

$LOCAL = $_UP['pasta']. $NOME_FINAL;

// Recupera o Usuario Atual
$SELECT_USUARIO = "SELECT usuarioId FROM usuario";
$RESULT = mysqli_query($CONEXAO, $SELECT_USUARIO);

$ROW = mysqli_num_rows($RESULT);

if($ROW > 0){
    $DADOS_USUARIO = mysqli_fetch_assoc($RESULT);

    $_SESSION['id'] = $DADOS_USUARIO['usuarioId'];
};

$ID_USUARIO = $_SESSION['id'];

$SQL = "INSERT INTO `denuncia` (`usuarioId`, `estado`, `cidade`, `endereco`, `bairro`, `numero`, `fotoLocal`, `status`)
    VALUES ('{$ID_USUARIO}', '{$ESTADO}', '{$CIDADE}', '{$ENDERECO}', '{$BAIRRO}', '{$NUMERO}', '{$LOCAL}', 'Em análise')";

if(mysqli_query($CONEXAO, $SQL)){
    $_SESSION['denuncia_realizada'] = true;
    header('Location: /zerodengue/denuncia.php');
    exit();
} else{
    $_SESSION['denuncia_nao_realizada'] = true;
    header('Location: /zerodengue/denuncia.php');
    exit();
};