<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecipeRequest extends FormRequest
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
            'recipeTypeId' => 'not_in:0',

            'nameOfRecipes' => 'required',
            'decription' => 'required',





        ];
    }
    public function messages()
    {
        return [
            'recipeTypeId.not_in' => 'Vui lòng chọn loại sản phẩm',

            'nameOfRecipes.required' => 'please, enter nameOfRecipes',
            'decription.required' => 'please, enter decription',





        ];
    }
}
