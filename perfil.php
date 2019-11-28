<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <title>GestClass - A gestão na palma da sua mão</title>
  <link rel="icon" href="assets/icon/logo.png" />

  <link rel="stylesheet" type="text/css" href="node_modules/materialize-css/dist/css/materialize.min.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://use.fontawesome.com/releases/v5.9.0/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="css/default.css" />
  <link rel="stylesheet" type="text/css" href="css/perfil.css" />

</head>

<body>

  <?php require_once 'reqMenu.php' ?>

  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col s12 m8 offset-m2">
          <div class="card-panel z-depth-5 formPerfil">
            <form action="" enctype="multipart/form-data">
              <h3 class="center titleForm">Dados Pessoais</h3>
              <div class="input-field">
                <img class="materialboxed imagePreview imageProfile" src="assets/img/pp.jpg" />
              </div>
              <div class="input-field">
                <input type="text" placeholder="Nome completo" class="inputLogin" value="Ana Beatriz Rodrigues Lopes" />
              </div>
              <div class="input-field">
                <input type="text" placeholder="Email" class="inputLogin" value="ana.lopes155@etec.sp.gov.br" />
              </div>
              <div class="input-field">
                <input type="password" placeholder="Senha" class="inputLogin" value="12341254125" />
              </div>
              <div class="input-field input-field-btn">
                <button class="btn-flat btn-large btnDefaultPerfil col s12" type="submit">Salvar alterações</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
  <script src="node_modules/materialize-css/dist/js/materialize.min.js"></script>
  <script src="js/homeSecretaria.js"></script>
  <script src="js/perfil.js"></script>

</body>

</html>