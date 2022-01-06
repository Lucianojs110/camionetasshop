@extends('adminlte::page')
@section ('content')
<br>
<div class="row ">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-header" style="background-color:#909497">
                <h4 style="color:white">Ver Cliente</h4>
            </div>
            <div class="card-body">
                <div class="form-body">
                    <div class="row p-t-20">


                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="nombre" class="form-check-label">Nombre (*)</label>
                                    <input type="text" name="nombre" id="nombre" value="{{ $clientes->nombre }}" class="form-control" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="apellido" class="form-check-label">Apellido (*)</label>
                                    <input type="text" name="apellido" id="apellido" value="{{ $clientes->apellido }}" class="form-control" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="email" class="form-check-label">Email (*)</label>
                                    <input type="email" name="email" id="email" value="{{ $clientes->email }}" class="form-control" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="form-group">
                                <label for="id_categoria" class="form-check-label">Provincia</label>
                                <select name="provincia" id="id_categoria" class="form-control selectpicker" data-live-search="true" disabled>
                                    <option value="Buenos Aires" <?= $clientes->provincia == 'Buenos Aires' ? 'SELECTED' : '' ?>>Buenos Aires</option>
                                    <option value="Capital Federal" <?= $clientes->provincia == 'Capital Federal' ? 'SELECTED' : '' ?>>Capital Federal</option>
                                    <option value="Catamarca" <?= $clientes->provincia == 'Catamarca' ? 'SELECTED' : '' ?>>Catamarca</option>
                                    <option value="Chaco" <?= $clientes->provincia == 'Chaco' ? 'SELECTED' : '' ?>>Chaco</option>
                                    <option value="Chubut" <?= $clientes->provincia == 'Chubut' ? 'SELECTED' : '' ?>>Chubut</option>
                                    <option value="Córdoba" <?= $clientes->provincia == 'Córdoba' ? 'SELECTED' : '' ?>>Córdoba</option>
                                    <option value="Corrientes" <?= $clientes->provincia == 'Corrientes' ? 'SELECTED' : '' ?>>Corrientes</option>
                                    <option value="Entre Ríos" <?= $clientes->provincia == 'Entre Ríos' ? 'SELECTED' : '' ?>>Entre Ríos</option>
                                    <option value="Formosa" <?= $clientes->provincia == 'Formosa' ? 'SELECTED' : '' ?>>Formosa</option>
                                    <option value="Jujuy" <?= $clientes->provincia == 'Jujuy' ? 'SELECTED' : '' ?>>Jujuy</option>
                                    <option value="La Pampa" <?= $clientes->provincia == 'La Pampa' ? 'SELECTED' : '' ?>>La Pampa</option>
                                    <option value="La Rioja" <?= $clientes->provincia == 'La Rioja' ? 'SELECTED' : '' ?>>La Rioja</option>
                                    <option value="Mendoza" <?= $clientes->provincia == 'Mendoza' ? 'SELECTED' : '' ?>>Mendoza</option>
                                    <option value="Misiones" <?= $clientes->provincia == 'Misiones' ? 'SELECTED' : '' ?>>Misiones</option>
                                    <option value="Neuquén" <?= $clientes->provincia == 'Neuquén' ? 'SELECTED' : '' ?>>Neuquén</option>
                                    <option value="Río Negro" <?= $clientes->provincia == 'Río Negro' ? 'SELECTED' : '' ?>>Río Negro</option>
                                    <option value="Salta" <?= $clientes->provincia == 'Salta' ? 'SELECTED' : '' ?>>Salta</option>
                                    <option value="San Juan" <?= $clientes->provincia == 'San Juan' ? 'SELECTED' : '' ?>>San Juan</option>
                                    <option value="San Luis" <?= $clientes->provincia == 'San Luis' ? 'SELECTED' : '' ?>>San Luis</option>
                                    <option value="Santa Cruz" <?= $clientes->provincia == 'Santa Cruz' ? 'SELECTED' : '' ?>>Santa Cruz</option>
                                    <option value="Santa Fe" <?= $clientes->provincia == 'Buenos Aires' ? 'SELECTED' : '' ?>>Santa Fe</option>
                                    <option value="Santiago del Estero" <?= $clientes->provincia == 'Santiago del Estero' ? 'SELECTED' : '' ?>>Santiago del Estero</option>
                                    <option value="Tierra del Fuego" <?= $clientes->provincia == 'Tierra del Fuego' ? 'SELECTED' : '' ?>>Tierra del Fuego</option>
                                    <option value="Tucumán" <?= $clientes->provincia == 'Tucumán' ? 'SELECTED' : '' ?>>Tucumán</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="ciudad" class="form-check-label">Ciudad (*)</label>
                                    <input type="text" name="ciudad" id="ciudad" value="{{ $clientes->ciudad }}" class="form-control" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="form-group">
                                <label for="direccion" class="form-check-label">Direccion (*)</label>
                                <input type="text" name="direccion" id="direccion" value="{{ $clientes->direccion }}" class="form-control" disabled>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="telefono" class="form-check-label">Telefono (*)</label>
                                    <input type="number" name="telefono" id="telefono" value="{{ $clientes->telefono }}" class="form-control" disabled>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <br>
                            <h3>Vehiculos registrados</h3>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="example">
                                    <thead>
                                        <th>Id</th>
                                        <th>Imagen</th>
                                        <th>Categoría</th>
                                        <th>Marca</th>
                                        <th>Modelo</th>
                                        <th>Versión</th>
                                        <th>Año</th>
                                        <th>Provincia</th>
                                        <th>Ciudad</th>
                                        <th>Acciones</th>
                                    </thead>
                                    @foreach($vehiculos as $p)
                                    <tr>
                                        <td>{{ $p->id_vehiculo }}</td>
                                        @foreach ($p->imagenprincipal as $img)
                                        @if ($loop->first) {{-- if para filtrar solo la 1er Imagen --}}
                                        <td><img src="/{{ $img->ruta }}" height="100px" width="130px" /></td>
                                        @endif
                                        @endforeach
                                        <td>{{ $p->categoria->nombre }}</td>
                                        <td>{{ $p->marca }}</td>
                                        <td>{{ $p->modelo }}</td>
                                        <td>{{ $p->version }}</td>
                                        <td>{{ $p->año }}</td>
                                        <td>{{ $p->provincia }}</td>
                                        <td>{{ $p->ciudad }}</td>
                                        <td align="center" style="width: 20%">
                                            <form method="post" action="{{ URL::action('VehiculosController@destroy', $p->id_vehiculo) }}">
                                                @method('delete')
                                                @csrf
                                                <a class="btn btn-info btn-sm" href="{{ URL::action('VehiculosController@show', $p->id_vehiculo) }}" title="Ver más">
                                                    <i class="fa fa-eye">
                                                    </i>
                                                </a>


                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row justify-content-center align-items-center">

                    <div class="col-md-2">
                        <a href="{{URL::action('ClientesController@index')}}" class="btn btn-primary btn-block btn-md" title="Salir">Salir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>

</script>


@endpush