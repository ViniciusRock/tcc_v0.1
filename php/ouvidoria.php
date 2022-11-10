<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/menu.css">
    <title>Sistema</title>
</head>

<body>
    <!-- The sidebar -->
    <div class="sidebar">
        <a href="sistema.php">Home</a>
        <a href="#news"></a>
        <a href="contato.php" class="active">Contato</a>
        <a href="#">Ouvidoria</a>
        <a href="#sair">Sair</a>
    </div>

    <!-- Page content -->
    <div class="content">
        <div class="form">
            <form action="mail.php" method="POST">
                <pre>
                Nome*:<input type="text" name="nome" placeholder="Digite seu nome (obrigatório)" required /><br>
                E-mail*:<input type="email" name="email" placeholder="Digite seu E-mail (obrigatório)" required><br>
                Telefone:<input type="text" name="telefone" placeholder="(11) 1234-5678"><br>
                Mensagem*:
                <textarea rows="10" cols="40" name="mensagem" placeholder="Digite aqui sua mensagem (obrigatório)" required></textarea>
</pre>
                <br>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>




</body>

</html>