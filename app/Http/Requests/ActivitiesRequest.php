<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivitiesRequest extends FormRequest
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
            'image' => 'required',
            'title' => 'required',
            'description' => 'required',


        ];
    }
    public function messages()
    {
        return [
            'image.required' => 'please, enter image',
            'title.required' => 'please, enter title',
            'description.required' => 'please, enter title',


        ];
    }
}
