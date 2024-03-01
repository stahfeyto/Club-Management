<?php

    $dbHost = 'localhost';
    $bdUsername = 'root';
    $dbPassword = '1234';
    $bdname = 'classemundial';

    $conexao = new mysqli($dbHost,$bdUsername,$dbPassword,$bdname);

//if($conexao->connect_errno)
//{
//echo "Erro";
// }
//else
//{
// echo "Conectado com sucesso";
// }

?>