<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChefRequest extends FormRequest
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
            'position' => 'required',



            'image' => 'required',




        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'please, enter name',
            'description.required' => 'please, enter description',
            'position.required' => 'please, enter position',
            'image.required' => 'please, enter image',




        ];
    }
}
