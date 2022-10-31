<?php

namespace App\Http\Requests;

use Attribute;
use Illuminate\Foundation\Http\FormRequest;
use PhpParser\Node\Stmt\Return_;

class StoreCurso extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ];
    }
    public function Attributes(){
        return[
            'name' => ' nombre del curso,'
        ];
    }
    public function messages()
    {
        return[
            'descripcion.required' => 'Dede ingresar una  descripcion del curso'
        ];
    }
}