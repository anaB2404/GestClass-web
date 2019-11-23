<?php
    session_start();
?>
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

    <?php
       if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <div id='calendar'></div>

    <section class="modals">
        <div id="modalInfo" class="modal">
            <div class="modal-content">
                <h4>Detalhes do evento</h4>
                <dl class="row">
                    <dt class="col s3 bolder">Titulo do evento</dt>
                    <dd class="col s9" id="title"></dd><br>

                    <dt class="col s3 bolder">Início do evento</dt>
                    <dd class="col s9" id="start"></dd><br>

                    <dt class="col s3 bolder">Fim do evento</dt>
                    <dd class="col s9" id="end"></dd><br>
                </dl>
            </div>

            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect btn-flat btnDefault">Fechar</a>
            </div>
        </div>

        <div id="modalCadastro" class="modal">
            <div class="modal-content">
                <dl class="row">
                    <div class="modal-header">
                        <dt class="col s9">
                            <h4>Cadastrar evento</h4>
                        </dt>
                        <dd class="col s3"><a href="#!" class="modal-close waves-effect btn-flat right"><i class="material-icons">clear</i></a></dd>
                    </div>
                </dl>
                <div class="row">
                    <span class="msg-cad"></span>
                    <form id="adicionarEvento" class="col s12" method="POST">
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">format_size</i>
                                <input id="icon_titulo" type="text" name="title" id="title" class="validate">
                                <label for="icon_titulo">Titulo do evento</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">color_lens</i>
                                <select class="" name="color" id="color">
                                    <option value="" disabled selected>Escolha uma cor</option>
                                    <option value="#FFD700" data-icon="assets/img/amarelo.jpg" class="left">Amarelo</option>
                                    <option value="#8B0000" data-icon="assets/img/vermelho.jpg" class="left">Vermelho</option>
                                    <option value="#228B22" data-icon="assets/img/verde.jpg" class="left">Verde</option>
                                    <option value="#42A5F5" data-icon="assets/img/azul.jpg" class="left">Azul</option>
                                    <option value="#A020F0" data-icon="assets/img/roxo.jpg" class="left">Roxo</option>
                                    <option value="#000000" data-icon="assets/img/preto.jpg" class="left">Preto</option>
                                </select>
                                <!-- <label>Materialize Select</label> -->
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">event</i>
                                <input placeholder="" name="start" id="start" type="text" class="validate" onkeypress="DataHora(event, this)">
                                <label for="first_name">Início do evento</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">event</i>
                                <input placeholder="" name="end" id="end" type="text" class="validate" onkeypress="DataHora(event, this)">
                                <label for="first_name">Fim do evento</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn waves-effect btnDefault" type="submit" name="cadEvento" id="cadEvento" value="cadEvento">Cadastrar
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </section>

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

    <!-- <script src="node_modules/jquery/dist/jquery.slim.min.js"></script> -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="node_modules/materialize-css/dist/js/materialize.min.js"></script>
    <script src="js/homeSecretaria.js"></script>
    <script src="js/default.js"></script>
    <script src='js/calendario.js'></script>

</body>

</html>