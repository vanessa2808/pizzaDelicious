<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeaderRequest extends FormRequest
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
            'image1' => 'required',
            'title1_1' => 'required',
            'title1_2'=>'required',
            'title1_3'=>'required',
            'image2' => 'required',
            'title2_1' => 'required',
            'title2_2'=>'required',
            'title2_3'=>'required',
            'image3' => 'required',
            'title3_1' => 'required',
            'title3_2'=>'required',
            'title3_3'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'image1.required' => 'please, enter image',
          'title1_1.required' => 'please, enter title',
          'title1_2.required' => 'please, enter title',
          'title1_3.required' => 'please, enter title',

            'image2.required' => 'please, enter image',
            'title2_1.required' => 'please, enter title',
            'title2_2.required' => 'please, enter title',
            'title2_3.required' => 'please, enter title',

            'image3.required' => 'please, enter image',
            'title3_1.required' => 'please, enter title',
            'title3_2.required' => 'please, enter title',
            'title3_3.required' => 'please, enter title',

        ];
    }
}
