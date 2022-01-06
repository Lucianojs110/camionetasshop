@extends('adminlte::page')
@section ('content')


<div class="row">
	<div class="col-12">
		<!-- Column -->
		<div class="card mt-3">
			<div class="card-header" style="background-color:#909497">
				<h4 style="color:white">Listado de Usuarios</h4>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-2">
						<a href="{{URL::action('UsersController@create')}}" class="btn btn-success btn-block btn-sm" title="Nuevo">Nueva</a>
					</div>
				</div>
				</br>
				<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover" id="example">
					<thead>
						<th>Nombre Completo</th>
						<th>Email</th>
						<th>Rol</th>
						<th>Acciones</th>
					</thead>
					@foreach($users as $user)
					<tr>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
						<td align="center">
							<form method="post" action="{{ URL::action('UsersController@destroy', $user->id) }}">
								@method('delete')
								@csrf

								<a class="btn btn-info btn-sm " href="{{ URL::action('UsersController@edit', $user->id) }}" title="Editar">
									<i class="fa fa-edit">
									</i>
								</a>
								<button class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de eliminar este usuario?');" title="Eliminar">
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
		responsive: true,
			"language": {
                "url": "{{URL::to('/')}}/idiomas/spanish.json"
            }
	});
</script>

@endsection