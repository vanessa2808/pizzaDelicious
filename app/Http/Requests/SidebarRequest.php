<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SidebarRequest extends FormRequest
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
            'title'=> 'required',
            'image1' => 'required',
            'image2'=>'required',
            'image3' =>'required'
        ];
    }
    public function message() {
        return [
        'title.required' => 'please enter title',
        'image1.required' => 'please enter image',
            'image2.required' => 'please enter image',
            'image3.required' => 'please enter image',

        ];
    }
}
