<?php

namespace App\Http\Requests\Curso;

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

            'nombre'=>'required|string|unique:cursos|max:255',
            'imagen'=>'nullable|file|image|mimes:png,jpg|max:2048',
            'precio'=>'required|numeric',
            'categoria_id'=>'required',
            'persona_id'=>'required',
            'cupo'=>'required|numeric',
            'fecha_i'=>'required|date|after_or_equal:'.now()->format('Y-m-d'),
            'fecha_f'=>'required|date|after_or_equal:fecha_i',

            
        ];
    }

    public function messages()
    {
        return [
            'nombre.required'=>'Este campo es requerido..',
            'nombre.string'=>'El valor no es correcto.',
            'nombre.unique'=>'El producto ya está registrado.',
            'nombre.max'=>'Solo se permite 255 caracteres.',

            'imagen.image'=>'La imagen tiene que ser jpge o png..',
            'imagen.max'=>'El tamaño de la imagen no puede ser superior a 2 MB.',
            'imagen.required'=>'Este campo es requerido.',
            //'image.dimensions'=>'Solo se permiten imagenes de 100x200 px.',

            'precio.required'=>'Este campo es requerido.',
            'precio.numeric'=>'El campo no debe contener caracteres no numéricos.',
            'cupo.required'=>'Este campo es requerido.',
            'cupo.numeric'=>'El campo no debe contener caracteres no numéricos.',

            'categoria_id.required'=>'Este campo es requerido.',
            'persona_id.required'=>'Este campo es requerido.',

            'fecha_i.required'=>'Ingrese la fecha inicial',
            'fecha_i.after_or_equal'=>'La fecha inicial debe ser posterior o igual al día actual',
            'fecha_f.required'=>'Ingrese la fecha final',
            'fecha_f.after_or_equal'=>'La fecha final debe ser posterior o igual a la fecha inicial',
        ];
    }
}
