<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivroGenerosRequest extends FormRequest
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
            'livro_id' => ['required', 'integer'],
            'genero_id' => ['required', 'integer'],
        ];
    }

    //Mensagens de validação personalizadas
    public function messages() {
        
        return[
            'livro_id.required' => 'O campo livro é obrigatório',
            'livro_id.integer' => 'O campo livro deve ser um número inteiro',
            'genero_id.required' => 'O campo gênero é obrigatório',
            'genero_id.integer' => 'O campo gênero deve ser um número inteiro',
        ];

    }
}
