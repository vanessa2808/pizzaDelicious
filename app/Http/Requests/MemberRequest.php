<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            'role_id' => 1,
            'avatar' =>'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required'
        ];
    }
    public function messages(){
        return [
            'name.required' => 'please enter name',
            'avatar.required' => 'please enter avatar',
            'email.required' => 'please enter email',
            'phone.required' => 'please enter phone',
            'password.required' => 'please enter password',

        ];
    }
}
