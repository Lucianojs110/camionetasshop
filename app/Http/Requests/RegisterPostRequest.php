<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterPostRequest extends FormRequest
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
            'link' => 'required|unique:users,link'
            
        ];


    }

    public function messages()
    {
        return [
            'link.unique' => 'El nombre de usuario ya ha sido usado',    
            'email.unique' => 'El email ya ha sido usado',      
        ];
    }
}
