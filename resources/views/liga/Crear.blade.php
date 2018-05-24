@extends('layouts.app')

@section('content')
<main role="main">
        <div class="container">
          <div class="row" >
            <div class="col-md-12 tamanio" >          
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
            </div>    
            <div class="col-md-4">
              <h2 class="titulos">Crear una liga</h2>
            </div>
            <div class="row" >
              <div class="col-md-12 tamanio" >          
              </div>
            </div>
          </div>
          {!!Form::open(array('url'=>'ventas/factura','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}

        <div class="row">
                  <div class="col-md-4">
                  </div>  
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Identificador" aria-label="Id" aria-describedby="basic-addon1">
                    </div>
                  </div> 
            </div>
            <div class="row">
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <input type="password" class="form-control" placeholder="Nombre" aria-label="NombreLiga" aria-describedby="basic-addon1">
                    </div>
                  </div>
            </div>
            <div class="row">
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-4">
                    <label class="btn btn-danger" for="my-file-selector">
                      <input id="my-file-selector" type="file" style="display:none;">
                      Subir imagen
                    </label>
                  </div>
            </div>
            <div class="row">
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-4">
                    <div class="radio">
                      <label><input type="radio" name="optradio">De apuesta</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="optradio">Por diversión</label>
                    </div>
                  </div >
            </div>
            <div class="row">
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-4">
                  <div class="form-group">
                        <input name"_token" value="{{csrf_token()}}" type="hidden"></input>
                        <button class="btn btn-danger" type="submit">Crear Liga</button>
                        <button class="btn btn-danger" type="reset">Cancelar</button>
                    </div>
                  </div>
            </div>
            
         {!!Form::close()!!}

              
        </div>
      </main>

@endsection