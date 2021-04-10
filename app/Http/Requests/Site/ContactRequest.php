<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * @var mixed
     */
    private $email;
    /**
     * @var mixed
     */
    private $name;
    /**
     * @var mixed
     */
    private $phone_number;
    /**
     * @var mixed
     */
    private $message;

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
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|recaptcha',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'هذا الحقل مطلوب ادخاله',
            'email' => 'هذا الايميل خاطئ',
            'g-recaptcha-response.recaptcha' => 'Captcha verification failed',
            'g-recaptcha-response.required' => 'Please complete the captcha'

        ];
    }
}
