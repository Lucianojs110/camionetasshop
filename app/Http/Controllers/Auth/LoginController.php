<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

        //sobrescrito
    protected function credentials(\Illuminate\Http\Request $request)
        {
            return ['email' => $request->{$this->username()}, 'password' => $request->password, 'estado' => 1];
        }

        protected function sendFailedLoginResponse(\Illuminate\Http\Request $request)
        {
    
            if ( !User::where('email', $request->email)->first() ) {
                return redirect()->back()
                    ->withInput($request->only($this->username(), 'remember'))
                    ->withErrors([
                        $this->username() => 'El usuario no es correcto',
                    ]);
            }
    
            if ( !User::where('email', $request->email)->where('password', bcrypt($request->password))->first() ) {
                return redirect()->back()
                    ->withInput($request->only($this->username(), 'remember'))
                    ->withErrors([
                        'password' =>'Contraseña Incorrecta',
                    ]);
            }
    
    
            if ( !User::where('email', $request->email)->where('password', bcrypt($request->password))->where('estado', 1)->first() ) {
                return redirect()->back()
                    ->withInput($request->only($this->username(), 'remember'))
                    ->withErrors([
                        'password' => 'Usuario desactivado',
                    ]);
            }
    
        }
}
