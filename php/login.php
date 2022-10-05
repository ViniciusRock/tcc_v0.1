<?php
include_once("conexao.php");

$verificausuario = mysqli_query($conexao,"SELECT * from aluno limit 1");

//retorna a quantidade de registros que essa query acima retornou
//Significa que existe pelo menos 1 usuário cadastrado

echo "Bem-vindo à página principal";
?>