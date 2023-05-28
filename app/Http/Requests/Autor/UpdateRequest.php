<?php

namespace App\Http\Requests\Autor;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'nombre'=>'required|string|unique:autors,nombre,'. $this->route('autor')->id.'|max:50',
            'nacionalidad'=>'required|string|max:255'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required'=>'Este campo es requerido',
            'nombre.string'=>'El valor no es correcto',
            'nombre.max'=>'Solo se permite 50 caracteres',
            'nacionalidad.required'=>'Este campo es requerido',
            'nacionalidad.string'=>'El valor no es correcto',
            'nacionalidad.max'=>'Solo se permite 255 caracteres'
        ];
    }
}
