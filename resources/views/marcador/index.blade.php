@extends('layouts.app')
@section('content')
<main role="main">
        <div class="container">
			<div class="row" >
            	<div class="col-md-12 tamanio" >          
            	</div>
          	</div>
          	<div class="row">
            	<div class="col-md-5">
            	</div>    
            	<div class="col-md-4">
              	<h2 class="titulos">Marcadores</h2>
            	</div>
            </div>
            <div class="row" >
              	<div class="col-md-12 tamanio" >          
              	</div>
            </div>

    				{!!Form::open(array('url'=>'marcador','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}

						   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
								<div class="form-group">
									<label>liga</label>
									<select name="idliga" class="form-control">
										<option value="" disabled selected>Selecciona Una Liga</option>
										@foreach($ligas as $liga)	
											<option value="{{$liga->IdLiga}}">{{$liga->Nombre}}</option>
										@endforeach            
									</select>
								</div>        
								</div>

            	<div class="row">
                	<div class="col-md-6">
                		<h3>Grupo A</h3>
                		<table class="table">
						  <thead class="thead-dark">
						    <tr>
						      <th scope="col">Equipo 1</th>
						      <th scope="col">Resultado 1</th>
						      <th scope="col">Resultado 2</th>
						      <th scope="col">Equipo 2</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <td style="width: 150px">Rusia</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input name = 'resutadogrupoAequipo11' type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input name = 'resutadogrupoAequipo12' type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">A. Saudita</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Egipto</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input name = 'resutadogrupoAequipo21' type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input name = 'resutadogrupoAequipo22'  type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Uruguay</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Rusia</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Egipto</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Uruguay</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">A. Saudita</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">A. Saudita</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Egipto</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Uruguay</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Rusia</td>
						    </tr>
						    
						  </tbody>
						</table>
                	</div> 

                	<div class="col-md-6">
                		<h3>Grupo B</h3>
                		<table class="table">
						  <thead class="thead-dark">
						    <tr>
						      <th scope="col">Equipo 1</th>
						      <th scope="col">Resultado 1</th>
						      <th scope="col">Resultado 2</th>
						      <th scope="col">Equipo 2</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <td style="width: 150px">Marruecos</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Irán</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Portugal</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">España</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Portugal</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Marruecos</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Irán</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">España</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">España</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Marruecos</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Irán</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Portugal</td>
						    </tr>
						  </tbody>
						</table>
                	</div>
				</div>

				<div class="row">
                	<div class="col-md-6">
                		<h3>Grupo C</h3>
                		<table class="table">
						  <thead class="thead-dark">
						    <tr>
						      <th scope="col">Equipo 1</th>
						      <th scope="col">Resultado 1</th>
						      <th scope="col">Resultado 2</th>
						      <th scope="col">Equipo 2</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <td style="width: 150px">Francia</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Australia</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Perú</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Dinamarca</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Francia</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Perú</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Dinamarca</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Australia</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Australia</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Perú</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Dinamarca</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Francia</td>
						    </tr>
						    
						  </tbody>
						</table>
                	</div> 

                	<div class="col-md-6">
                		<h3>Grupo D</h3>
                		<table class="table">
						  <thead class="thead-dark">
						    <tr>
						      <th scope="col">Equipo 1</th>
						      <th scope="col">Resultado 1</th>
						      <th scope="col">Resultado 2</th>
						      <th scope="col">Equipo 2</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <td style="width: 150px">Argentina</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Islandia</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Croacia</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Nigeria</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Argentina</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Croacia</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Nigeria</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Islandia</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Islandia</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Croacia</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Nigeria</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Argentina</td>
						    </tr>
						  </tbody>
						</table>
                	</div>
				</div>

				<div class="row">
                	<div class="col-md-6">
                		<h3>Grupo E</h3>
                		<table class="table">
						  <thead class="thead-dark">
						    <tr>
						      <th scope="col">Equipo 1</th>
						      <th scope="col">Resultado 1</th>
						      <th scope="col">Resultado 2</th>
						      <th scope="col">Equipo 2</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <td style="width: 150px">Costa Rica</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Serbia</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Brasil</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Suiza</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Brasil</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Costa Rica</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Serbia</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Suiza</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Suiza</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Costa Rica</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Serbia</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Brasil</td>
						    </tr>
						  </tbody>
						</table>
                	</div> 

                	<div class="col-md-6">
                		<h3>Grupo F</h3>
                		<table class="table">
						  <thead class="thead-dark">
						    <tr>
						      <th scope="col">Equipo 1</th>
						      <th scope="col">Resultado 1</th>
						      <th scope="col">Resultado 2</th>
						      <th scope="col">Equipo 2</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <td style="width: 150px">Alemania</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">México</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Suecia</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">C. del Sur</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Alemania</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Suecia</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">C. del Sur</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">México</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">México</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Suecia</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">C. del Sur</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Alemania</td>
						    </tr>
						  </tbody>
						</table>
                	</div>
				</div>

				<div class="row">
                	<div class="col-md-6">
                		<h3>Grupo G</h3>
                		<table class="table">
						  <thead class="thead-dark">
						    <tr>
						      <th scope="col">Equipo 1</th>
						      <th scope="col">Resultado 1</th>
						      <th scope="col">Resultado 2</th>
						      <th scope="col">Equipo 2</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <td style="width: 150px">Bélgica</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Panamá</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Túnez</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Inglaterra</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Bélgica</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Túnez</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Inglaterra</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Panamá</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Panamá</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Túnez</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Inglaterra</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Bélgica</td>
						    </tr>
						  </tbody>
						</table>
                	</div> 

                	<div class="col-md-6">
                		<h3>Grupo H</h3>
                		<table class="table">
						  <thead class="thead-dark">
						    <tr>
						      <th scope="col">Equipo 1</th>
						      <th scope="col">Resultado 1</th>
						      <th scope="col">Resultado 2</th>
						      <th scope="col">Equipo 2</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <td style="width: 150px">Polonia</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Senegal</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Colombia</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Japón</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Japón</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Senegal</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Polonia</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Colombia</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Senegal</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Colombia</td>
						    </tr>
						    <tr>
						      <td style="width: 150px">Japón</td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td>
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						      <td style="width: 150px">Polonia</td>
						    </tr>
						  </tbody>
						</table>
                	</div>
				</div>
                	
              <div class="row">
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-4">
                  <div class="form-group">
                        <input name"_token" value="{{csrf_token()}}" type="hidden"></input>
                        <button class="btn btn-danger" type="submit">Guardar</button>
                    </div>
                  </div>
            </div>            
         {!!Form::close()!!}
        </div>
    </main>

@endsection
