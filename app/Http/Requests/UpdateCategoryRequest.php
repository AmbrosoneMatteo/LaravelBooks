<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'name' => 'required|string|unique:categories,name|min:5|max:50',
        ];
    }
    public function messages(): array {
        return [
            'name.required' => 'Il nome per la categoria è richiesto',
            'name.string' => 'Il nome deve contenere delle lettere',
            'name.unique' => 'Il nome deve essere unico',
            'name.min' => 'Il nome deve contenere almeno 5 caratteri',
            'name.max' => 'Il nome deve contenere al massimo 50 caratteri',
        ];
    }
}
