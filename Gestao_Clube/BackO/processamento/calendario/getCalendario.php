<?php


session_start();
include_once('../../config.php');

if(isset($_GET['search']))
{
    $data = $_GET['search'];
    $sql = "SELECT * FROM calendario WHERE ID LIKE '%$data%' or clubes LIKE '%$data%' or Data LIKE '%$data%' or modalidade ORDER BY id ASC";

}
else{
    $sql = "SELECT * FROM calendario ORDER BY id ASC";
}
$result = $conexao->query($sql);
$array = [];
while($user_data = mysqli_fetch_assoc($result)){
    $array[] = [
        'ID' => $user_data['ID'],
        'clubes' => $user_data['clubes'],
        'Data' => $user_data['Data'],
        'modalidade' => $user_data['modalidade']
    ];
}
echo json_encode($array);

?>


