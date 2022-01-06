@extends('adminlte::page')
@section ('content')

<style>
	.texto-resaltado{
	color: white;
	background-color: #f1663e;
	padding: 5px;
	font-size: 13px;	
}
.texto-destacado{
	color: white;
	background-color: green;
	padding: 5px;
	font-size: 13px;
}


</style>

				<div class="row mt-2">
                    <div class="col-12">
                        <!-- Column -->
                        <div class="card">
						<div class="card-header" style="background-color:#909497">
                        <h4 style="color:white">Listado Vehiculos</h4>
                        </div>
                            <div class="card-body">
                                
								<div class="row ">
									<div class="col-md-2">
										<a href="{{URL::action('VehiculosController@create')}}" class="btn btn-success btn-block btn-sm" title="Nuevo">Nuevo</a>
									</div>
								</div>
								
								<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="example">
									<thead>
										<th>Id</th>
										<th>Imagen</th>
										<th>Categoría</th>
										<th>Marca / Mod.</th>
										
										<th>Versión</th>
										<th>Año</th>
										<th>Ubicacion</th>
										<th></th>
										<th></th>
										<th>Acciones</th>
									</thead>
									@foreach($producto as $p)
										<tr>
											<td>{{ $p->id_vehiculo }}</td>
											@foreach ($p->imagenprincipal as $img)
												@if ($loop->first) {{-- if para filtrar solo la 1er Imagen --}}
													<td><img src="/{{ $img->ruta }}" height="100px" width="130px" /></td>
												@endif
											@endforeach	
											<td>{{ $p->categoria->nombre }}</td>
											<td>{{ $p->marca }} - {{ $p->modelo }}</td>
											<td>{{ $p->version }}</td>
											<td>{{ $p->año }}</td>
											<td>{{ $p->ciudad }}-{{ $p->provincia }}</td>
											<td>
											@if($p->envio == 1)
											<div class="texto-resaltado">Envío</div>
											@else
											<div></div>
											@endif
											</td>
											<td>
											@if($p->destacado == 1)
											<div class="texto-destacado">Destacado</div>
											@else
											<div></div>
											@endif
											</td>
											<td align="center" style="width: 20%">
												<form method="post" action="{{ URL::action('VehiculosController@destroy', $p->id_vehiculo) }}">
													@method('delete')
													@csrf
													<a class="btn btn-info btn-sm" href="{{ URL::action('VehiculosController@show', $p->id_vehiculo) }}" title="Ver más">
														<i class="fa fa-eye">
														</i>
													</a>
													<a class="btn btn-info btn-sm " href="{{ URL::action('VehiculosController@edit', $p->id_vehiculo) }}" title="Editar">
														<i class="fa fa-edit">
														</i>
													</a>
													<button class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de eliminar este Vehiculo?');" title="Eliminar">
														<i class="fa fa-trash-alt">
														</i>
													</button>
													
												</form>
											</td>
										</tr>
									@endforeach
								</table>
								</div>
                            </div>
                        </div>
                    </div>
				</div>
				

@endsection
@section('js')

	<script>
  		$('#example').DataTable({
        	dom: 'Bfrtip',
        	buttons: [
				'excel'
				
        	],
			responsive: true,
			"language": {
                "url": "{{URL::to('/')}}/idiomas/spanish.json"
            }
     	});
  	</script>

@endsection
