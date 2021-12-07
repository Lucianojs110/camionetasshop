<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\NewUserRequest;
use Session;


use Illuminate\Http\Request;

class UsersController extends Controller
{
    
    public function index()
    {
        $users  = User::get();
        return view('users.index', ['users' => $users]);
    }

    public function create(Request $request)
    {
       
        return view ('users.new');
    }


    public function store(NewUserRequest $request)
    {
        $usuario = new User();
        $usuario->name = request('name');
        $usuario->email = request('email');
        $usuario->role = request('role');
        $usuario->password = bcrypt(request('password'));
        $usuario->save();

        
        Session::flash('success', 'Usuario Agregado con exito');
        return redirect('/usuarios');

    }

    public function destroy($id)
    {
        $usuario = User::FindOrFail($id);
        $usuario->delete();
        Session::flash('success', 'Usuario eliminado con exito');
        return redirect('/usuarios');
    }


}
