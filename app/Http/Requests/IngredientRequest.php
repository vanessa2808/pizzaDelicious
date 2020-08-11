<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IngredientRequest extends FormRequest
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
            'ingredientTypeId' => 'not_in:0',

            'ingredientName' => 'required',





        ];
    }
    public function messages()
    {
        return [
            'recipeTypeId.not_in' => 'Vui lòng chọn loại sản phẩm',

            'ingredientName.required' => 'please, enter ingredientName',





        ];
    }
}
