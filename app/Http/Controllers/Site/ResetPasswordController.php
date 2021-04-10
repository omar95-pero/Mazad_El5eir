<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Traits\SendEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    use SendEmail;
    public function enterYourEmail(){
        return view('auth/reset-password');
    }


//    ----------

    public function sendVerificationCode(Request $request ){
// dd($request->email);
       $email = $request->email;
        $title = 'كود التحقيق :';
        $text = '5656098';
        $user = User::where('email',$email)->get();
//        return $user;
//     dd($user);

     $this->send_EmailFun($email,$text,$title);

        return view('auth/verification-code',compact('user'));


    }
    public function verificated(Request $request,$id)
    {

        $code = $request->code;
        if ($code == '5656098') {
            $user = User::findOrFail($id);
            return view('auth/new-password',compact('user'));
        }else{
            toastr()->error('الكود الذي ادخلته غير صحيح');
            return back();
        }
    }
    public function reset(Request $request ,$id){
        $user = User::findOrFail($id);
        $newData =$request->all();
        $newData['password'] = Hash::make($request->password);
//        dd($newPassword);
        $user->update($newData);
        toastr()->success('تم تغيير كلمة السر بنجاح');
        return redirect()->route('login');

    }

}
