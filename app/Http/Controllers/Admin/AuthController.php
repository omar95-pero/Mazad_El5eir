<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deals;
use App\Models\Pay;
use App\Models\Products;
use App\Models\Sale;
use App\Models\SaleRecet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request){
        $valedator =Validator::make($request->all(),[
            'email'=> [ 'unique:admins'],
        ]);
        if ($valedator->fails()){
            $rememberme = request('rememberme') == 1?true:false;
            if (admin()->attempt(['email' => request('email'), 'password' => request('password')], $rememberme)) {
	            response()->json(['status'=>'yes']);
            return   redirect('admin');

            } else {
                return response()->json(['status'=>'password']);
            }
        }
        else{
            return
             response()->json(['status'=>'email']);
        }
    }//end fun
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(){
        admin()->logout();
        $notification=array(
            'message' => 'تم تسجيل الخروج',
            'alert-type' => 'info'
        );
        return redirect('admin/login')->with($notification);
    }//end fun
    function home() {


        return view('Admin/home');
    }
}
