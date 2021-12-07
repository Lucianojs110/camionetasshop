@extends('adminlte::page')

@section('content')

@if(count($errors) > 0 )
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <ul class="p-0 m-0" style="list-style: none;">
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="card" style="background-color: #fff">
    <div class="card-header" style="background-color:#909497">
        <h4 style="color:white">Crear Nuevo Usuario</h4>
    </div>
    <div class="card-body">

        <form action="{{url('usuarios')}}" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="row">
                <div class="form-group col-md-6">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="escribe tu nombre">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="escribe tu Email">
                </div>
            </div>


            <div class="row">
                <div class="form-group col-md-6">
                    <label for="Contraseña">Contraseña</label>
                    <input type="password" class="form-control" name="password" value="{{old('password')}}" placeholder="Contraseña">
                </div>
                <div class="form-group col-md-6">
                    <label for="Contraseña">Confirmar Contraseña</label>
                    <input type="password" class="form-control" name="password_confirmation" value="{{old('password')}}" placeholder="Confirme contraseña">
                </div>
            </div>




            <div class="row">
                <div class="form-group col-md-6">
                    <label for="rol">Rol</label>
                    <select name="role" class="form-control">
                        <option value='Administrador'>Administrador</option>
                        <option value='Vendedor'>Vendedor</option>
                    </select>
                </div>

            </div>




            <div class="row justify-content-center align-items-center">
                <div class="col-md-2">
                    <button class="btn btn-success btn-block btn-md">Guardar</button>
                </div>
                <div class="col-md-2">
                    <a href="{{URL::action('UsersController@index')}}" class="btn btn-primary btn-block btn-md" title="Salir">Salir</a>
                </div>
            </div>
        </form>

    </div>
</div>
</div>
@endsection