<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'sign_up_name'=>'required',
            'sign_up_phone'=>'required',
            'sign_up_email'=>'required|email'
        ];
    }
    public function messages()
    {
        return [
            'required'=>'Không được để trống',
            'email'=>'Phải nhập email vào '
        ];
    }

}
