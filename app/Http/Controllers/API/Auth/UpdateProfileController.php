<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UpdateProfileController extends Controller
{
    public function update(Request $request ,$id){

        $user =User::findOrFail($id);
        $newData = request()->all();
        if ($request->image != '') {
            $newData['image'] = store_file($request, 'image', "mazad");
        }
        $validator = Validator::make($request->all(), [
            'name'        =>  ['string','max:255'],
            'address'     =>  ['string','max:300'],
            'email'       =>  ['email','max:300'],
            'image'       =>  ['image'],
            'phone_number'=>  ['max:20'],
        ]);
        if ($validator->fails()) {
            return response()->json(["message"=>$validator->errors() ,'status' => 404 ,'data' => null],200);
        }
//        die();
//       dd($newData);
        $validator = Validator::make($request->all(), ['email'  => ['unique:users']]);

        if ($validator->fails()) {
            return response()->json(["message"=>$validator->errors() ,'status' => 403 ,'data' => null],200);
        }

        $new = $user->update($newData);
        return response()->json(["message"=>"",'status' => 200 ,'data' => $user],200);
    }
}
