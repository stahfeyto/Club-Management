<?php
global $conexao;

if(isset($_POST['enviar']))
{
    include_once('config.php');

    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $telefone = isset($_POST['telefone_socio']) ? $_POST['telefone_socio'] : null;
    $email = isset($_POST['email_socio']) ? $_POST['email_socio'] : null;


    // Check if 'Associacao' key exists and is not empty
    $associacao = isset($_POST['Associacao']) ? $_POST['Associacao'] : null;

    $quota = $_POST['quota'];

    $password = $_POST['password'];

    $result = mysqli_query($conexao, "INSERT INTO socio(Nome,Data_Nascimento,Telefone_Socio,Email_Socio,Data_Associacao,Quotas,Password) VALUES('$nome', '$data_nascimento', '$telefone', '$email', '$associacao', '$quota','$password')");
}
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegistroAd</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');

        body{
            margin: 0;
            font-family: Kanit, sans-serif;
        }

        body * {
            box-sizing: border-box;
        }

        .main-login{
            width: 100vw;
            height: 100vh;
            background: #201b2c;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .left-login{
            width: 50vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .left-login > h1{
            color: aquamarine;
            font-size: 3vw;
        }

        .left-login-image{
            width: 35vw;
        }

        .right-login{
            width: 50vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card-login{
            width: 60%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 30px 35px;
            background: #2f2841;
            border-radius: 24px;
            box-shadow: 0px 0px 40px black;
        }
        .card-login > h1 {
            color: aquamarine;
            font-weight: 800;
            margin: 0;
        }

        .textfield{
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            margin: 10px 0px;
        }

        .textfield > input{
            width: 100%;
            border: none;
            border-radius: 24px;
            padding: 15px;
            background: #514869;
            color: #f0ffffde;
            font-size: 12pt;
            box-shadow: 0px 0px 40px black;
            outline: none;
            box-sizing: border-box;
        }

        .textfield > label{
            color: #f0ffffde;
            margin-bottom: 10px;
        }

        .textfield > input::placeholder{
            color: #f0ffffde;
        }

        #enviar{
            width: 100%;
            padding: 16px 0px;
            margin: 25px;
            border: none;
            border-radius: 14px;
            outline: none;
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 3px;
            background: #00ff88;
            cursor: pointer;
            box-shadow: 0px 0px 20px black;
        }
        #enviar:hover{
            background-color: aquamarine;
        }

        @media only screen and (max-width: 950px) {
            .card-login{
                width: 85%;
            }
        }

        @media only screen and (max-width: 600px) {
            .main-login {
                flex-direction: column;
            }

            .left-login > h1{
                display: none;
            }

            .left-login{
                width: 100%;
                height: auto;
            }

            .right-login {
                width: 100%;
                height: auto;
            }

            .left-login-image{
                width: 50%;
                height: auto;
            }

            .card-login{
                width: 70vw;
            }
        }
    </style>
</head>
<body>
<form action="formularioSocio.php" method="POST">
    <div class="main-login">

        <div class="left-login">
            <h1> Vista a camisola </h1>
            <img src="jgol.svg" class="left-login-image" alt="animacao">
        </div>

        <div class="right-login">
            <div class="card-login">
                <h1>Registo</h1>
                <div class="textfield">
                    <label for=>Nome</label>
                    <input type="text" name="nome" id="nome" class="inputUser" placeholder="Nome._.">
                </div>
                <div class="textfield">
                    <label for=>Data Nascimento</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" placeholder="Data_nascimento._.">
                </div>
                <div class="textfield">
                    <label for=>Telemovel</label>
                    <input type="tel" name="telefone_socio" id="telefone_socio" class="inputUser" placeholder="Telemovel._.">
                </div>
                <div class="textfield">
                    <label for=>Email</label>
                    <input type="email" name="email_socio" id="email_socio" class="inputUser" placeholder="Email._.">
                </div>
                <div class="textfield">
                    <label for=>Associacao</label>
                    <input type="date" name="Associacao" id="Associacao" class="inputUser" placeholder="Associacao._.">
                </div>
                <div class="textfield">
                    <label for=>Quota</label>
                    <input type="text" name="quota" id="quota" class="inputUser" placeholder="Quota._.">
                </div>
                <div class="textfield">
                    <label for=>Password</label>
                    <input type="pass" name="password" id="password" class="inputUser" placeholder="password._.">
                </div>
                <input  type="submit" name="enviar" id="enviar" >
            </div>
        </div>
    </div>
</form>
</body>
</html>