<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once("application/views/painel/utils/start.php") ?>
</head>

<body class="login">
  <div class="wrapper wrapper-login">
    <div class="container container-login animated fadeIn">
      <div class="col-md-12 col-xs-5 text-center mb-4">
        <a href="<?= base_url() ?>" class="logo">
          <img src="<?= base_url() ?>assets/site/img/logo.png" data-no-retina class="logo-dark default" style="max-height:40px;">
        </a>
      </div>
      <?= form_open("painel/login/logar", ["class" => "login-form"]) ?>
      <!-- <div class="login-form"> -->
      <div class="form-group form-floating-label">
        <!-- <label for="username" class="placeholder">Username</label> -->
        <input name="usuario" type="text" class="form-control input-border-bottom" autocomplete="off" placeholder="Usuário">
      </div>
      <div class="form-group form-floating-label">
        <!-- <label for="password" class="placeholder">Password</label> -->
        <input name="senha" type="password" class="form-control input-border-bottom" autocomplete="off" placeholder="Senha">
        <div class="show-password">
          <i class="flaticon-interface"></i>
        </div>
      </div>
      <div class="form-action">
        <button class="btn btn-black btn-rounded btn-login">Entrar</button>
      </div>
      </form>
    </div>
  </div>
  <?php include_once("application/views/painel/utils/end.php") ?>
</body>

</html>