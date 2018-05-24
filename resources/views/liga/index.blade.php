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
                  <div class ="row">
                  <a href="{{ url('/liga/create') }}" class="btn btn-danger">Crear liga por diversión</a>
                  </div> 
                  <br>
                  <div class ="row">  
                  <a href="{{ url('/liga/crearparaapuesta') }}" class="btn btn-danger">Crear liga de apuestas</a>    
                  </div>
                  <br>
                  <div class ="row"> 
                  <a href="{{ url('/liga/unirse') }}" class="btn btn-danger">Unirse a una liga</a>    
                  </div>                               
                  </div>
              </div>  
          </div>
    </main>
@endsection