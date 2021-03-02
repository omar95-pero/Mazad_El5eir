<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactRequest;
use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactController extends Controller
{
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
        \Mail::send(
            'site/contact-email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone_number' => $request->get('phone_number'),
                'user_message' => $request->get('message'),
            ),
            function ($message) use ($request) {
                $message->from($request->email);
                $message->to('omarpero85@gmail.com');
            }
        );

        return back()->with('success', 'Thank you for contact us!');
    }
}
