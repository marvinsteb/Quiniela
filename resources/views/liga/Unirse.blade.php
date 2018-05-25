@extends('layouts.app')

@section('content')
 <main role="main">
        <div class="container">
          <div class="row" >
            <div class="col-md-12 tamanio3" >          
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
            </div>    
            <div class="col-md-4">
              <h2 class="titulos">Unirse a una liga</h2>
            </div>
            <div class="row" >
              <div class="col-md-12 tamanio" >          
              </div>
            </div>
          </div>
          <form action="/marcador">
            <div class="row">
                  <div class="col-md-4">
                  </div>  
                  <div class="col-md-4">
                    <div class="input-group mb-3">
                      <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Selecciona una liga</option>
                        <option value="1">Opción1</option>
                        <option value="2">Opción2</option>
                        <option value="3">Opción3</option>
                      </select>
                    </div>
                  </div> 
            </div>

            <div class="row">
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-4">
                    <button type="submit" class="btn btn-danger"> Enviar solicitud</button>

                  </div>
            </div>              
          </form>
          <div class="row" >
            <div class="col-md-12 tamanio3" >          
           </div>
          </div>
        </div>
      </main>       
@endsection