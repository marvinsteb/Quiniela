@extends('layouts.app')

@section('content')
     <main role="main">
          <div class="container">
              <div class="row" >
                  <div class="col-md-12 tamanio" >
                    
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <img src = 'https://2.bp.blogspot.com/-Vwr_16qyqsc/WU_KkMCATbI/AAAAAAABJvU/P6SOCMKqzbg3XH4L3gqv42-8KQvTYSXigCLcBGAs/s1600/Copa%2BMundial%2BRusia%2B2018.png'>
                  </div>
                  <div class="col-md-1">
                    
                  </div>
                  <div class="col-md-5">
                    @if (Auth::guest())
                    <a href="{{ url('/login') }}" class="btn btn-danger">Iniciar sesión</a>
                    <a href="{{ url('/register') }}" class="btn btn-danger">Registrarse</a>
                    @else
                    <li><a href="{{ url('/logout') }}"><i class="btn btn-danger"></i>cerrar sesión</a></li>
                    @endif
                  </div>
              </div>  
          </div>
    </main>
@endsection
