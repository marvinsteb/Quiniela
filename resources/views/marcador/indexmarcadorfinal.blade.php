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


    				{!!Form::open(array('url'=>'ganadores','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}   
          		<!-- OCTAVOS DE FINAL-->
            	<div class="row">
                	<div class="col-md-6">
                		<h3>Octavos de final - Llave uno</h3>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						    </tr>
						    <tr>
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>		
						      </td>
						    </tr>
						    <tr>
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>	
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						    </tr>
						    <tr>
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						    </tr>
						    <tr>
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						    </tr>
						    <tr>
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						    </tr>
						    						    <tr>
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						    </tr>
						    						    <tr>
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						    </tr>
						    
						  </tbody>
						</table>
                	</div>

                	<div class="col-md-6">
                		<h3>Octavos de final - Llave dos</h3>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						    </tr>
						    <tr>
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>		
						      </td>
						    </tr>
						    <tr>
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>	
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						    </tr>
						    <tr>
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						    </tr>
						    <tr>
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						    </tr>
						    <tr>
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						    </tr>
						    						    <tr>
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						    </tr>
						    						    <tr>
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						    </tr>
						    
						  </tbody>
						</table>
                	</div>
				</div>
				<!-- CUARTOS DE FINAL-->
				<div class="row">
                	<div class="col-md-6">
                		<h3>Cuartos de final - Llave uno</h3>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						    </tr>
						    <tr>
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>		
						      </td>
						    </tr>
						    <tr>
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>	
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						    </tr>
						    <tr>
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						    </tr>
						  </tbody>
						</table>
                	</div>
                	<div class="col-md-6">
                		<h3>Cuartos de final - Llave dos</h3>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						    </tr>
						    <tr>
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>		
						      </td>
						    </tr>
						    <tr>
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>	
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						    </tr>
						    <tr>
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						    </tr>
						  </tbody>
						</table>
                	</div>
                </div>
				<!-- SEMIFINALES DE FINAL-->
				<div class="row">
                	<div class="col-md-6">
                		<h3>Semifinales - Llave uno</h3>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						    </tr>
						    <tr>
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>		
						      </td>
						    </tr>
						  </tbody>
						</table>
                	</div>
                	<div class="col-md-6">
                		<h3>Semifinales - Llave dos</h3>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						    </tr>
						    <tr>
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>		
						      </td>
						    </tr>
						  </tbody>
						</table>
                	</div>
                </div>
				<!-- FINAL-->
				<div class="row">
                	<div class="col-md-6">
                		<h3>Final</h3>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
						    </tr>
						    <tr>
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>
						      </td>
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
						      <td style="width: 150px">
						      	<div class="input-group input-group-sm mb-3">
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="3">
								</div>		
						      </td>
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
        </div>
    </main>
@endsection