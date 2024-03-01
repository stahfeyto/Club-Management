<?php
global $conexao;
IF(ISSET($_POST['submit']))
    {
        //print_r($_POST['Admin']);
        //print_r('<br>');
        //print_r($_POST['Nomeadmin']);
        //print_r('<br>');
        //print_r($_POST['Password']);

        include_once ('config.php');


        $nome = $_POST['Admin'];
        $password = $_POST['Password'];
        $nomeadmin = $_POST['Nomeadmin'];


        $result = mysqli_query($conexao, "INSERT INTO admin(Nome,Password,Nomeadmin) VALUES('$nome','$password','$nomeadmin')");

        // isto está certo, o php é que nao consegue localizar onde isto está- tems que ativdar nas configs para o hpstorm procurar por variaveis fora do escopo
    }

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleC.css">
    <title>RegistroAd</title>
</head>
<body>
<form action="formulario.php" method="POST">
<div class="main-login">

    <div class="left-login">
        <h1> Criação para os deuses </h1>
        <img src="adanimacao2.svg" class="left-login-image" alt="animacao">
    </div>

    <div class="right-login">
        <div class="card-login">
            <h1>Registro</h1>
            <div class="textfield">
                <label for=>Admin</label>
                <input type="text" name="Admin" id="Admin" class="inputUser" placeholder="Codigo._.">
            </div>
            <div class="textfield">
                <label for=>Nomeadmin</label>
                <input type="text" name="Nomeadmin" id="Nomeadmin" class="inputUser" placeholder="Nome._.">
            </div>
            <div class="textfield">
                <label for=>Password</label>
                <input type="Password" name="Password" id="Password" class="inputUser" placeholder="Pass._.">
            </div>
            <input type="submit" name="submit" id="submit">
        </div>
    </div>
</div>
</form>
</body>
</html>