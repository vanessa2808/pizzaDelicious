<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BakeryTypeRequest extends FormRequest
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





        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'please, enter name',





        ];
    }
}
