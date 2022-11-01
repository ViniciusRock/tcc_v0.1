<?php
session_start();
include("conexao.php");

if (isset($_POST['submit']) && !empty($_POST['matricula']) && !empty($_POST['senha'])) {
    //Cria as variáveis para testar o select no banco e criar a sessão para logar no sistema
    $matricula = $_POST['matricula'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];

    //Checar se tem os dados inseridos via post no banco
    $sql = "SELECT * FROM aluno WHERE matricula = '$matricula' and senha = '$senha'";
    $puxanome = "SELECT nome FROM aluno WHERE matricula = '$matricula'";
    $result = $conexao->query($sql);
    $result2 = $conexao->query($puxanome);

    //PAREI AQUI
    if ((mysqli_num_rows($result) > 0)) {
        $_SESSION['matricula'] = $matricula;
        $_SESSION['senha'] = $senha;
        $_SESSION['nome'] = $nome;
        header("Location: sistema.php");
    } else {
        //Não acessa a página e leva para uma página 404.php
        unset($_SESSION['matricula']);
        unset($_SESSION['senha']);
        unset($_SESSION['nome']);
        echo "SESSAO FINALIZADA";
        // header('Location: 404.php');
    }
}
