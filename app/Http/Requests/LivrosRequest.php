<?php

namespace App\Http\Requests;

use App\Enums\StatusLivro;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Foundation\Http\FormRequest;

class LivrosRequest extends FormRequest
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
            'nome' => ['required', 'max:255'],
            'autor' => ['required', 'max:255'],
            'situacao' => ['required', new Enum(StatusLivro::class)],
            'generos' => ['required', 'array'],
            'generos.*' => ['exists:generos,id']
        ];
    }

    //Mensagens de validação personalizadas
    public function messages()
    {
        
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'nome.max' => 'O campo nome deve ter no máximo 255 caracteres',
            'autor.required' => 'O campo autor é obrigatório',
            'autor.max' => 'O campo autor deve ter no máximo 255 caracteres',
            'situacao.required' => 'O campo situação é obrigatório',
            'situacao.in' => 'O campo situação deve ser disponível ou emprestado',
            'generos.required' => 'Selecione pelo menos um gênero.',
            'generos.*.exists' => 'Um ou mais gêneros selecionados são inválidos.'
        ];

    }
}
