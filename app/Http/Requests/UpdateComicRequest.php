<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'description' => 'required|max:65535',
            'image' => 'required|max:65535',
            'price' => 'required|max:255',
            'series' => 'required|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'La compilazione del campo Title è obbligatoria.',
            'description.required' => 'La compilazione del campo Description è obbligatoria.',
            'image.required' => 'La compilazione del campo Image è obbligatoria.',
            'price.required' => 'La compilazione del campo Price è obbligatoria.',
            'series.required' => 'La compilazione del campo Series è obbligatoria.',
            'sale_date.required' => 'La compilazione del campo Sale Date è obbligatoria.',
            'type.required' => 'La compilazione del campo Type è obbligatoria.',
        ];
    }
}
