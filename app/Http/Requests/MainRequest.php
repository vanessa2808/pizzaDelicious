<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainRequest extends FormRequest
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
            'description' =>'required',
            'image1' => 'required',
            'image2' => 'required',
            'image3' => 'required'
        ];
    }
    public function messages(){
        return [
          'title.required' => 'please enter title',
          'description.required' => 'please enter description',
           'image1.required' => 'please enter image',
            'image2.required' => 'please enter image',
           'image3.required' => 'please enter image',

        ];
    }
}
