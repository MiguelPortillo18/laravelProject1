<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeCourse extends FormRequest
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
            'name' => 'required|max:10',
            'desc' => 'required|min:10',
            'category' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nombre del curso',
        ];
    }

    public function messages()
    {
        return [
            'desc.required' => 'Favor ingresar una descripcion del curso',
        ];
    }
}
