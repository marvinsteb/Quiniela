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
          {!!Form::open(array('url'=>'liga','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}

        <div class="row">
                  <div class="col-md-4">
                  </div>  
                  <div class="col-md-4">
                    <div class="form-group">
                      <input name = 'nombre' type="text" class="form-control" placeholder="Nombre" aria-label="Id" aria-describedby="basic-addon1">
                    </div>
                  </div> 
            </div>
            <div class="row">
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <input name = 'sede' type="text" class="form-control" placeholder="Sede" aria-label="Id" aria-describedby="basic-addon1">
                    </div>
                  </div>
            </div>
            <div class="row">
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <input name = 'anio' type="text" class="form-control" placeholder="Año" aria-label="Id" aria-describedby="basic-addon1">
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