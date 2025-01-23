<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAuthorRequest extends FormRequest
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
            'name' => 'required|string|max:100|min:2',
            'birthday' => 'date|format:Y-m-d',
        ];
    }
    public function messages(): array {
        return [
            'name.required' => 'un nome è richiesto',
            'name.string' => 'nome deve essere una stringa',
            'name.max' => 'nome deve contenere al massimo 100 caratteri',
            'name.min' => 'nome deve contenere minimo 2 caratteri',
            'birthday.date' => 'la data di nascita deve essere una data',
            'birthday.format' => 'la data di nascita non è formattata correttamente',
        ];
    }
}
