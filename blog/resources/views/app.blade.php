<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel - Blog</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
      <div class="container">
        <h1>Laravel - Blog</h1>
        <p>Exemplo de blog feito com Laravel</p>
        <ul>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/noticias') }}">Notícias</a></li>
          <li><a href="{{ url('/painel') }}">Painel</a></li>
        </ul>
      </div>
    </header>

    <div id="content">
      <div class="container">
        <div class="row">

          <div class="col-md-8 articles">

            @yield('content')

          </div>

          <div class="col-md-4 sidebar">

            @include('_sidebar')

          </div>

        </div>
      </div>
    </div>

  </body>
</html>