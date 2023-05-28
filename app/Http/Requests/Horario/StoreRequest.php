<?php

nameSpace App\Http\Requests\Horario;

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
            'hora_i'=>'required',
            'hora_f' => 'required|after:hora_i',
            'curso_id'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'hora_i.required'=>'Este campo es requerido',
            'hora_f.required'=>'Este campo es requerido',
            'hora_f.after'=>'La hora final debe ser una hora posterior a la hora inicial.',
            'curso_id.required'=>'Este campo es requerido',
            'hora_f.after'=>'La hora final debe ser una hora posterior a la hora inicial.'
            
        ];
    }
}
