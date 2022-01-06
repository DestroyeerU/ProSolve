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
    <title>Feed</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/feed.css">
  </head>
  <body class="app sidebar-mini">

    <header class="app-header"><a class="app-header__logo" href="{{ url('/') }}">ProSolve</a>
      <ul class="app-nav">

        <li class="dropdown item-btn-criar">
            <a href="{{ url('/problema') }}" class="btn btn-criar-publicacao">Criar publicação</a>
        </li>

        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message"> Seu problema foi resolvido</p>
                    <p class="app-notification__meta">2 de janeiro</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Sua publicação foi postada</p>
                      <p class="app-notification__meta">5 janeiro</p>
                    </div></a></li>
              </div>
            </div>
          </ul>
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
              @foreach  ( $problemas as $problema )
                <div class="timeline-post">
                  <div class="post-media">
                    <div class="content">
                      <h5>Usuário Teste</h5>
                     <div id="delet"><button class="btn"><i class="fa fa-trash"></i></button></div>
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
              @endforeach
          </div>
        </div>
      </div> 
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
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
