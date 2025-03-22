<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email']
        ];
    }

    // Defino as mensagens personalizadas
    public function messages() {
        return[
            'name.required' => 'O campo nome deve ser preenchido',
            'name.max' => 'O campo nome deve ter no máximo 255 caracteres',
            'email.required' => 'O campo email deve ser preenchido',
            'email.email' => 'O campo email deve ser válido'
        ];        
    }
}
