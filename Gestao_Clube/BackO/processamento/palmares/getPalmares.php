<?php


session_start();
include_once('../../config.php');

if(isset($_GET['search']))
{
    $data = $_GET['search'];
    $sql = "SELECT * FROM palmares WHERE ID LIKE '%$data%' or Nome LIKE '%$data%' Modalidade LIKE '%$data%' or Ano LIKE '%$data%' ORDER BY id ASC";

}
else{
    $sql = "SELECT * FROM palmares ORDER BY id ASC";
}
$result = $conexao->query($sql);
$array = [];
while($user_data = mysqli_fetch_assoc($result)){
    $array[] = [
        'ID' => $user_data['ID'],
        'Nome' => $user_data['Nome']
    ];
}
echo json_encode($array);

?>
