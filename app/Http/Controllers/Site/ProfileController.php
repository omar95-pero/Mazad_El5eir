<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function update(Request $request ,$id){
       $user =User::findOrFail($id);
       $newData = request()->all();
       if ($request->image != '') {
           $newData['image'] = store_file($request, 'image', "mazad");
       }
//       dd($newData);

       $user->update($newData);
//       dd($user->update($newData));
       toastr()->success('تم تعديل البيانات بنجاح');
       return back();
   }



}
