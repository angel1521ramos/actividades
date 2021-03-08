<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Actividad extends FormRequest
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
            'docente'=>'required',
            'nombre'=>'required',
            'grupo'=>'required',
            'horaI'=>'required',
            'horaT'=>'required',
            'lugar'=>'required',
            'dias'=>'required'
        ];
    }
}
