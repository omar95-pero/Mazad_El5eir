<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class AuctionRequest extends FormRequest
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
            'address' => 'required|max:300',
            'start_price' => 'required|number',
            'target_price' => 'required|number',
            'start_at' => 'required',
            'end_at' => 'required',
            'image' => 'image|required',
            'imag' => 'image|required',
            'img' => 'image|required',
            'imge' => 'image|required',
            'item_detailes' =>'string|required',
            'delivery_details' =>'string|required',

        ];
    }
    public function messages()
    {
        return [
            'required' => 'يجب عليك ادخال هذا الحقل',
            'max:300' => 'هذا الحقل لايجب ان يزيد عن 300 حرف',
            'number' => 'هذا الحقل يجب ان يكون رقم',
            'image' => 'هذا الحقل يجب ان يكون صورة',
            'string' => 'هذا الحقل يجب ان يكون حروف',


        ];
    }
}
