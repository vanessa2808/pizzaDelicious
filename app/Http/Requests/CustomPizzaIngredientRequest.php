<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomPizzaIngredientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'customPizzaId' => 'not_in:0',

            'ingredientId' => 'not_in:0',





        ];
    }
    public function messages()
    {
        return [
            'customPizzaId.not_in' => ' please, enter customPizzaId',

            'ingredientId.not_in' => 'please, enter ingredientId',





        ];
    }
}
