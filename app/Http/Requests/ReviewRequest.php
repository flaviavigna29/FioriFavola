<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
            'name' => 'required',
            'message' => 'required', 
            'body' => 'required | max:255',
            'gender' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'inserisci il tuo nome',
            'message.required' => 'inserisci una breve descrizione per la recensione',
            'body.required' => 'inserisci il tuo messaggio',
            'body.max' => 'il contenuto della recensione può contenere un massimo di 255 caratteri',
            'gender' => 'scegli fra uno dei due generi'
        ];
    }
}
