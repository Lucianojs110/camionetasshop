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
    <div class="card-header mb-3" style="background-color:#909497">
        <h4 style="color:white">Editar usuario: {{$user->name}}</h4>
    </div>
    <div class="container p-4 my-2">
        <form action="{{ route('usuarios.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" value="{{$user->name}}" name="name" placeholder="escribe tu nombre">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" value="{{$user->email}}" name="email" placeholder="escribe tu Email">
                </div>
            </div>

            
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="link">Link</label>
                    <input id="link" type="text" class="form-control" value="{{$user->link}}" name="link" placeholder="escribe el link">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Telefóno</label>
                    <input id="telefono" type="text" class="form-control" value="{{$user->telefono}}" name="telefono" placeholder="escribe tu telefóno">
                </div>
            </div>
            @can('Administrador')

            <div class="form-group col-md-4">
                    <label for="rol">Rol</label>
                    <select name="role" class="form-control">
                        <option selected disabled>Elige un rol para el usuario..</option>
                        @foreach($roles as $role)
                        <option value='{{$role->id}}'  <?= $user->role[0]['id'] == $role->id ? 'SELECTED' : '' ?>>{{$role->name}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('rol'))
                    <span class="error text-danger" for="input-rol">{{ $errors->first('rol') }}</span>
                    @endif
                </div>
            @endcan


            <div class="row">
                <div class="form-group col-md-6">
                    <label for="Contraseña">Contraseña <span class="small">(Opcional)</span></label>
                    <input type="password" class="form-control" name="password" placeholder="Contraseña">
                </div>
                <div class="form-group col-md-6">
                    <label for="Contraseña">Confirmar Contraseña <span class="small">(Opcional)</span></label>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirme contraseña">
                </div>
            </div>


          


            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>
            <a href="{{url('usuarios')}}" class="btn btn-secondary">Volver</a>
        </form>

    </div>
</div>
</div>
@endsection