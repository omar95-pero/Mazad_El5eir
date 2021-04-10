<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CharityRequest;
use App\Models\Charity;
use function Symfony\Component\String\u;
use Illuminate\Http\Request;
class CharityController extends Controller
{
   public function show(){
       $showCharities = Charity::orderBy('id','DESC')->get();
       return view('Admin.Admin.charities',compact('showCharities'))->with('i',0);
   }
   public function insert(){
       return view('Admin.Admin.create-charity');
   }
   public function store(Request $request){
       $data = $request->all();
       if ($request->image != '') {
           $data['image'] = store_file($request, 'image', "mazad");
       }
//       dd($data);
       Charity::create($data);
       toastr()->success('تم اضافة بيانات الجمعية بنجاح');
       return back();
   }
    public function edit( $id)
    {
        $charity = Charity::findOrFail($id);

        return view('Admin/Admin/edit-charity',compact('charity'));
    }
    public function update($id ,Request $request)
    {

        $row = charity::find($id);
        $newData = request()->all();
        if ($request->image != '') {
            $newData['image'] = store_file($request, 'image', "mazad");
        }
//        dd($newData );

        $row->update($newData);
        toastr()->success('تم تعديل البيانات بنجاح');
        return redirect('admin/charities/index');
    }
    public function destroy($id)
    {
        $row =Charity::find($id)->delete();
        toastr()->success('تم حذف الجمعية بنجاح');
        return redirect('admin/charities/index');
    }
}
