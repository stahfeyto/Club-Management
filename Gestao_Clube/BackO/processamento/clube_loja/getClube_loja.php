<?php


session_start();
include_once('../../config.php');

if(isset($_GET['search']))
{
    $data = $_GET['search'];
    $sql = "SELECT * FROM clube_loja WHERE clube_fk LIKE '%$data%' or loja_fk LIKE '%$data%' ORDER BY id ASC";

}
else{
    $sql = "SELECT * FROM clube_loja ORDER BY id ASC";
}
$result = $conexao->query($sql);
$array = [];
while($user_data = mysqli_fetch_assoc($result)){
    $array[] = [
        'clube_fk' => $user_data['clube_fk'],
        'loja_fk' => $user_data['loja_fk']
    ];
}
echo json_encode($array);

?><?php
