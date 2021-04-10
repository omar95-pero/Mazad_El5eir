<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function doLogin(Request $request)
    {
     // validate the info, create rules for the inputs
        $rules = [
            'email'    => 'required|email', // make sure the email is an actual email
            'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        ];

     // run the validation rules on the inputs from the form
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);

     // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            Redirect::to('login');
            return response()->json(["message"=>$validator->errors() ,'status' => 404 ,'data' => null],200);

                   } else {

            // create our user data for the authentication
            $userdata = [
                'email'     => $request->get('email'),
                'password'  => $request->get('password')
            ];
//             $userdata['password'] = Hash::make( $request->get('password'));
            // attempt to do the login
            if (Auth::attempt($userdata)) {
                // validation successful!
                // redirect them to the secure section or whatever
                // return Redirect::to('secure');
                // for now we'll just echo success (even though echoing in a controller is bad)
                return response()->json(["message"=>"" ,'status' => 200 ,'data' => \auth()->user()],200);

            } else {

                // validation not successful, send back to form
                 Redirect::to('login');
                return response()->json(["message"=>"" ,'status' => 404 ,'data' => null],200);

            }

        }
    }
    public function doLogout()
    {
        Auth::logout(); // log the user out of our application
         Redirect::to('login'); // redirect the user to the login screen
        return response()->json(["message"=>"" ,'status' => 200 ,'data' =>'you are logout'],200);

    }
}
