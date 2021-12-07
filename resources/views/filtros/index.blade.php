@extends('adminlte::page')
@section ('content')


<div class="row">
	<div class="col-12">
		<!-- Column -->
		<div class="card mt-3">
			<div class="card-header" style="background-color:#909497">
				<h4 style="color:white">Listado de Filtros</h4>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-2">
						<a href="{{URL::action('FiltrosController@create')}}" class="btn btn-success btn-block btn-sm" title="Nuevo">Nuevo</a>
					</div>
				</div>
				</br>
				<table class="table table-striped table-bordered table-hover" id="example">
					<thead>
						<th>Id</th>
						<th>Filtros</th>

						<th>Acciones</th>
					</thead>
					@foreach($filtros as $f)
					<tr>

						<td>{{ $f->id_filtro }}</td>
						<td>{{ $f->descripcion }}</td>

						<td align="center">
							<form method="post" action="{{ URL::action('FiltrosController@destroy', $f->id_filtro) }}">
								@method('delete')
								@csrf

								<a class="btn btn-info btn-sm" href="{{ URL::action('FiltrosController@edit', $f->id_filtro) }}" title="Editar">
									<i class="fa fa-edit">
									</i>
								</a>
								<button class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de eliminar este Filtro?');" title="Eliminar">
									<i class="fa fa-trash">
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


@endsection

@section('js')

<script>
	$('#example').DataTable({
		dom: 'Bfrtip',
		buttons: [
			'excel'

		],
		responsive: true,
		responsive: true,
			"language": {
                "url": "{{URL::to('/')}}/idiomas/spanish.json"
            }
	});
</script>

@endsection