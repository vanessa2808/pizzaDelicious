<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FastaRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'recipe' => 'required',

            'chef' => 'required',

            'time' => 'required',

            'image' => 'required',
            ];

    }
    public function messages()
    {
        return [
            'name.required' => 'please, enter name',
            'description.required' => 'please, enter description',
            'price.required' => 'please, enter price',
            'recipe.required' => 'please, enter recipe',

            'chef.required' => 'please, enter chef',
            'time.required' => 'please, enter time',
            'image.required' => 'please, enter image',




        ];
    }
}
