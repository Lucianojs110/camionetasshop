@extends('adminlte::page')
@section ('content')

<br>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
		<div class="card-header" style="background-color:#909497">
                <h4 style="color:white">Modificar Categoría</h4>
            </div>
            <div class="card-body">
			<form method="post" action="{{ URL::action('CategoriasController@update', $cat->id_categoria) }}" enctype=multipart/form-data>
				@csrf
				@method('PUT')    
				<div class="row">
                        <div class="col-sm-12">
                            <div class="content">
                                @if(Session::has('message'))
                                <div class="alert alert-danger">
                                    {{Session::get('message')}}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-body">
                      
                        <div class="row p-t-20">
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-group">
										<label for="nombre" class="form-check-label">Nombre de la Categoría (*)</label>
										<input type="text" name="nombre" id="nombre" class="form-control" value="{{ $cat->nombre }}" required>
									</div>
								</div>
							</div>
                        </div>
                    </div>
					<div class="row justify-content-center align-items-center">
						<div class="col-md-2">
							<button class="btn btn-success btn-block btn-md">Guardar</button>
						</div>
						<div class="col-md-2">
							<a href="{{URL::action('CategoriasController@index')}}" class="btn btn-primary btn-block btn-md" title="Salir">Salir</a>
						</div>
					</div>
            </form>
			</div>
        </div>
    </div>
</div>


@endsection


