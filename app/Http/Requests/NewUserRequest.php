<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'role' => 'required',
            'password' => 'required|min:6|confirmed',
            
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es requerido.',
            'email.required' => 'El campo email es requerido.',
            'email.unique' => 'El email ya ha sido usado.',
            'role.required' => 'Seleccione un rol.',
            'password.required' => 'El campo password es requerido.',
            'password.confirmed' => 'El password no coincide.',
            'password.min' => 'El password debe contener al menos 6 caracteres.',
          
        ];
    }
}
