<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GenerosRequest extends FormRequest
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
            'nome' => ['required', 'max:255']
        ];
    }

    //Mensagens de validação personalizadas
    public function messages()
    {
        
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'nome.max' => 'O campo nome deve ter no máximo 255 caracteres'
        ];
    }
}
