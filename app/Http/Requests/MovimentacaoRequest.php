<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovimentacaoRequest extends FormRequest
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
            'tipo_movimentacao' => 'required',
            'inicio' => 'required|date',
            'fim' => 'required|date',
            'container_id' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'tipo_movimentacao.required' => 'Campo tipo movimentação obrigatório',
            'inicio.required' => 'Campo início obrigatório',
            'inicio.date' => 'Campo início deve ser do tipo data',
            'fim.required' => 'Campo fim obrigatório',
            'fim.date' => 'Campo fim deve ser do tipo data',
            'container_id.required' => 'Campo tipo container obrigatório'
        ];
    }
}
