<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Traits\SendEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    use SendEmail;
    public function send_Email(){

        $this->send_EmailFun();
        echo 'تم ارسال الايميل بنجاح';
    }//end fun
}
