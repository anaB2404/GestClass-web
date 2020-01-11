<?php

// $conexao = mysqli_connect(
//     'localhost',
//     'root',
//     '',
//     'calendario-db'
// )
//     or die('Erro ao estabelecer a conexão!!!');


// A CONEXAO A BAIXO ESTA EM PDO, SE VOCE NAO TIVER A VERSAO 7 DO PHP NÃO VAI FUNCIONAR
  
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'calendario-db');

$conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);
?>