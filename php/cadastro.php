<?php
include("conexao.php");
/*
Dados criptografados
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
$senha = ($_POST['senha']);

//Inserir na tabela cadastro
$sql = "INSERT INTO cadastro(nome, celular, matricula, email, senha) VALUES ('$nome', '$celular', '$matricula', '$email', '$senha')";

if (mysqli_query($conexao, $sql)) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro" . mysqli_connect_error($conexao);
}
mysqli_close($conexao);

?>

