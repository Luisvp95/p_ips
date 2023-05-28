<?php

namespace App\Http\Requests\Librosprestamo;

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
            'persona_id' => 'required',
            'libro_id' => 'required',
        ];
    }

    public function messages()
    {
        return [

            'persona_id.required'=>'Este campo es requerido.',
            'libro_id.required'=>'Este campo es requerido.',
        ];
    }
}

