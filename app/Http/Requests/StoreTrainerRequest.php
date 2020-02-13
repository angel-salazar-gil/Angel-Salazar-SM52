<?php

namespace LaraDex\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTrainerRequest extends FormRequest
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
            /**
             * Definimos lo que queremos que valide del formulario
             * Las validaciones se separan mediante el simbolo " | "
             */
            'name' => 'required|max: 15',
            'avatar' => 'required|image',
            'slug' => 'required',
            'descripcion' => 'required'
        ];
    }
}
