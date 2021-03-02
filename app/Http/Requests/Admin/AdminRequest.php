<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'name'=>'require',
            'email'=>'require|unique',
            'password'=>'require|password|min:8',
        ];
    }
    public function messages()
    {
        return [
            'require'=>'This field is required ',
            'unique'=>'This Email has been Register before',
            'min8'=>'This Field must more than 8 characters',
        ];
    }
}
