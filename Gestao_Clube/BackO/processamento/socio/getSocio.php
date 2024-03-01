<?php


session_start();
include_once('../../config.php');

if(isset($_GET['search']))
{
    $data = $_GET['search'];
    $sql = "SELECT * FROM socio WHERE ID LIKE '%$data%' or Nome LIKE '%$data%' or Data_Nascimento LIKE '%$data%' or Telefone_Socio LIKE '%$data%' or Email_Socio LIKE '%$data%' or Data_Associacao LIKE '%$data%' or Quotas LIKE '%$data%' or Password LIKE '%$data%' ORDER BY id ASC";

}
else{
    $sql = "SELECT * FROM socio ORDER BY id ASC";
}
$result = $conexao->query($sql);
$array = [];
while($user_data = mysqli_fetch_assoc($result)){
    $array[] = [
        'ID' => $user_data['ID'],
        'Nome' => $user_data['Nome'],
        'Data_Nascimento' => $user_data['Data_Nascimento'],
        'Telefone_Socio' => $user_data['Telefone_Socio'],
        'Email_Socio' => $user_data['Email_Socio'],
        'Data_Associacao' => $user_data['Data_Associacao'],
        'Quotas' => $user_data['Quotas'],
        'Password' => $user_data['Password']
    ];
}
echo json_encode($array);

?>
