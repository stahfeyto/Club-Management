<?php


session_start();
include_once('../../config.php');

if(isset($_GET['search']))
{
    $data = $_GET['search'];
    $sql = "SELECT * FROM staff WHERE ID LIKE '%$data%' or Nome LIKE '%$data%' or Data_Nascimento LIKE '%$data%' or Biografia LIKE '%$data%' or Cargo LIKE '%$data%' or Pais_Origem LIKE '%$data%' or  Foto LIKE '%$data%' ORDER BY id ASC";

}
else{
    $sql = "SELECT * FROM staff ORDER BY id ASC";
}
$result = $conexao->query($sql);
$array = [];
while($user_data = mysqli_fetch_assoc($result)){
    $array[] = [
        'ID' => $user_data['ID'],
        'Nome' => $user_data['Nome'],
        "Data_Nascimento" => $user_data['Data_Nascimento'],
        "Biografia" => $user_data['Biografia'],
        "Cargo" => $user_data['Cargo'],
        "Pais_Origem" => $user_data['Pais_Origem'],
        "Foto" => $user_data['Foto']
    ];
}
echo json_encode($array);

?>