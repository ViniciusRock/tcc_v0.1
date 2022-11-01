<?php
session_start();

// && isset($_SESSION['nome']) não funfa
if (isset($_SESSION['matricula'])) {
    echo "Bem-vindo(a)" . $_SESSION['nome'];
    echo "Nº Matrícula:" . $_SESSION['matricula'];
} else {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('Location: 404.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formulario.css">
    <title>Sistema</title>
</head>

<body>
    <h1>Acessou o sistema</h1>

    <a href="./sair.php">Sair do Sistema
</body>

</html>