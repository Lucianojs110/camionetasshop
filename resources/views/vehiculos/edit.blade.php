@extends('adminlte::page')
@section ('content')
<style>
input[type=checkbox]
{
  /* Double-sized Checkboxes */
  -ms-transform: scale(2); /* IE */
  -moz-transform: scale(2); /* FF */
  -webkit-transform: scale(2); /* Safari and Chrome */
  -o-transform: scale(2); /* Opera */
  padding: 20px;
  margin-right: 20px;
}
.form-check-label{
    margin-right: 10px;
    margin-left: 10px;
}
</style>
<br>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-header" style="background-color:#909497">
                <h4 style="color:white">Editar Vehiculo</h4>
            </div>
            <div class="card-body">
                <form method="post" action="{{ URL::action('VehiculosController@update', $repuesto->id_vehiculo) }}" enctype=multipart/form-data>
                    @csrf
                    @method('PUT')
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
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                    <label class="form-check-label">Cliente</label>
                                    <select autofocus name="id_cliente" required class="form-control selectpicker" id="id_cliente" data-live-search="true">
                                        @foreach($clientes as $cliente)
                                        @if($cliente->id_cliente == $repuesto->id_cliente)
                                        <option value="{{ $cliente->id_cliente }}" selected>{{ $cliente->nombre }} {{ $cliente->apellido }}</option>
                                        @else
                                        <option value="{{ $cliente->id_cliente }}">{{ $cliente->nombre }} {{ $cliente->apellido }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="nombre" class="form-check-label">Marca (*)</label>
                                        <input type="text" name="marca" id="marca" value="{{ $repuesto->marca}}" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="descripcion" class="form-check-label">Modelo (*)</label>
                                        <input type="text" name="modelo" id="modelo" value="{{ $repuesto->modelo }}" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="version" class="form-check-label">Version (*)</label>
                                        <input type="text" name="version" id="version" value="{{ $repuesto->version }}" class="form-control" required>
                                    </div>
                                </div>
                            </div>



                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                    <label for="id_categoria" class="form-check-label">Categoría</label>
                                    <select name="id_categoria" id="id_categoria" class="form-control">
                                        @foreach ($categorias as $cat)
                                        <option value="{{ $cat->id_categoria }}" @if($cat->id_categoria == old('id_categoria',$repuesto->id_categoria))
                                            selected
                                            @endif
                                            >
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
                                        <option value="Diesel" <?= $repuesto->combustible == 'Diesel' ? 'SELECTED' : '' ?>>Diesel</option>
                                        <option value="Nafta" <?= $repuesto->combustible == 'Nafta' ? 'SELECTED' : '' ?>>Nafta</option>
                                        <option value="Nafta-GNC" <?= $repuesto->combustible == 'Nafta-GNC' ? 'SELECTED' : '' ?>>Nafta-GNC</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                    <label class="form-check-label">Uso</label>
                                    <select name="uso" id="uso" class="form-control">
                                        <option value="Particular" <?= $repuesto->uso == 'Particular' ? 'SELECTED' : '' ?>>Particular</option>
                                        <option value="Trabajo" <?= $repuesto->uso == 'Trabajo' ? 'SELECTED' : '' ?>>Trabajo</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="precio" class="form-check-label">Año (*)</label>
                                        <input type="number" name="año" id="año" value="{{ $repuesto->año }}" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="precio" class="form-check-label">Precio</label>
                                        <input type="number" name="precio" id="precio" value="{{ $repuesto->precio }}" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="precio" class="form-check-label">Precio cliente</label>
                                        <input type="number" name="precio_cliente" id="precio-cliente" value="{{ $repuesto->precio_cliente }}" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="precio" class="form-check-label">Motor</label>
                                        <input type="text" name="motor" id="motor" value="{{ $repuesto->motor }}" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="cantidad" class="form-check-label">Kilometraje</label>
                                        <input id="km" type="number" name="km" value="{{ $repuesto->km }}" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group">
                                    <label for="id_categoria" class="form-check-label">Provincia</label>
                                    <select name="provincia" id="id_categoria" class="form-control selectpicker" data-live-search="true">
                                        <option value="Buenos Aires" <?= $repuesto->provincia == 'Buenos Aires' ? 'SELECTED' : '' ?>>Buenos Aires</option>
                                        <option value="Capital Federal" <?= $repuesto->provincia == 'Capital Federal' ? 'SELECTED' : '' ?>>Capital Federal</option>
                                        <option value="Catamarca" <?= $repuesto->provincia == 'Catamarca' ? 'SELECTED' : '' ?>>Catamarca</option>
                                        <option value="Chaco" <?= $repuesto->provincia == 'Chaco' ? 'SELECTED' : '' ?>>Chaco</option>
                                        <option value="Chubut" <?= $repuesto->provincia == 'Chubut' ? 'SELECTED' : '' ?>>Chubut</option>
                                        <option value="Córdoba" <?= $repuesto->provincia == 'Córdoba' ? 'SELECTED' : '' ?>>Córdoba</option>
                                        <option value="Corrientes" <?= $repuesto->provincia == 'Corrientes' ? 'SELECTED' : '' ?>>Corrientes</option>
                                        <option value="Entre Ríos" <?= $repuesto->provincia == 'Entre Ríos' ? 'SELECTED' : '' ?>>Entre Ríos</option>
                                        <option value="Formosa" <?= $repuesto->provincia == 'Formosa' ? 'SELECTED' : '' ?>>Formosa</option>
                                        <option value="Jujuy" <?= $repuesto->provincia == 'Jujuy' ? 'SELECTED' : '' ?>>Jujuy</option>
                                        <option value="La Pampa" <?= $repuesto->provincia == 'La Pampa' ? 'SELECTED' : '' ?>>La Pampa</option>
                                        <option value="La Rioja" <?= $repuesto->provincia == 'La Rioja' ? 'SELECTED' : '' ?>>La Rioja</option>
                                        <option value="Mendoza" <?= $repuesto->provincia == 'Mendoza' ? 'SELECTED' : '' ?>>Mendoza</option>
                                        <option value="Misiones" <?= $repuesto->provincia == 'Misiones' ? 'SELECTED' : '' ?>>Misiones</option>
                                        <option value="Neuquén" <?= $repuesto->provincia == 'Neuquén' ? 'SELECTED' : '' ?>>Neuquén</option>
                                        <option value="Río Negro" <?= $repuesto->provincia == 'Río Negro' ? 'SELECTED' : '' ?>>Río Negro</option>
                                        <option value="Salta" <?= $repuesto->provincia == 'Salta' ? 'SELECTED' : '' ?>>Salta</option>
                                        <option value="San Juan" <?= $repuesto->provincia == 'San Juan' ? 'SELECTED' : '' ?>>San Juan</option>
                                        <option value="San Luis" <?= $repuesto->provincia == 'San Luis' ? 'SELECTED' : '' ?>>San Luis</option>
                                        <option value="Santa Cruz" <?= $repuesto->provincia == 'Santa Cruz' ? 'SELECTED' : '' ?>>Santa Cruz</option>
                                        <option value="Santa Fe" <?= $repuesto->provincia == 'Buenos Aires' ? 'SELECTED' : '' ?>>Santa Fe</option>
                                        <option value="Santiago del Estero" <?= $repuesto->provincia == 'Santiago del Estero' ? 'SELECTED' : '' ?>>Santiago del Estero</option>
                                        <option value="Tierra del Fuego" <?= $repuesto->provincia == 'Tierra del Fuego' ? 'SELECTED' : '' ?>>Tierra del Fuego</option>
                                        <option value="Tucumán" <?= $repuesto->provincia == 'Tucumán' ? 'SELECTED' : '' ?>>Tucumán</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="ciudad" class="form-check-label">Ciudad</label>
                                        <input type="text" name="ciudad" id="ciudad" value="{{ $repuesto->ciudad }}" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="descripcion" class="form-check-label">Descripción</label>
                                        <textarea name="descripcion" id="descripcion" cols="30" rows="5" class="form-control">{{$repuesto->descripcion}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="envio"  class="form-check-label">Envio</label>
                                        <input type="checkbox"  name="envio" data-plugin="switchery" data-color="#1bb99a" <?= $repuesto->envio == '1' ? 'Checked' : '' ?>>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="destacados"  class="form-check-label">Desctacado</label>
                                        <input type="checkbox" name="destacado" data-plugin="switchery" data-color="#1bb99a" <?= $repuesto->destacado == '1' ? 'Checked' : '' ?>>
                                    </div>
                                </div>
                            </div>




                            @if ( !empty ( $repuesto->imagenprincipal) )
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="ruta" class="form-check-label">Fotos (jpg, png)</label><br>

                                        @foreach($repuesto->imagenprincipal as $img)
                                        <img src="/{{ $img['ruta'] }}" height="150px" width="210px" />

                                        <!-- Botón para Eliminar la Imagen individualmente -->

                                        <a class="btn btn-success" href="{{URL::route('deleteimage', $img->id_imagen)}}" onclick="return confirmarEliminar();" class="btn btn-success"><i class="fa fa-window-close"></i></a>

                                        @endforeach


                                        <br>
                                        <br>
                                        <input id="ruta" type="file" name="ruta[]" value="{{ old('ruta') }}" multiple accept="image/*">
                                    </div>
                                </div>
                            </div>
                            @else

                            Aún no se ha cargado una imagen para este producto
                            <br>
                            <br>
                            <input id="ruta" type="file" name="ruta[]" value="{{ old('ruta') }}" multiple accept="image/*">

                            @endif
                        </div>
                        <br>

                        <hr>

                        <div class="form-body">
                            <label for="descripcion" class="form-check-label">Seleccione un filtro</label>

                            <div class="row justify-content-left align-items-left">
                                <div class="col-md-4 form-group">
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

                        <div class="form-group col-md-8" id="listado" name="listado">
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
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
                    </div>
            </div>
        </div>
    </div>

    </form>
    @endsection


    @section('js')

    <script>
        $('#id_cliente').select2({
            placeholder: "Cliente"
        });
        window.onload = iniciar();

        function iniciar() {
            //toArray():convierte una colleccion en un array y json transforma un array comun en un array (clave-valor) de objetos
            listado = {!! json_encode($repuesto->toArray()) !!}.filtro    //.filtro de la relacion repuesto->with('filtro') en show()

            listado.forEach(function(element) {
                cant = $('#listado').children('div').length - 2;
                valor = element.id_filtro;
                nombre_filtro = element.descripcion;

                console.log('cant: ' + cant);
                console.log('id_filtro: ' + valor);
                console.log('nombre filtro: ' + nombre_filtro);

                // $("#listado").append("<div class='row' id='div_" + cant + "'><div class='col-md-4'><label for='filtro' class='form-check-label'>Filtro</label><input class='form-control' type='text' name='filtros[]' id='filtro" + cant + "'  disabled value='" + nombre_filtro + "'><input type='text' name='valor[]' id='valor" + cant + "' style='display: none;' value='" + valor + "'></div><div class='col-md-4'><label for='atributos' class='form-check-label'>Atributo(*)</label><input class='form-control' type='text' name='atributos[]' id='atributos" + cant + "' required></div><div class='col-md-4'><label for='agregar' class='form-check-label'></label><br><a class='btn btn-danger' name='remover' id='remover" + cant + "' onclick='quitar(" + cant + ")'>Quitar</a></div>");
                $("#listado").append("<div class='row' id='div_" + cant + "'><div class='col-md-4'><label for='filtros' class='form-check-label'>FILTROS (*)</label><input type='text' name='filtros[]' id='filtro" + cant + "' class='form-control' disabled value='" + nombre_filtro + "'><input type='text' name='valor[]' id='valor" + cant + "' style='display: none;' value='" + valor + "'></div><div class='form-group col-md-4'><label for='atributos' class='form-check-label'>Atributo(*)</label><input class='form-control' type='text' name='atributos[]' id='atributos" + cant + "' value='" + element.pivot.descripcion + "' required></div><div class='form-group col-md-2'><label for='agregar' class='form-check-label'></label></br><a class='btn btn-danger' name='remover' id='remover" + cant + "' onclick='quitar(" + cant + ")'>Quitar</a></div></div>");
                $("#categoriaslista option[value=" + valor + "]").remove();

                $("#filtros").val(valor);

                cant = $('#listado').children('div').length - 2;
                console.log('cantidad 2' + cant);


                $('#cantidad2').val(cant);
                $("#titulo").html("Filtros agregados " + cant);
            });
        }



        function agregar() {
            cant = $('#listado').children('div').length - 2;
            valor = $('#filtroslista').val();
            nombre_filtro = $("#filtroslista option[value=" + valor + "]").text().trim();

            //$("#listado").append("<div id='div_" + cant + "'><div class='form-group col-md-4'></div><div class='form-group col-md-4'><label for='filtro' class='form-check-label'>Filtro (*)</label><input type='text' name='filtros[]' id='filtro" + cant + "' class='form-control' disabled value='" + nombre_filtro + "'><input type='text' name='valor[]' id='valor" + cant + "' style='display: none;' value='" + valor + "'></div><div class='form-group col-md-2'><label for='atributos' class='form-check-label'>Atributo(*)</label><input type='text' name='atributos[]' id='atributos" + cant + "' required></div><div class='form-group col-md-2'><label for='agregar' class='form-check-label'></label></br><a class='btn btn-danger' name='remover' id='remover" + cant + "' onclick='quitar(" + cant + ")'>Quitar</a></div></div>");
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

        //para las Imagenes
        $(document).ready(function() {

            $(".btn-success").click(function() {
                var html = $(".clone").html();
                $(".increment").after(html);
            });

            /* $("body").on("click",".btn btn-outline-danger",function(){ 
            $(this).parents(".control-group").remove();
            }); */

        });

        function confirmarEliminar() {
            var x = confirm("¿Esta seguro de Eliminar esta imagen ?");
            if (x)
                return true;
            else
                return false;
        }
    </script>


    @endsection