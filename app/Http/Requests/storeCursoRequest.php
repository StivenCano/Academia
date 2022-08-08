<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeCursoRequest extends FormRequest
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
            'nombre' => 'required|email:rfc',
            'descripcion' => 'required|max:30',
            'duracion' => 'integer',
            'imagen' => 'required|image'
        ];
    }
}
