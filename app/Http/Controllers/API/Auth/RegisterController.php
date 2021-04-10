<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $rules = [
            'name'     =>  ['required', 'string', 'max:255'],
            'email'    =>  ['required', 'string', 'email', 'max:255'],
            'password' =>  ['required', 'string', 'min:8'],
        ];

//        only('name', 'email','password');
        $validator = Validator::make($request->all(), [
                'name'     =>  ['required', 'string', 'max:255'],
                'email'    =>  ['required', 'string', 'email', 'max:255'],
                'password' =>  ['required', 'string', 'min:8']]);

        $validator = Validator::make($request->all(), ['email'  => ['unique:users']]);

        if ($validator->fails()) {
            return response()->json(["message"=>$validator->errors() ,'status' => 403 ,'data' => null],200);
        }
        if ($validator->fails()) {
            return response()->json(["message"=>$validator->errors() ,'status' => 404 ,'data' => null],200);
        }else {


            $name = $request->name;
            $email = $request->email;
            $password = $request->password;

//        dd($name);
            $user = User::create(['name' => $name, 'email' => $email, 'password' => Hash::make($password)])->toJson(JSON_PRETTY_PRINT);;
            return response()->json(["message" => "", 'status' => 200, 'data' => $user], 200);

        }
    }
//        public function getAllUsers(){
//            $users = User::get()->toJson(JSON_PRETTY_PRINT);
//            foreach ($users as $key) {
//                return response()->json(["message" => "", 'status' => 200, 'data' => $key], 200);
//            }
//        }

}
