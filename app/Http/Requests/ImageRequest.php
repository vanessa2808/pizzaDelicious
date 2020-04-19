<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
{
    public function rules()
    {
        return [
            'image1' => 'required',
            'image2' => 'required',
            'image3' => 'required',

            'image4' => 'required',

            'image5' => 'required',


        ];
    }
    public function messages()
    {
        return [
            'image1.required' => 'please, enter image1',
            'image2.required' => 'please, enter image2',

            'image3.required' => 'please, enter image3',

            'image4.required' => 'please, enter image4',

            'image5.required' => 'please, enter image5',

        ];
    }
}
