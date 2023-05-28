<?php

namespace App\Http\Requests\Credencial;

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
            'nombre'=>'required|unique:credencials,nombre,'. $this->route('credencial')->id.'|string|max:100',
            'host'=>'required',
            'campo'=>'required',
            'campo2'=>'required',
            'categoria_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required'=>'Este campo es requerido.',
            'nombre.string'=>'El valor no es correcto.',
            'nombre.max'=>'Solo se permite 100 caracteres.',
            'nombre.unique'=>'Este libro ya esta registrado.',

            'editorial.required'=>'Este campo es requerido.',
            'editorial.string'=>'El valor no es correcto.',
            'editorial.unique'=>'Esta editorial ya está registrado.',
            'editorial.max'=>'Solo se permite 50 caracteres.',

            'anyo.required'=>'Este campo es requerido.',
            'anyo.numeric'=>'El campo no debes contener caracteres no numéricos.',
            'anyo.between'=>'El año debe ser mayor a 1970.',

            'stock.required'=>'Este campo es requerido.',
            'stock.integer'=>'El campo deber tener valor numérico.',
            'stock.min'=>'El campo deber tener valor numérico mayor a 0.',

            'categoria_id.required'=>'Este campo es requerido.',
            'autor_id.required'=>'Este campo es requerido.',
            
        ];
    }
}
