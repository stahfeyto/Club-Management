<?php


session_start();
include_once('../../config.php');

if(isset($_GET['search']))
{
    $data = $_GET['search'];
    $sql = "SELECT * FROM noticia WHERE ID LIKE '%$data%' or Titulo LIKE '%$data%' or Data_noticia LIKE '%$data%' or Conteudo LIKE '%$data%' ORDER BY id ASC";

}
else{
    $sql = "SELECT * FROM noticia ORDER BY id ASC";
}
$result = $conexao->query($sql);
$array = [];
while($user_data = mysqli_fetch_assoc($result)){
    $array[] = [
        'ID' => $user_data['ID'],
        'Titulo' => $user_data['Titulo'],
        'Data_noticia' => $user_data['Data_noticia'],
        'Conteudo' => $user_data['Conteudo']
    ];
}
echo json_encode($array);

?>

