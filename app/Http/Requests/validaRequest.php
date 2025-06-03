<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'email' => 'required|email|',
            'mensaje' => 'required',
            'edad' => 'required|integer|between:17,30',
            'direccion' => 'required|string|max:80',
            'curp' => [
            'required',
            'size:18',
            'regex:/^([A-Z]{4})([0-9]{2})(0[1-9]|1[0-2])([0-2][0-9]|3[01])([HM])([A-Z]{5})([A-Z0-9]{2})$/'
            ],

            'RFC' => [
                'required',
                'regex:/^[A-ZÑ&]{3,4}\d{6}[A-Z0-9]{3}$/i'
            ],
        ];
    }

    /**
     * Get custom messages for validation errors.
     *
     * @return array<string, string>
     */
    public function messages()
    {
        return [
           
        ];
    }
}

