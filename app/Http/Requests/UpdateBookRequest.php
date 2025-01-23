<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:10|max:500',
            'pages' => 'required|integer|min:10000',
            'author_id' => 'required|integer|min:1',
            'category_id' => 'required|integer|min:1',
        ];
    }

    public function messages(): array {
        return [
            'title.required' => 'il titolo è richiesto',
            'title.min' => 'il titolo deve contenere almeno 3 caratteri',
            'title.max' => 'il titolo deve contenere al massimo 50 caratteri',
            'description.required' => 'la descrizione è richiesta',
            'description.min' => 'La descrizione deve contenere almeno 5 caratteri',
            'description.max' => 'La descrizione deve contenere al massimo 500 caratteri',
            'pages.required' => 'Libri senza pagine non sono ammessi',
            'pages.min' => 'Libri senza pagine non sono ammessi',
            'pages.max' => 'Seriamente?',
            'author_id.required' => 'Il libro deve avere un autore',
            'author_id.integer' => "L artista non esiste",
            'author_id.min' => 'L artista non esiste',
            'category_id.required' => 'Il libro deve essere categorizzato',
            'category_id.integer' => 'L libro deve essere categorizzato',
            'category_id.min' => 'L libro deve essere categorizzato',
        ];
    }
}
