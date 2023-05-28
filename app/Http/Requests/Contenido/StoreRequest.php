<?php

nameSpace App\Http\Requests\Contenido;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'nombre'=>'required|string|max:50',
            'curso_id'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'nombre.required'=>'Este campo es requerido',
            'nombre.string'=>'El valor no es correcto',
            'nombre.max'=>'Solo se permite 50 caracteres',
            'curso_id.required'=>'Este campo es requerido',
        ];
    }
}
