<?php
include_once("conexao.php");

if (isset($_POST['submit']) && !empty($_POST['matricula']) && !empty($_POST['senha'])) {
    //Acessa
    $matricula = $_POST['matricula'];
    $senha = $_POST['senha'];

    //Escrever os dados que enviei por POST
    print_r('Matricula: ' . $matricula . '<br>');
    print_r('Senha: ' . $senha . '<br>');

    //Checar se tem os dados inseridos via post no banco
    $sql = "SELECT * FROM aluno WHERE matricula = '$matricula' and senha = '$senha'";

    $result = $conexao->query($sql);
    // print_r($sql);
    // print_r($result);

    //Se não existir nenhuma linha no banco desse usuário, então não faz nada
    if (mysqli_num_rows($result) < 1) {
        //Caso não tenha nenhum email e senha no banco, a sessão da matricula e da senha serão destruídas
        unset($_SESSION['matricula']);
        unset($_SESSION['senha']);
        header("Location: ../logar.html");
    } else {
        //Se existir, o usuário é redirecionado para a página principal do sistema
        $_SESSION['matricula'] = $matricula;
        $_SESSION['senha'] = $senha;
        header('Location: ./sistema.php');
    }
} else {
    //Não acessa
    header('Location: 404.php');
}
