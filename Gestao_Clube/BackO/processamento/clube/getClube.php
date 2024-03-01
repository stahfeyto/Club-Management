<?php


session_start();
include_once('../../config.php');

if(isset($_GET['search']))
{
    $data = $_GET['search'];
    $sql = "SELECT * FROM clube WHERE ID LIKE '%$data%' or Nome LIKE '%$data%' or Fundacao LIKE '%$data%' or Estadio LIKE '%$data%' or Historia LIKE '%$data%' or Loja LIKE '%$data%' or Eventos ORDER BY id ASC";

}
else{
    $sql = "SELECT * FROM clube ORDER BY id ASC";
}
$result = $conexao->query($sql);
$array = [];
while($user_data = mysqli_fetch_assoc($result)){
    $array[] = [
        'ID' => $user_data['ID'],
        'Nome' => $user_data['Nome'],
        'Fundacao' => $user_data['Fundacao'],
        'Estadio' => $user_data['Estadio'],
        'Historia' => $user_data['Historia'],
        'Loja' => $user_data['Loja'],
        'Eventos' => $user_data['Eventos']
    ];
}
echo json_encode($array);

?>
<?php
