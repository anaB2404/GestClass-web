<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <title>GestClass - A gestão na palma da sua mão</title>
        <link rel="icon" href="assets/icon/logo.png" />

        <!-- Bibliotecas CSS -->
        <link rel="stylesheet" type="text/css" href="node_modules/materialize-css/dist/css/materialize.min.css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v5.9.0/js/all.js"></script>

        <!-- Arquivo CSS -->
        <link href='css/core/main.min.css' rel='stylesheet' />
        <link href='css/daygrid/main.min.css' rel='stylesheet' />
        <link href='css/list/main.min.css' rel='stylesheet' />
        <link rel="stylesheet" type="text/css" href="css/default.css" />
        <link rel="stylesheet" type="text/css" href="css/homeSecretaria.css" />
        <link rel="stylesheet" type="text/css" href="css/calendario.css" />

        <!-- Arquivo JS -->
        <script src='js/core/main.min.js'></script>
        <script src='js/core/locales/pt-br.js'></script>
        <script src='js/interaction/main.min.js'></script>
        <script src='js/daygrid/main.min.js'></script>
        <script src='js/list/main.min.js'></script>
        <script src='js/google-calendar/main.min.js'></script>
        <script src='js/calendario.js'></script>
    </head>
    <body>
        <header>
            <div class="navbar-fixed">
                <nav class="light-blue lighten-1">
                    <div class="container">
                        <div class="nav-wrapper">
                            <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
                            <a href="homeSecretaria.html" class="brand-logo"><i class="fas fa-drafting-compass"></i> GestClass</a>
                            <ul class="right hide-on-med-and-down">
                                <li>
                                    <a href="#user" class="transparent"><img class="circle icon-user" src="assets/img/pp.jpg"></a>
                                </li>
                                <li>
                                    <a href="index.html" class="btn-flat btnDefault">Sair</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <ul id="slide-out" class="sidenav">
                <li>
                    <div class="user-view">
                        <div class="background">
                            <img src="assets/img/slide2.png">
                        </div>
                        <a href="#user"><img class="circle" src="assets/img/pp.jpg"></a>
                        <a href="#name"><span class="white-text name">Ana Beatriz</span></a>
                        <a href="#email"><span class="white-text email">ana.lopes155@etec.sp.gov.br</span></a>
                    </div>
                </li>
                <li><a href="paginaManutencao.html"><i class="material-icons">person</i>Alunos</a></li>
                <li><a href="paginaManutencao.html"><i class="material-icons">group</i>Classes</a></li>
                <li><a href="paginaManutencao.html"><i class="material-icons">people_alt</i>Professores</a></li>
                <li>
                    <div class="divider"></div>
                </li>
                <li><a class="subheader">Subheader</a></li>
                <li><a class="waves-effect" href="calendario.php"><i class="material-icons">event</i>Calendario Escolar</a>
                </li>
                <li><a class="dropdown-trigger" href="paginaManutencao.html" data-target="dropdown1"><i class="material-icons">group_add</i>Cadastro de contas<i class="material-icons right">arrow_drop_down</i></a></li>
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="paginaManutencao.html"><i class="material-icons">people_alt</i>Professores</a></li>
                    <li><a href="paginaManutencao.html"><i class="material-icons">school</i>Secretaria</a></li>
                    <li><a href="paginaManutencao.html"><i class="material-icons">person</i>Alunos</a></li>
                    <li><a href="paginaManutencao.html"><i class="material-icons">wc</i>Pais</a></li>
                </ul>
            </ul>
        </header>

        <div id='loading'>loading...</div>

        <div id='calendar'></div>

        <div id="modal1" class="modal">
            <div class="modal-content">
                <h4>Detalhes do evento</h4>
                <p><span class="bolder">Titulo do evento &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span><span id="title"></span></p> 
                <p><span class="bolder">Início do evento &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span><span id="start"></span></p> 
                <p><span class="bolder">Fim do evento &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span><span id="end"></span></p> 
            </div>
            
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
            </div>
        </div>

        <section class="floating-buttons">
            <div class="fixed-action-btn">
                <a class="btn-floating btn-large light-blue lighten-1">
                    <i class="large material-icons">add</i>
                </a>
                <ul>
                    <li><a href="paginaManutencao.html" class="btn-floating black tooltipped" data-position="left" data-tooltip="Gráfico de rendimento"><i class="material-icons">insert_chart</i></a></li>
                    <li><a href="paginaManutencao.html" class="btn-floating yellow darken-1 tooltipped" data-position="left" data-tooltip="Notificações"><i class="material-icons">notifications_active</i></a></li>
                    <li><a href="paginaManutencao.html" class="btn-floating blue-grey darken-4 tooltipped" data-position="left" data-tooltip="Chat"><i class="material-icons">chat</i></a></li>
                    <li><a href="calendario.php" class="btn-floating blue tooltipped" data-position="left" data-tooltip="Calendario Escolar"><i class="material-icons">event</i></a></li>
                </ul>
            </div>
        </section>

        <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
        <!-- <script src="node_modules/jquery/dist/jquery.min.js"></script> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
        <script src="node_modules/materialize-css/dist/js/materialize.min.js"></script>
        <script src="js/homeSecretaria.js"></script>
        <script src="js/default.js"></script>

    </body>
</html>