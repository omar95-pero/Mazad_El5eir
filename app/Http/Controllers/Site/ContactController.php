<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactRequest;
use App\Models\ContactUs;
use App\Http\Traits\SendEmail;

class ContactController extends Controller
{
    use SendEmail;


    public function getContact()
    {
        return view('site.contact');
    }
    public function saveContact(ContactRequest $request)
    {
        $contact = new ContactUs;

        // if (auth()->user()) {
        //     $contact->email = auth()->user('email');
        //     $contact->name = auth()->user('name');
        // } else {
        //     $contact->email = $request->email;
        //     $contact->name = $request->name;
        // }
        $contact->email = $request->email;
        $contact->name = $request->name;
        $contact->phone_number = $request->phone_number;
        $contact->message = $request->message;
        $contact->save();

        return back()->with('success', 'Thank you for contact us!');
    }
}
