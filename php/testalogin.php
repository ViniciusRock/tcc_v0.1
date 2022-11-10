<?php
session_start();
include("conexao.php");

if (isset($_POST['submit']) && !empty($_POST['matricula']) && !empty($_POST['senha'])) {
    //Cria as variáveis para testar o select no banco e criar a sessão para logar no sistema
    $matricula = $_POST['matricula'];
    $senha = $_POST['senha'];

    //Checar se tem os dados inseridos via post no banco
    $sql = "SELECT * FROM aluno WHERE matricula = '$matricula' and senha = '$senha'";
    $result = $conexao->query($sql);
    $linha = mysqli_fetch_array($result);
    //PAREI AQUI
    if ((mysqli_num_rows($result) > 0)) {
        $_SESSION['matricula'] = $linha['matricula'];
        //$data linha
        //'nome' é a coluna
        $_SESSION['nome'] = $linha['nome'];
        header("Location: sistema.php");
        //Funcionou
        //echo $_SESSION['nome'];
        //echo $_SESSION['matricula'];
    } else {
        //Não acessa a página e leva para uma página 404.php
        session_destroy();
        header('Location: ../logar.html');
        echo "<h1>Sessão não encontrada</h1>";
    }
}
