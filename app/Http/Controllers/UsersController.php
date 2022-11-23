<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\NewUserRequest;
use App\Http\Requests\UserEditRequest;
use Session;
use Auth;


use Illuminate\Http\Request;

class UsersController extends Controller
{
    
    public function index()
    {
        $users  = User::with('roles')->get();
        //dd($users);
        return view('users.index', ['users' => $users]);
    }

    public function create(Request $request)
    {
        $roles = Role::all();
        return view ('users.new', ['roles'=>$roles]);
    }

    public function edit($id, Request $request)
    {
        
        $user = User::findOrFail($id);
        $roles = Role::all();
        
        return view ('users.edit', ['user'=>$user, 'roles'=>$roles]);
    }


    public function store(NewUserRequest $request)
    {
        $usuario = new User();
        $usuario->name = request('name');
        $usuario->email = request('email');
        $usuario->link = request('link');
        $usuario->telefono = request('telefono');
        $usuario->estado = 0;
        $usuario->password = bcrypt(request('password'));
        $usuario->save();
        $usuario->asignarRol(request('role'));

        Session::flash('success', 'Usuario Agregado con exito');
        return redirect('admin/usuarios');

    }

    public function profile(Request $request)
    {
      
        $user = $request->user();
        $roles = Role::all();
        return view ('users/profile', ['user'=>$user, 'roles'=>$roles]);
    }

    public function update(UserEditRequest $request, $id)
    {
        $usuario = User::findOrFail($id);

        $usuario->name = request('name');
        $usuario->email = request('email');
        $usuario->asignarRol(request('role'));
        $usuario->link = request('link');
        $usuario->telefono = request('telefono');
        $pass = $request->get('password');
        if ($pass != null) {
            $usuario->password = bcrypt($request->get('password'));
        } else {
            unset($usuario->password);
        }
        $usuario->update();
        Session::flash('success', 'Usuario actualizado con exito');
        return redirect('admin/usuarios');
    }

    public function destroy($id)
    {
        $usuario = User::FindOrFail($id);
        $usuario->delete();
        Session::flash('success', 'Usuario eliminado con exito');
        return redirect('admin/usuarios');
    }

    public function deshabilitar($id)
    {
        
        
        $usuario = User::find($id);

        if($usuario->estado==1)
        {
            $usuario->estado= 0;
            $usuario->update();
            
        }else
        {
            $usuario->estado= 1;
            $usuario->update();
           
        }
        

        return redirect('admin/usuarios');
    }


}
