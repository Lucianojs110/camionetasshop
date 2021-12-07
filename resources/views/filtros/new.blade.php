@extends('adminlte::page')
@section ('content')

<br>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-header" style="background-color:#909497">
                <h4 style="color:white">Nuevo Filtro</h4>
            </div>
            <div class="card-body">
                <form method="post" action="{{ URL::action('FiltrosController@store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-sm-12">
                        <div class="content">
                            @if(Session::has('message'))
                            <div class="alert alert-danger">
                                {{Session::get('message')}}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-body">
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="descripcion" class="form-check-label">Nombre del Filtro (*)</label>
                                        <input type="text" name="descripcion" id="descripcion" value="{{ old('descripcion') }}" class="form-control" required>
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
							<a href="{{URL::action('FiltrosController@index')}}" class="btn btn-primary btn-block btn-md" title="Salir">Salir</a>
						</div>
					</div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection