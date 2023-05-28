<?php

namespace App\Http\Requests\Persona;

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
            'nombres'=>'required|string|max:255',
            'email'=>'nullable|unique:personas,email,'. $this->route('persona')->id.'|max:50|email:rfc,dns',
            'carnet'=>'required|numeric|unique:personas,carnet,'. $this->route('persona')->id.'|digits_between:6,10',
            'direccion'=>'nullable|string|max:255',
            'celular'=>'nullable|numeric|unique:personas,celular,'. $this->route('persona')->id.'|digits_between:8,10',
            'tipo'  => 'required|string|max:50',
        ];
    }

    public function messages()
    {
        return [
            'nombres.required'=>'Este campo es requerido',
            'nombres.string'=>'El valor no es correcto',
            'nombres.max'=>'Solo se permite 255 caracteres',

            'email.required'=>'Este campo es requerido',
            'email.string'=>'El valor no es correcto',
            'email.unique'=>'El correo ya está registrado',
            'email.max'=>'Solo se permite 255 caracteres',
            'email.email'=>'No es un correo electronico',

            'carnet.required'=>'Este campo es requerido.',
            'carnet.numeric'=>'El campo no debes contener caracteres no numéricos.',
            'carnet.unique'=>'El carnet ya está registrado.',
            'carnet.digits_between'=>'El campo debe tener entre 6 y 10 dígitos.',

            'direccion.string'=>'El valor no es correcto',
            'direccion.max'=>'Solo se permite 255 caracteres',

            'celular.required'=>'Este campo es requerido.',
            'celular.unique'=>'El telefono ya está registrado.',
            'celular.digits_between' => 'El campo debe tener entre 8 y 10 dígitos.',
            'celular.numeric'=>'El campo no debe contener caracteres no numéricos.',

            'tipo.required'=>'Este campo es requerido.',
            'tipo.max'=>'Solo se permite 50 caracteres',
            
        ];
    }
}
