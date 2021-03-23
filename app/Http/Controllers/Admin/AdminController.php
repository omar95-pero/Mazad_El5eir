<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\AdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Yoeunes\Toastr\Toastr;
use function Couchbase\basicDecoderV1;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $data = Admin::get();
            $i=1;
            return view('Admin/Admin/index',compact(['data','i']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

            return view('Admin/Admin/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request)
    {


            $new=new Admin();
            $new->email=$request->email;
            $new->password=Hash::make($request->password);
            $new->name=$request->name;
            $new->phone=$request->phone;
            if ($request->image != '') {
                $fileName = store_file($request,'image','admins');
                $new->image=$fileName;
            }
            $new->save();
            $notification=toastr()->success('تم الحفظ');
        return     redirect()->route('ShowAdmins.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

            if (admin()->user()->id == $id){
                return  view('Admin/profile');
            }else{
                $find = Admin::find($id);
                return  view('Admin/Admin/edit',compact(['find','id']));
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->status != 'profile'){
            $find = Admin::find($id);
            if ($find->email != $request->email){
                $valedator =Validator::make($request->all(),[
                    'email'=> [ 'unique:admins'],
                ]);
                if ($valedator->fails()) {
                    $notification=error_tostar("هذا البريد الإلكترونى موجود مسبقاً");
                    return back()->with($notification);
                }
            }

            $update=Admin::find($id);
            $update->phone=$request->phone;
            $update->email=$request->email;
            if (isset($request->password)){
                $update->password=Hash::make($request->password);
            }
            if ($request->image != '') {
                delete_file($update->image);
                $fileName = store_file($request,'image','admins');
                $update->image=$fileName;
            }
            $update->save();
        }else{
            $find = Admin::find($id);
            if ($find->email != $request->email){
                $valedator =Validator::make($request->all(),[
                    'email'=> [ 'unique:admins'],
                ]);
                if ($valedator->fails()) {
                    $notification=error_tostar("هذا البريد الإلكترونى موجود مسبقاً");
                    return back()->with($notification);
                }
            }

            $update=Admin::find($id);
            $update->name=$request->name;
            $update->phone=$request->phone;
            $update->email=$request->email;
            if (isset($request->password)){
                $update->password=Hash::make($request->password);
            }
            if ($request->image != '') {
                delete_file($update->image);
                $fileName = store_file($request,'image','admins');
                $update->image=$fileName;
            }
            $update->save();
        }
        $notification=edit_tostar('تم التعديل');

            if (admin()->user()->id == $id){
                return back()->with($notification);
            }else{
                return  redirect(aroute('ShowAdmins'))->with($notification);
            }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $find = Admin::find($id);
            delete_file($find->image);
            $find->delete();
            return response('yes');

    }//end fun
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function ShowAdminsCheckDelete(Request $request){

            $ids = check_delete($request);
            $get=Admin::whereIn('id', $ids)->get();
            foreach ($get as $delete_){
                if ($delete_->image!=null){
                    delete_file($delete_->image);
                }
            }
            $delete_=Admin::whereIn('id', $ids)->delete();
            return response('yes');
    }
}
