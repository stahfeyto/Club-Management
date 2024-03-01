<?php
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['Admin']) && !empty($_POST['Password'])){

        //acessa
        include_once('config.php');

        $nome = $_POST['Admin'];
        $password = $_POST['Password'];

        $sql = "SELECT * FROM admin WHERE Nome = ? AND Password = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("ss", $nome, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result === false) {
            // Ocorreu um erro na consulta
            print_r('Erro na consulta: ' . $conexao->error);
        } elseif(mysqli_num_rows($result) < 1) {
            unset($_SESSION['Nome']);
            unset($_SESSION['Password']);
            header('location: login.php');
        } else {
            $_SESSION['Nome'] = $nome;
            $_SESSION['Password'] = $password;
            header('location: homeBack.php');
        }

    }
    else
    {
        //nao acessa
        header('Location: login.php');
    }