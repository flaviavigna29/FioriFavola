<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' => 'required',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/', 
            'category' => 'required',
            'img' => 'required',
            'description' => 'required | max:255', 
            'subtitle' => 'required | max:255',
            'body' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'inserisci il nome dell\'articolo',
            'price.required' => 'il prezzo è un campo obbligatorio',
            'price.regex' => 'il campo prezzo necessita di un punto e non la virgola',
            'category.required' => 'scegli fra una delle categorie',
            'img.required' => 'inserisci un\'immagine',
            'description.required' => 'inserisci una breve descrizione',
            'description.max' => 'la descrizione può contenere un massimo di 255 caratteri',
            'subtitle.required' => 'inserisci un sottotitolo',
            'subtitle.max' => 'il sottotitolo può contenere un massimo di 255 caratteri',
            'body.required' => 'inserisci il testo',
        ];
    }
}
