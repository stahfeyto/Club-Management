<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LoginAd</title>
</head>
<body>
<div class="main-login">
    <div class="left-login">
        <h1> Bem Vindo<br> Seja um de NOS </h1>
        <form action="testeLoginAd.php" method="POST">
        <img src="adanimacao2.svg" class="left-login-image" alt="animacao">
    </div>
    <div class="right-login">
        <div class="card-login">
            <h1>LOGIN</h1>
            <div class="textfield">
                <label for=>Admin</label> <!-- cuidado nessa linha -->
                <input type="text" name="Admin" placeholder="Admin._.">
            </div>
            <div class="textfield">
                <label for=>Password</label> <!-- cuidado nessa linha -->
                <input type="Password" name="Password" placeholder="Pass._.">
            </div>
            <input class="inputSubmit" type="submit" name="submit" value="Login">
            </form>
        </div>
    </div>
</div>
</body>
</html>
