<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodRequest extends FormRequest
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
            'chef' => 'required',
            'time' => 'required',
            'description' => 'required',
            'image' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'please enter name of food',
            'chef.required' => 'please enter chef of food',
            'time.required' => 'please enter time of food',
            'description.required' => 'please description name of food',

            'image.required' => 'please enter image of food',

        ];
    }
}
