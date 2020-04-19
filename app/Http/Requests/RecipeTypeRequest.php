<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecipeTypeRequest extends FormRequest
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
            'types' => 'required',
            'ingredients' => 'required',





        ];
    }
    public function messages()
    {
        return [
            'types.required' => 'please, enter types',
            'ingredients.required' => 'please, enter ingredients',





        ];
    }
}
