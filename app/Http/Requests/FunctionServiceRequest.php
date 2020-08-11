<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FunctionServiceRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required',



            'image' => 'required',




        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'please, enter title',
            'description.required' => 'please, enter description',
            'image.required' => 'please, enter image',




        ];
    }
}
