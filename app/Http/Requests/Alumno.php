<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Alumno extends FormRequest
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
            'actividad_id'=>'required',
            'nombre'=>'required',
            'apellidoP'=>'required',
            'apellidoM'=>'required',
            'semestre'=>'required',
            'correo'=>'required',
            'telefono'=>'required',
            'carrera'=>'required'
        ];
    }
}
