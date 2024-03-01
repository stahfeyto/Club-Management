<?php


session_start();
include_once('../../config.php');

if(isset($_GET['search']))
{
    $data = $_GET['search'];
    $sql = "SELECT * FROM jogador WHERE ID LIKE '%$data%' or Nome LIKE '%$data%' or Data_Nascimento LIKE '%$data%' or Data_Contratacao LIKE '%$data%' or Biografia LIKE '%$data%' or Clube_Anterior LIKE '%$data%' or Pais_Origem LIKE '%$data%' or Posicao LIKE '%$data%' or Numero_Camisola LIKE '%$data%' or Modalidade LIKE '%$data%' or Altura LIKE '%$data%' or Peso LIKE '%$data%' or Foto LIKE '%$data%' ORDER BY id ASC";

}
else{
    $sql = "SELECT * FROM jogador ORDER BY id ASC";
}
$result = $conexao->query($sql);
$array = [];
while($user_data = mysqli_fetch_assoc($result)){
    $array[] = [
        'ID' => $user_data['ID'],
        'Nome' => $user_data['Nome'],
        "Data_Nascimento" => $user_data['Data_Nascimento'],
        "Data_Contratacao" => $user_data['Data_Contratacao'],
        "Biografia" => $user_data['Biografia'],
        "Clube_Anterior" => $user_data['Clube_Anterior'],
        "Pais_Origem" => $user_data['Pais_Origem'],
        "Posicao" => $user_data['Posicao'],
        "Numero_Camisola" => $user_data['Numero_Camisola'],
        "Modalidade" => $user_data['Modalidade'],
        "Altura" => $user_data['Altura'],
        "Peso" => $user_data['Peso'],
        "Foto" => $user_data['Foto']
    ];
}
echo json_encode($array);

?>