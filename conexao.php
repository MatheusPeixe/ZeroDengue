<?php 

define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'zerodengue');

$CONEXAO = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Erro ao conectar');

mysqli_set_charset('utf8',$CONEXAO);

