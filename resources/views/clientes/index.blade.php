@extends('adminlte::page')
@section ('content')



<div class="row">
	<div class="col-12">
		<!-- Column -->
		<div class="card mt-3">
			
				<div class="card-header" style="background-color:#909497">
                	<h4 style="color:white">Listado de Clientes</h4>
            	</div>
				<div class="card-body">
				<div class="row mt-2">
					<div class="col-md-2">
						<a href="{{URL::action('ClientesController@create')}}" class="btn btn-success btn-block btn-sm" title="Nuevo">Nuevo</a>
					</div>
				</div>
				</br>
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="example">
						<thead>
							<th>Id</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Email</th>
							<th>Provincia</th>
							<th>Ciudad</th>
							<th>Dirección</th>
							<th>Telefono</th>
							<th>Acción</th>
						</thead>
						@foreach($clients as $p)
						<tr>
							<td>{{ $p->id_cliente }}</td>
							<td>{{ $p->nombre }}</td>
							<td>{{ $p->apellido }}</td>
							<td>{{ $p->email }}</td>
							<td>{{ $p->provincia }}</td>
							<td>{{ $p->ciudad }}</td>
							<td>{{ $p->direccion }}</td>
							<td>{{ $p->telefono }}</td>
							<td align="center">
								<form method="post" action="{{ URL::action('ClientesController@destroy', $p->id_cliente) }}">
									@method('delete')
									@csrf
									<a class="btn btn-info btn-sm" href="{{ URL::action('ClientesController@show', $p->id_cliente) }}" title="Ver más">
										<i class="fa fa-eye">
										</i>
									</a>
									<a class="btn btn-info btn-sm" href="{{ URL::action('ClientesController@edit', $p->id_cliente) }}" title="Editar">
										<i class="fa fa-edit">
										</i>
									</a>
									<button class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de eliminar este Cliente?');" title="Eliminar">
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