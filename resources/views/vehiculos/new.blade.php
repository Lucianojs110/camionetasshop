@extends('adminlte::page')
@section ('content')

<br>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-header" style="background-color:#909497">
                <h4 style="color:white">Alta de Vehiculos</h4>
            </div>
            <div class="card-body">
                <form method="post" action="{{ URL::action('VehiculosController@store') }}" enctype="multipart/form-data">
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
                       
                        <div class="row">

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 ">
                            <label class="form-check-label">Cliente</label> 
                                    <select style="padding-right:10px"autofocus name="id_cliente" required class="form-control selectpicker" id="id_cliente" data-live-search="true" >
                                        @foreach($clientes as $cliente)
                                        <option value="{{ $cliente->id_cliente }}">{{ $cliente->nombre }} {{ $cliente->apellido }}</option>
                                        @endforeach
                                    </select>
                                    
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                    
                                        <label for="nombre" class="form-check-label">Marca (*)</label>
                                        <input type="text" name="marca" id="marca" value="{{ old('marca') }}" class="form-control" required>
                                    
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                   
                                        <label for="descripcion" class="form-check-label">Modelo (*)</label>
                                        <input type="text" name="modelo" id="modelo" value="{{ old('modelo') }}" class="form-control" required>
                                
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                   
                                        <label for="version" class="form-check-label">Version (*)</label>
                                        <input type="text" name="version" id="version" value="{{ old('version') }}" class="form-control" required>
                                
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                    <label for="id_categoria" class="form-check-label">Categoría</label>
                                    <select name="id_categoria" id="id_categoria" class="form-control">
                                        @foreach ($categorias as $cat)
                                        <option value="{{ $cat->id_categoria }}">
                                            {{ $cat->nombre }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                    <label class="form-check-label">Combustible</label>
                                    <select name="combustible" id="combustible" class="form-control">
                                        <option value="Diesel">Diesel</option>
                                        <option value="Nafta">Nafta</option>
                                        <option value="Nafta_GNC">Nafta-GNC</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                    <label class="form-check-label">Uso</label>
                                    <select name="uso" id="uso" class="form-control">
                                        <option value="Particular">Particular</option>
                                        <option value="Trabajo">Trabajo</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="precio" class="form-check-label">Año (*)</label>
                                        <input type="number" name="año" id="año" value="{{ old('año') }}" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="precio" class="form-check-label">Precio</label>
                                        <input type="number" name="precio" id="precio" value="{{ old('precio') }}" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="motor" class="form-check-label">Motor</label>
                                        <input type="text" name="motor" id="motor" value="{{ old('motor') }}" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="cantidad" class="form-check-label">Kilometraje</label>
                                        <input id="km" type="number" name="km" value="{{ old('km') }}" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                    <label for="id_categoria" class="form-check-label">Provincia</label>
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
                                        <label for="ciudad" class="form-check-label">Ciudad</label>
                                        <input type="text" name="ciudad" id="ciudad" value="{{ old('ciudad') }}" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="descripcion" class="form-check-label">Descripción</label>
                                        <textarea name="descripcion" id="descripcion" cols="30" rows="5" class="form-control"></textarea>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="ruta" class="form-check-label">Fotos (*)</label><br>
                                        <div class="col-md-6">
                                            <input id="ruta" type="file" name="ruta[]" value="{{ old('ruta') }}" multiple accept="image/*">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <hr>
                    <div class="form-body">
                    <label for="descripcion" class="form-check-label">Seleccione un filtro</label>
                        <div class="row justify-content-left align-items-left">
                            <div class="col-md-3 form-group">
                                <select class="form-control" {{-- multiple="multiple" --}} id="filtroslista" name="filtroslista">
                                    @foreach ($filtros as $f)
                                    <option value="{{ $f->id_filtro }}" {{ (collect(old('filtros'))->contains($f->id_filtro)) ? 'selected':'' }}>{{ $f->id_filtro }} {{-- -> --}} {{ $f->descripcion }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="agregar" class="form-check-label"></label>
                                <a class="btn btn-success" name="agregar" id="agregar" onclick="agregar()">
                                    Agregar
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-12" id="listado" name="listado">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-12">
                            <legend id="titulo">Filtros agregadas 0</legend>
                            <input type="text" id="cantidad2" name="cantidad2" required value="0" style="display: none;">
                        </div>

                    </div>

                    <div class="row justify-content-center align-items-center">
						<div class="col-md-2">
							<button class="btn btn-success btn-block btn-md">Guardar</button>
						</div>
						<div class="col-md-2">
							<a href="{{URL::action('VehiculosController@index')}}" class="btn btn-primary btn-block btn-md" title="Salir">Salir</a>
						</div>
					</div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')

<script>
    $('#filtroslista').select2({
        placeholder: "Filtros"
    });

    $('#id_cliente').select2({
        placeholder: "Cliente"
    });

    function agregar() {
        cant = $('#listado').children('div').length - 2;
        valor = $('#filtroslista').val();
        nombre_filtro = $("#filtroslista option[value=" + valor + "]").text().trim();

        $("#listado").append("<div class='row' id='div_" + cant + "'><div class='col-md-4'><label for='filtro' class='form-check-label'>Filtro</label><input class='form-control' type='text' name='filtros[]' id='filtro" + cant + "'  disabled value='" + nombre_filtro + "'><input type='text' name='valor[]' id='valor" + cant + "' style='display: none;' value='" + valor + "'></div><div class='col-md-4'><label for='atributos' class='form-check-label'>Atributo(*)</label><input class='form-control' type='text' name='atributos[]' id='atributos" + cant + "' required></div><div class='col-md-4'><label for='agregar' class='form-check-label'></label><br><a class='btn btn-danger' name='remover' id='remover" + cant + "' onclick='quitar(" + cant + ")'>Quitar</a></div>");

        $("#filtroslista option[value=" + valor + "]").remove();
        $("#filtros").val(valor);



        cant = $('#listado').children('div').length - 2;

        $('#cantidad2').val(cant);
        $("#titulo").html("Cantidad de Filtros Agregados: " + cant);
    }

    function quitar(cant) {
        var valor = $('#valor' + cant).val();
        var nombre = $('#filtro' + cant).val();

        $("#filtroslista").append("<option value='" + valor + "'>" + nombre + "</option>");

        $('#div_' + cant).remove();

        cant = $('#listado').children('div').length - 2;

        $('#cantidad2').val(cant);
        $("#titulo").html("filtros agregados " + cant);
    }
</script>

@endsection