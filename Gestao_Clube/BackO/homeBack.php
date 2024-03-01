<?php
    session_start();
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BackOff</title>
    <link rel="stylesheet" href="styleHB.css"
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        function getTab(url){
            $.ajax({
                type: 'GET',
                url: "./" + url,
                cache: false,
                success: function (result) {
                    result = result.replace(/<script/ig, '<div class="i-script"')
                        .replace(/<\/script/ig, '</div');
                    result = $.parseHTML(result);
                    var scripts = $(result).find('.i-script').addBack().filter('.i-script');
                    $('#body-tab').html(result);
                    scripts.each(function(i,script){
                        $('head').append($('<script>', {
                            type: 'text/javascript'
                        }).html($.parseHTML(script.innerHTML)));

                    });
                    $("body").find('.i-script').remove();
                }
            });
        }
    </script>
</head>
<body>
    <div class = "row">
        <div class="col-3 sidebar close">
        <div class="logo-details">
            <i class='bx bxs-objects-horizontal-left'></i>  <!-- Boxicons logo -->
            <span class="logo_name">FC Ipsg</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#">
                    <i class='bx bxs-building-house' ></i>
                    <span onclick="getTab('pagtab/tab_clube.php')" class="link_name">Clube</span>
                </a>
            </li>
            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bxl-php' ></i>
                        <span class="link_name">Complexas</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name " href="#">Complexas</a> </li>
                    <li><a onclick="getTab('pagtab/tab_jogador.php')" href="#">Jodadores</a> </li>
                    <li><a onclick="getTab('pagtab/tab_treinador.php')" href="#">Treinadores</a> </li>
                    <li><a onclick="getTab('pagtab/tab_staff.php')" href="#">Staff</a> </li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bxl-html5' ></i>
                        <span class="link_name">Intermedias</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name " href="#">Intermedias</a> </li>
                    <li><a onclick="getTab('pagtab/tab_clube_anterior.php')" href="#">Clube_Anterior</a> </li>
                    <li><a onclick="getTab('pagtab/tab_clube_loja.php')" href="#">Clube_Loja</a> </li>
                    <li><a onclick="getTab('pagtab/tab_clube_noticias.php')" href="#">Clube_Noticias</a> </li>
                    <li><a onclick="getTab('pagtab/tab_clube_palmares.php')" href="#">Clube_Palmares</a> </li>
                    <li><a onclick="getTab('pagtab/tab_clube_patrocinio.php')" href="#">Clube_Patrocinio</a> </li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bxl-css3' ></i>
                        <span class="link_name">Simples</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name " href="#">Simples</a> </li>
                    <li><a onclick="getTab('pagtab/tab_cargo.php')" href="#">Cargo</a> </li>
                    <li><a onclick="getTab('pagtab/tab_estadio.php')" href="#">Estadio</a> </li>
                    <li><a onclick="getTab('pagtab/tab_galeria.php')" href="#">Galeria</a> </li>
                    <li><a onclick="getTab('pagtab/tab_modalidade.php')" href="#">Modalidade</a> </li>
                    <li><a ONCLICK="getTab('pagtab/tab_pais.php')" ">Pais</a> </li>
                    <li><a onclick="getTab('pagtab/tab_palmares.php')" href="#">Palmares</a> </li>
                    <li><a onclick="getTab('pagtab/tab_patrocinio.php')" href="#">Patrocinio</a> </li>
                    <li><a onclick="getTab('pagtab/tab_posicao.php')" href="#">Posiçao</a> </li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bxl-javascript'></i>
                        <span class="link_name">Informativas</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name " href="#">Noticiario</a> </li>
                    <li><a onclick="getTab('pagtab/tab_calendario.php')" href="#">Calendario</a> </li>
                    <li><a onclick="getTab('pagtab/tab_noticia.php')" href="#">Noticias</a> </li>
                    <li><a onclick="getTab('pagtab/tab_evento.php')" href="#">Eventos</a> </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-shopping-bags'></i>
                    <span onclick="getTab('pagtab/tab_loja.php')" class="link_name">Loja</span>

                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-id-card'></i>
                    <span onclick="getTab('pagtab/tab_socio.php')" class="link_name">Socio</span>
                </a>
            </li>
            <li>
                <a href="login.php">
                    <i class='bx bx-log-out' ></i>
                    <span class="link_name" href="#">Sair</span>
                </a>
            </li>
        </ul>
    </div>

        <div class = "col-9" style = "margin-left: 13.5%; width: 87%">
            <div id = "body-tab">

            </div>
        </div>
    </div>


</body>
</html>