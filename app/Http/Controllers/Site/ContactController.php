<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactRequest;
use App\Models\ContactUs;
use App\Models\Setting;
use App\Http\Traits\SendEmail;
use function Couchbase\defaultDecoder;


class ContactController extends Controller
{
    use SendEmail;


    public function getContact()
    {
        $data = Setting::first();
        return view('site.contact',compact('data'));
    }
    public function saveContact(ContactRequest $request)
    {
        $contact = new ContactUs;

//        $contact = [];
            $contact->email = $request->email;
            $contact->name = $request->name;
            $contact->phone_number = $request->phone_number;
            $contact->message = $request->message;
            $contact->capcha = config('services.recaptcha.key');
        if($contact['capcha'] != null) {
            $contact->save();
            toastr()->success('تم إرسال الرسالة بنجاح');
            return back();

        }else{
            toastr()->error('يجب عليك تأكيد Recapcha');
            return back();
        }
    }
}
