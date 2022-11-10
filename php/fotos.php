<?php
session_start();
if (isset($_SESSION['matricula']) && (isset($_SESSION['nome']))) {
} else {
    unset($_SESSION['matricula']);
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
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/meusdados.css">
    <title>Sistema</title>
</head>

<body>
    <!-- The sidebar -->
    <div class="sidebar">
        <a href="sistema.php">Chat</a>
        <a class="active" href="fotos.php">Fotos Câmpus</a>
        <a href="ouvidoria.php">Ouvidoria</a>
        <a href="contato.php">Contato</a>
        <a href="meusdados.php">Meus Dados</a>
        <a href="sair.php">Sair</a>
        
    </div>

    <!-- Page content -->
    <div class="content">
        <?php
        echo '<h1 id="titulo"> Seus dados:</h1>';
        echo "<strong>Nome:</strong>". $_SESSION['nome']. "<br>";
        echo "<strong>Matrícula:</strong>". $_SESSION['matricula']. "<br>";
        echo "<strong>Telefone:</strong>" . $_SESSION['matricula']. "<br>";
        echo "<strong>Email:</strong>". $_SESSION['matricula']. "<br>";
        echo "<strong>Curso:</strong>". $_SESSION['matricula']. "<br>";
        ?>
   
    </div>

</body>

</html>