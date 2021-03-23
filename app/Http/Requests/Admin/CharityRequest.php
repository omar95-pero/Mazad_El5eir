<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CharityRequest extends FormRequest
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
        ' name'=>'required|max:100',
        'address'=>'required|max:200',
        'email'=>'required|email|max:150',
        'image'=>'required|image',
        'phone_number'=>'required|integer|max:20',
        ];
    }
//    public function messages()
//    {
//        return [
//            ' required'=>'This Field Is Required',
//            'max:100'=>'This Field Must Be less Than 100 Character',
//            'max:200'=>'This Field Must Be less Than 200 Character',
//            'max:150'=>'This Field Must Be less Than 150 Character',
//            'max:20'=>'This Field Must Be less Than 20 number',
//            'email'=>'This Field Must Be Email',
//            'image'=>'This Field Mus Be Image',
//            'integer'=>'This Field Must Be Numbers',
//        ];
//    }
}
