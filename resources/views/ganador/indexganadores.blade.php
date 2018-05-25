@extends('layouts.app')
@section('content')
<main role="main">
          <div class="container">
            <div class="row" >
              <div class="col-md-12 tamanio" >          
              </div>
            </div>




          <form action="/usuarios_ganadores.php">



            <TABLE>
              <TR>
                <TD ROWSPAN=2>
                  <div class="col-md-6">
                    <img src = 'https://2.bp.blogspot.com/-Vwr_16qyqsc/WU_KkMCATbI/AAAAAAABJvU/P6SOCMKqzbg3XH4L3gqv42-8KQvTYSXigCLcBGAs/s1600/Copa%2BMundial%2BRusia%2B2018.png'>
                  </div>
                </TD>
                <TD>
                  <div class="col-md-9">
                    <a href="{{ url('/ganadores/lista') }}" class="btn btn-danger">Usuraios ganadores</a>

                    <div class="col-md-12 tamanio" >          
                    </div>
                    <a href="{{ url('/ganadores/liga') }}" class="btn btn-danger">Ligas ganadoras</a>
                  </div>
                </TD>
              </TR>
            </TABLE>
          </form>
          </div>
      </main>

@endsection