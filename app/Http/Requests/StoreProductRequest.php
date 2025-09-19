<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => ['required', 'max:100', 'string'],
            'description' => ['nullable', 'string'],
            'price' => ['required', 'decimal:0,8'],
            'stock' => ['required', 'integer'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il Nome del prodotto é obbligatorio',
            'name.max' => 'Hai inserito troppi caratteri',
            'stock.integer' => 'Devi inserire un numero intero',
            'stock.required' => 'Lo Stock del prodotto é obbligatorio',
            'price.required' => 'Il Prezzo del prodotto é obbligatorio',
        ];
    }
}
