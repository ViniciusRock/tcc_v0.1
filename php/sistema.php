<?php
session_start();
$_SESSION['batata'] = "Eu sou uma batata, olha!";
print_r($_SESSION);
print($_SESSION['batata']);
print($_SESSION['batata']);

//DANDO ERRO
// if((!isset($_SESSION['matricula']) == true) and (!isset($_SESSION['senha']) == true)) {
//     unset($_SESSION['matricula']);
//     unset($_SESSION['senha']);
//     header('Location: ../logar.html');
// }
//     $logado = $_SESSION['matricula'];
//caso existir:

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
</body>

</html>