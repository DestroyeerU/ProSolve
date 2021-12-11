<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>ProSolve</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="{{ route('login.load') }}" method="POST">
          @csrf
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Login</h3>
          <div class="form-group">
            <label class="control-label">Usuário</label>
            <input class="form-control" id="email" name="email" type="text" placeholder="Email" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">Senha</label>
            <input class="form-control" id="senha" name="senha" type="password" placeholder="Senha">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>Entrar</button>
          </div>

          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
          </div>

          <div class="form-group mt-3">
            <link class="semibold-text mb-0"><a href="{{ url('/cadastro') }}">Criar Cadastro <i class="fa fa-angle-right fa-fw"></i> </a></link>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>
