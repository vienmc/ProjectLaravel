<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductValidate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product_name'=>'required|email',
            'category_id'=>'required',
            'brand_id'=>'required',
            'product_desc'=>'required',
            'product_content'=>'required',
            'product_price'=>'required',
            'product_image'=>'url',
        ];
    }
}
