<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioLivrosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => ['required'],
            'livro_id' => ['required'],
            'data_emprestimo' => ['required', 'date'],
            'data_devolucao' => ['required', 'date'],
            'situacao' => ['required']
        ];
    }

    // Define as mensagens personalizadas
    public function messages()
    {
        return[
            'user_id.required' => 'O usuário deve ser informado',
            'livro_id.required' => 'O livro deve ser informado',
            'data_emprestimo.required' => 'Data de empréstimo deve ser informado',
            'data_emprestimo.required' => 'Data de devolução deve ser informado',
            'situacao.required' => 'A situação deve ser informada',
        ];
    }

}
