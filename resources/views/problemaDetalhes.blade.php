<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Notificações</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/feed.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">

    <header class="app-header"><a class="app-header__logo" href="{{ url('/') }}">ProSolve</a>
      <ul class="app-nav">

        <li class="dropdown item-btn-criar">
            <a href="{{ url('/') }}" class="btn btn-criar-publicacao">Voltar</a>
        </li>

        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="{{ url('/login') }}"><i class="fa fa-sign-out fa-lg"></i> Sair </a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>

    <main class="app-content">
      <div class="row user">
        <div class="col-md-12">
          <div class="profile">
        </div>
        <div class="col-md-3">
          <div class="tile p-0">


          </div>
        </div>
        <div class="Logout">
          <div class="tab-content">

                <div class="timeline-post">
                  <div class="post-media">
                    <div class="content">
                      <h5>Usuário Teste</h5>
                      <p class="text-muted"><small>{{ $problema->data }} - {{ $problema->endereco }}</small></p>
                    </div>
                  </div>
                  <div class="post-content">
                    <h3>{{ $problema->titulo }}</h3>
                    <p>{{ $problema->descricao }}</p>

                    <img src="https://pm1.narvii.com/6759/bcd6c5c19f07cd76b023bd0716f3e4f88887c0f9v2_128.jpg"/>
                    <img src="https://pm1.narvii.com/6759/bcd6c5c19f07cd76b023bd0716f3e4f88887c0f9v2_128.jpg"/>
                    <img src="https://pm1.narvii.com/6759/bcd6c5c19f07cd76b023bd0716f3e4f88887c0f9v2_128.jpg"/>
                  </div>
                </div>

          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>
