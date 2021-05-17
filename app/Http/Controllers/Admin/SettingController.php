<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
   public function index(){
       $settings = Setting::get();
       $i = 1;
       return view('Admin/Admin/index-settings', compact(['settings', 'i']));
   }
   public function edit($id){
       $settings = Setting::findOrFail($id);
       return view('Admin.Admin.create-settings',compact('settings'));
   }
   public function update(Request $request ,$id)
   {
       $settings = Setting::findOrFail($id);
       $newSetting = $request->all();

       if ($request->image != '') {
           $newSetting['image'] = store_file($request, 'image', "mazad");

       }

//       dd($newSetting);
       $settings->update($newSetting);
       return back();

   }
    public function ShowAdminsCheckDelete(Request $request){

        $ids = check_delete($request);
        $get=Setting::whereIn('id', $ids)->get();
        foreach ($get as $delete_){
            if ($delete_->image!=null){
                delete_file($delete_->image);
            }
        }
        $delete_=Setting::whereIn('id', $ids)->delete();
        return response('yes');
    }
}
