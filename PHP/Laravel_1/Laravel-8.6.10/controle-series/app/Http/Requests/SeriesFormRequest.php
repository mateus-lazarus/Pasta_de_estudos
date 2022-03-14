<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nomeSerie' => 'required|min:3|max:35'
        ];
    }

    /**
     * Define as mensagens de erro das regras definidas
     */
    public function messages()
    {
        return [
            'nomeSerie.required' => "O campo \":attribute\" é obrigatório.",
            'nomeSerie.min' => "O campo \":attribute\" precisa de, ao menos, 3 caracteres",
            'nomeSerie.max' => "A quantidade limite de caracteres no campo \":attribute\" foi excedida"
        ];
    }
}
