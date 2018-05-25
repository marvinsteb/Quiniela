@extends('layouts.app')
@section('content')
<main role="main">
          <div class="container">
            <div class="row" >
              <div class="col-md-12 tamanio" >          
              </div>
            </div>
          <form action="/ganadores">
            <TABLE  width="100%">
              <TR>
                <TD width="50%" ROWSPAN=6>
                  <img src = 'https://2.bp.blogspot.com/-Vwr_16qyqsc/WU_KkMCATbI/AAAAAAABJvU/P6SOCMKqzbg3XH4L3gqv42-8KQvTYSXigCLcBGAs/s1600/Copa%2BMundial%2BRusia%2B2018.png'>
                </TD>
              </TR>
              <TR>
                <TH width="25%" class="table_th"> <font color="#b51c41">Usuarios ganadores</font></TH>
                <TH width="25%" class="table_th"> <font color="#b51c41">Premio</font></TH>
              </TR>
               <TR>
                <TD HEIGHT="20">
                    <input type="text" class="form-control" placeholder="Primer lugar" aria-label="primer_lugar" aria-describedby="basic-addon1" disabled="">       
                </TD>
                <TD>
                  <input type="text" class="form-control" placeholder="Q." aria-label="Q" aria-describedby="basic-addon1" disabled="">  
                </TD>
              </TR>
              <TR>
                <TD HEIGHT="10">
                    <input type="text" class="form-control" placeholder="Segundo lugar" aria-label="segundo_lugar" aria-describedby="basic-addon1" disabled="">       
                </TD>
                <TD>
                  <input type="text" class="form-control" placeholder="Q." aria-label="Q" aria-describedby="basic-addon1" disabled="">  
                </TD>
              </TR>
              <TR>
                <TD HEIGHT="10">
                    <input type="text" class="form-control" placeholder="Tercer lugar" aria-label="tercer_lugar" aria-describedby="basic-addon1" disabled="">       
                </TD>
                <TD>
                  <input type="text" class="form-control" placeholder="Q." aria-label="Q" aria-describedby="basic-addon1" disabled="">  
                </TD>
              </TR>
              <TR>
                <TD colspan="2" align="right">
                  <button type="submit" class="btn btn-danger">Salir</button>
                  </TD>
              </TR>
            </TABLE>  
          </form>
          </div>
      </main>
@endsection
