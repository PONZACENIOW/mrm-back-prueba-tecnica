<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactsRequest extends FormRequest
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
            'name'  => ['required',  'regex:/^[\pL\s\-.]+$/u',  'max:100'],
            'phone'  => ['required',  'numeric',  'digits:10'],
            'email'  => ['required',  'email',  'max:50'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Campo requerido',
            'name.regex' => 'Se permiten solo letras y "-."',
            'name.max' => 'Máximo 100 caracteres',
            'phone.required' => 'Campo requerido',
            'phone.numeric' => 'Se permiten solo números',
            'phone.digits' => 'Se requieren 10 dígitos',
            'email.required' => 'Campo requerido',
            'email.email' => 'Correo electrónico inválido',
            'email.max' => 'Máximo 50 caracteres',
        ];
    }
}
