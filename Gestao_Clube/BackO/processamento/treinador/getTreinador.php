<?php


session_start();
include_once('../../config.php');

if(isset($_GET['search']))
{
    $data = $_GET['search'];
    $sql = "SELECT * FROM treinador WHERE ID LIKE '%$data%' or Nome LIKE '%$data%' or Data_de_Nascimento LIKE '%$data%' or Pais_de_Origem LIKE '%$data%' or Clube_Anterior LIKE '%$data%' or Modalidade LIKE '%$data%' or Posicao LIKE '%$data%' or Foto LIKE '%$data%' ORDER BY id ASC";

}
else{
    $sql = "SELECT * FROM treinador ORDER BY id ASC";
}
$result = $conexao->query($sql);
$array = [];
while($user_data = mysqli_fetch_assoc($result)){
    $array[] = [
        'ID' => $user_data['ID'],
        'Nome' => $user_data['Nome'],
        'Data_Nascimento' => $user_data['Data_de_Nascimento'],
        'Pais_de_Origem' => $user_data['Pais_de_Origem'],
        'Clube_Anterior' => $user_data['Clube_Anterior'],
        'Modalidade' => $user_data['Modalidade'],
        'Posicao' => $user_data['Posicao'],
        'Foto' => $user_data['Foto']
    ];
}
echo json_encode($array);

?>
