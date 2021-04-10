<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $data = About::get();
        $i = 1;
        return view('Admin/Admin/index-about-us', compact(['data', 'i']));
    }
    public function edit($id){
        $data = About::findOrFail($id);
        return view('Admin.Admin.edit-about-us',compact('data'));
    }
    public function update(Request $request ,$id)
    {
        $data = About::findOrFail($id);
        $newData = $request->all();

        if ($request->image != '') {
            $newData['image'] = store_file($request, 'image', "mazad");

        }

//       dd($newSetting);
        $data->update($newData);
        return redirect()->route('about');

    }
    public function ShowAdminsCheckDelete(Request $request){

        $ids = check_delete($request);
        $get=SAboutetting::whereIn('id', $ids)->get();
        foreach ($get as $delete_){
            if ($delete_->image!=null){
                delete_file($delete_->image);
            }
        }
        $delete_=About::whereIn('id', $ids)->delete();
        return response('yes');
    }

}
