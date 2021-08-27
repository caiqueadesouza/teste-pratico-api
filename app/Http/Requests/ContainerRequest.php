<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContainerRequest extends FormRequest
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
            'cliente' => 'required',
            'numero' => 'required|max:11|min:11',
            'tipo' => 'required|numeric',
            'status' => 'required',
            'categoria' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'cliente.required' => 'Campo cliente obrigatório',
            'numero.required' => 'Campo número container obrigatório',
            'numero.max' => 'Campo número container deve conter no máximo :max caracteres',
            'numero.min' => 'Campo número container deve conter no minimo :min caracteres',
            'tipo.required' => 'Campo tipo obrigatório',
            'tipo.numeric' => 'Campo tipo deve ser númerico',
            'status.required' => 'Campo status obrigatório',
            'categoria.required' => 'Campo categoria obrigatório'
        ];
    }
}
