@extends('adminlte::page')
@section ('content')


<br>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-header" style="background-color:#909497">
                <h4 style="color:white">Alta de Clientes</h4>
            </div>
            <div class="card-body">
                <form method="post" action="{{ URL::action('ClientesController@store') }}" enctype="multipart/form-data">
                    @csrf
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
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="nombre" class="form-check-label">Nombre (*)</label>
                                        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="apellido" class="form-check-label">Apellido (*)</label>
                                        <input type="text" name="apellido" id="apellido" value="{{ old('apellido') }}" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="email" class="form-check-label">Email (*)</label>
                                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                    <label for="id_categoria" class="form-check-label">Provincia (*)</label>
                                    <select name="provincia" id="id_categoria" class="form-control selectpicker" data-live-search="true">
                                        <option value="Buenos Aires">Buenos Aires</option>
                                        <option value="Capital Federal">Capital Federal</option>
                                        <option value="Catamarca">Catamarca</option>
                                        <option value="Chaco">Chaco</option>
                                        <option value="Chubut">Chubut</option>
                                        <option value="Córdoba">Córdoba</option>
                                        <option value="Corrientes">Corrientes</option>
                                        <option value="Entre Ríos">Entre Ríos</option>
                                        <option value="Formosa">Formosa</option>
                                        <option value="Jujuy">Jujuy</option>
                                        <option value="La Pampa">La Pampa</option>
                                        <option value="La Rioja">La Rioja</option>
                                        <option value="Mendoza">Mendoza</option>
                                        <option value="Misiones">Misiones</option>
                                        <option value="Neuquén">Neuquén</option>
                                        <option value="Río Negro">Río Negro</option>
                                        <option value="Salta">Salta</option>
                                        <option value="San Juan">San Juan</option>
                                        <option value="San Luis">San Luis</option>
                                        <option value="Santa Cruz">Santa Cruz</option>
                                        <option value="Santa Fe">Santa Fe</option>
                                        <option value="Santiago del Estero">Santiago del Estero</option>
                                        <option value="Tierra del Fuego">Tierra del Fuego</option>
                                        <option value="Tucumán">Tucumán</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="ciudad" class="form-check-label">Ciudad (*)</label>
                                        <input type="text" name="ciudad" id="ciudad" value="{{ old('ciudad') }}" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                    <label for="direccion" class="form-check-label">Direccion (*)</label>
                                    <input type="text" name="direccion" id="direccion" value="{{ old('direccion') }}" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="telefono" class="form-check-label">Telefono (*)</label>
                                        <input type="number" name="telefono" id="telefono" value="{{ old('telefono') }}" class="form-control" required>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row justify-content-center align-items-center">
						<div class="col-md-2">
							<button class="btn btn-success btn-block btn-md">Guardar</button>
						</div>
						<div class="col-md-2">
							<a href="{{URL::action('ClientesController@index')}}" class="btn btn-primary btn-block btn-md" title="Salir">Salir</a>
						</div>
					</div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

