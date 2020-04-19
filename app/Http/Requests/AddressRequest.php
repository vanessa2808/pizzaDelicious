<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            'phone' => 'required',
            'address' => 'required',
            'status' => 'required',
            'email' => 'required',

            'detail1' => 'required',

            'detail2' => 'required',

            'time' => 'required',
            'website' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'phone.required' => 'please, enter phone',
            'address.required' => 'please, enter address',
            'status.required' => 'please, enter status',
            'email.required' => 'please, enter email',
            'detail1.required' => 'please, enter detail1',
            'detail2.required' => 'please, enter detail2',
            'time.required' => 'please, enter time',
            'website.required' => 'please, enter website',



        ];
    }
}
