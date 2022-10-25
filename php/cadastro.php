<?php
include_once("conexao.php");

$nome = $_POST['nome'];
$celular = $_POST['celular'];
$matricula = $_POST['matricula'];
$email = $_POST['email'];
$senha = $_POST['senha'];

//Inserir na tabela cadastro
$sqlins = "INSERT INTO aluno(nome, celular, matricula, email, senha) VALUES ('$nome', '$celular', '$matricula', '$email', '$senha')";

if (mysqli_query($conexao, $sqlins)) {
    header('Location: ../logar.html');
} else {
    echo 'Erro' . mysqli_connect_error($conexao);
}
