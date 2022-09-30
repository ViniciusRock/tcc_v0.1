<?php
//Dados para conexão com o Banco
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "seligaai";

$conexao = mysqli_connect($servidor, $usuario, $senha,$db);

//Se não Houver conexão, ele vai encerrar
if(!$conexao){
    die("Houve um erro na conexão.Verifique os dados".mysqli_connect_error());
}
?>