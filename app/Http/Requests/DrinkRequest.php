<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DrinkRequest extends FormRequest
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



            'image' => 'required',




        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'please, enter name',
            'description.required' => 'please, enter description',
            'price.required' => 'please, enter price',
            'image.required' => 'please, enter image',




        ];
    }
}
