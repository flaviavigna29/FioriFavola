<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'surname' => 'required',
            'email' => 'required',
            'message' => 'required | max:255',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'inserisci il tuo nome',
            'surname.required' => 'inserisci il tuo cognome',
            'email.required' => 'inserisci la tua mail',
            'message.required' => 'inserisci il tuo messaggio',
            'message.max' => 'hai un massimo di 255 caratteri',
        ];
    }
}