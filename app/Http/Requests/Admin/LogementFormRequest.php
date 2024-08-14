<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LogementFormRequest extends FormRequest
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
            'titre' => ['required','min:8'],
            'description' => ['required','min:8'],
            'chambre'=> ['required','integer','min:0'],
            'piece'=> ['required','integer','min:1'],
            'etage'=> ['required','integer','min:0'],
            'loyer'=> ['required','integer','min:0'],
            'adresse'=> ['required','min:8'],
            'statut'=> ['required','boolean'],
            'options'=>['array', 'exists:options,id','required']
        ];
    }
}
