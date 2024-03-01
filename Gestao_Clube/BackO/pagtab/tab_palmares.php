<?php
session_start();
include_once('../config.php');
//print_r($_SESSION);
if((!isset($_SESSION['Nome']) == true) and (!isset($_SESSION['Password']) == true))
{
    unset($_SESSION['Nome']);
    unset($_SESSION['Password']);
    header('location: login.php');
}
$logado = $_SESSION['Nome'];

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tab_Jogador</title>
    <script>
        function getData(search = null){
            url = "./processamento/palmares/getPalmares.php";
            if(search == null) search = $("#pesquisar").val().length > 0 ? $("#pesquisar").val() : null;
            if (search != null) url = search !== '' ? url + `?search=${search}` : '';
            let req = new XMLHttpRequest();
            req.open("GET",url, true);
            req.onreadystatechange = function(){
                if(req.readyState === 4 && req.status === 200){
                    let json = JSON.parse(req.responseText);
                    document.getElementById("tab-body-table").innerHTML = "";
                    json.forEach(function(item){
                        console.log("item", item);
                        let row = document.createElement("tr");
                        for (const key in item) {
                            let col = document.createElement("td");
                            col.innerHTML = item[key];
                            row.append(col);
                        }
                        let actions = document.createElement("td");
                        actions.style = "cursor: pointer;";
                        // Editar
                        let editButton = document.createElement("span");



                        let editIcon = document.createElement("i");
                        editIcon.classList = "fas fa-edit";
                        editButton.appendChild(editIcon);

                        editButton.addEventListener("click", function(){
                            const obj = item;
                            console.log(obj);
                        });

                        actions.append(editButton);
                        // Remover
                        let removeButton = document.createElement("span");
                        removeButton.style = "margin-left: 3px;";


                        let removeIcon = document.createElement("i");
                        removeIcon.classList = "fas fa-times";
                        removeButton.appendChild(removeIcon);

                        removeButton.addEventListener("click", function(){
                            const obj = item;
                            console.log(obj);
                        });

                        actions.append(removeButton);

                        row.append(actions);
                        /*
                        * <a class='btn btn-sm btn-primary' href='#'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' style='fill: rgba(0, 0, 0, 1);transform: ;msFilter:;'><path d='m16 2.012 3 3L16.713 7.3l-3-3zM4 14v3h3l8.299-8.287-3-3zm0 6h16v2H4z'></path></svg>
                            </a>*/
                        document.getElementById("tab-body-table").append(row);
                    });
                }
            }
            req.send();
        }

        function init(){
            getData(null);
        }

        init();

    </script>
    <style>
        body{
            margin: 0;
            font-family: Kanit, sans-serif;
            background: #403855;
            color: white;

        }
        .topnav {
            background-color: #2f2841;
            overflow: hidden;
        }
        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        h1{
            text-align: center;
        }

        .topnav a:hover {
            background-color: aquamarine;
            color: black;
        }
        .table-bg{
            background: rgba(0,0,0,0.1);
            border-radius: 12px 12px 0 0;
            box-shadow: 0 0 1em white;

        }
        table, th, td {
            border: 1px solid aquamarine;
            margin: 50px;


        }
        table th{
            width: 150px;

        }
        table tr{
            text-align: center;
        }
        .table-container{
            display: flex;
            justify-content: center;
        }
        .box-search{
            display: flex;
            justify-content: center;
            gap: .1%;
        }
    </style>
</head>
<body>
<div class="topnav">
    <a href="homeBack.php">Voltar</a>
</div>
<br>
<br>
<div class="box-search">
    <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
    <button onclick="getData()" class="btn btn-success">
        <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' style='fill: #4169E1; filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.5));'>
            <path d='M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z'></path>
            <path d='M11.412 8.586c.379.38.588.882.588 1.414h2a3.977 3.977 0 0 0-1.174-2.828c-1.514-1.512-4.139-1.512-5.652 0l1.412 1.416c.76-.758 2.07-.756 2.826-.002z'></path>
        </svg>
    </button>
</div>
<div class="m-5 table-container">
    <table class="table text-white table-bg">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Açoes</th>
        </tr>
        </thead>
        <tbody id = "tab-body-table">
        <?php
        /*while($user_data = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>".$user_data['ID']."</td>";
            echo "<td>".$user_data['Nome']."</td>";
            echo "<td>".$user_data['Data_Nascimento']."</td>";
            echo "<td>".$user_data['Data_Contratacao']."</td>";
            echo "<td>".$user_data['Biografia']."</td>";
            echo "<td>".$user_data['Clube_Anterior']."</td>";
            echo "<td>".$user_data['Pais_Origem']."</td>";
            echo "<td>".$user_data['Posicao']."</td>";
            echo "<td>".$user_data['Numero_Camisola']."</td>";
            echo "<td>".$user_data['Modalidade']."</td>";
            echo "<td>".$user_data['Altura']."</td>";
            echo "<td>".$user_data['Peso']."</td>";
            echo "<td>".$user_data['Foto']."</td>";
           echo "<td>
                            <a class='btn btn-sm btn-primary' href='#'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' style='fill: rgba(0, 0, 0, 1);transform: ;msFilter:;'><path d='m16 2.012 3 3L16.713 7.3l-3-3zM4 14v3h3l8.299-8.287-3-3zm0 6h16v2H4z'></path></svg>
                            </a>
                            <a class='btn btn-sm btn-danger' href='#'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' style='fill: rgba(0, 0, 0, 1);transform: ;msFilter:;'><path d='M16 2H8C4.691 2 2 4.691 2 8v13a1 1 0 0 0 1 1h13c3.309 0 6-2.691 6-6V8c0-3.309-2.691-6-6-6zm0 11H8v-2h8v2z'></path></svg>

                            </a>
                        </td>";

            echo "</tr>";
        }*/
        ?>
        </tbody>
    </table>
</div>
</body>
<!--<script>
    var search = document.getElementById('pesquisar');
    search.addEventListener("keydown", function (event)
    {
        if (event.key === "Enter")
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'tab_jogador.php?search='+search.value;

    }
</script>-->
</html>