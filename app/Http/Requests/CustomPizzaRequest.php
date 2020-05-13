<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomPizzaRequest extends FormRequest
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

            'userId' => 'not_in:0',

            'approved' => 'required',





        ];
    }
    public function messages()
    {
        return [
            'userId.not_in' => 'Please, receive the userid',

            'approved.required' => 'please, enter approved',





        ];
    }
}
