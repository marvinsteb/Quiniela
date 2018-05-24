<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Mundial Rusia 2018</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('css/album.css')}}">
  </head>

  <body>

  <nav class="navbar navbar-dark bg-dark">
          <a href="/" class="navbar-brand d-flex align-items-center">
            <div weight="10px"></div>
            <strong>COPA MUNDIAL DE FUTBOL DE LA FIFA 2018</strong>
          </a>
          
 
 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
          </li>
          @if (Auth::guest())
         <li class="nav-item">
            <li><a class="nav-link" href="{{ url('/login') }}">Inicia sesión</a></li>
          </li>
          <li class="nav-item">
           <li><a class="nav-link" href="{{ url('/register') }}">Regístrate</a></li>
          </li>
        @else
         <li class="nav-item">
           <li>{{ Auth::user()->name }} <span class="caret"></span></li>
          </li>
          <li class="nav-item">
          <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>cerrar sesión</a></li>
          </li>
           
        @endif




        </ul>
      </div>
    </nav>
      
    @yield('content')

    <footer class="text-muted">
      <div class="container">
        <p>
        <img src="{{ asset('images/banderas.png') }}">
        

          
        </p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
    
        <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
  </body>
</html>


 
