<?php

namespace App\Http\Controllers\API;

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
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(["message"=>$validator->errors() ,'status' => 404 ,'data' => null],200);
        }

        $validator = Validator::make($request->email, [
            'email'  => ['unique:users']
        ]);

        if ($validator->fails()) {
            return response()->json(["message"=>$validator->errors() ,'status' => 403 ,'data' => null],200);
        }



        $name = $request->name;
        $email    = $request->email;
        $password = $request->password;
        $user     = User::create(['name' => $name, 'email' => $email, 'password' => Hash::make($password)])->toJson(JSON_PRETTY_PRINT);;
        return $user->response()->json(["message"=>$validator->errors() ,'status' => 403 ,'data' => null],200);

//        return $this->ApiResponse();

    }
//    public function getAllUsers(){
//        $users = User::get()->toJson(JSON_PRETTY_PRINT);
//        return response($users, 200);
//    }

}
