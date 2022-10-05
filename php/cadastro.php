<?php
include_once("conexao.php");
/*
Casoo queira criptografar algum dado:
ou $senha = md5($_POST['senha']);
$nome = sha1($_POST['nome']);
$celular = sha1($_POST['celular']);
$matricula = sha1($_POST['matricula']);
$email = sha1($_POST['email']);
$senha = sha1($_POST['senha']);
*/
$nome = $_POST['nome'];
$celular = $_POST['celular'];
$matricula = $_POST['matricula'];
$email = $_POST['email'];
$senha = $_POST['senha'];

//Inserir na tabela cadastro
$sqlins = "INSERT INTO aluno(nome, celular, matricula, email, senha) VALUES ('$nome', '$celular', '$matricula', '$email', '$senha')";

if (mysqli_query($conexao, $sqlins)) {
    echo "Usuário cadastrado com sucesso!";
    sleep(3);
    header("Location: ./login.php");
} else {
    echo "Erro" . mysqli_connect_error($conexao);
    echo "Usuário não cadastrado!";
}


?>