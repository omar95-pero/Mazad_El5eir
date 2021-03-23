<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    public function show()
    {
        $data = User::all();
        $i = 1;
        return view('Admin/Admin/index-users', compact(['data', 'i']));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Admin/Admin/create-user');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request)
    {


        $new=new User();
        $new->email=$request->email;
        $new->password=Hash::make($request->password);
        $new->name=$request->name;
        $new->phone_number=$request->phone_number;
        if ($request->image != '') {
            $fileName = store_file($request,'image','admins');
            $new->image=$fileName;
        }
        $new->save();
        $notification=toastr()->success('تم الحفظ');
        return     redirect()->route('UsersIndex');
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
            $find = User::findOrFail($id);
            return  view('Admin/Admin/edit-user',compact(['find','id']));
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
            $find = User::findOrFail($id);
            if ($find->email != $request->email){
                $valedator =Validator::make($request->all(),[
                    'email'=> [ 'unique:admins'],
                ]);
                if ($valedator->fails()) {
                    $notification=error_tostar("هذا البريد الإلكترونى موجود مسبقاً");
                    return back()->with($notification);
                }
            }

            $update=User::find($id);
            $update->phone_number=$request->phone_number;
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
            $find = User::find($id);
            if ($find->email != $request->email){
                $valedator =Validator::make($request->all(),[
                    'email'=> [ 'unique:admins'],
                ]);
                if ($valedator->fails()) {
                    $notification=error_tostar("هذا البريد الإلكترونى موجود مسبقاً");
                    return back()->with($notification);
                }
            }

            $update=User::find($id);
            $update->name=$request->name;
            $update->phone_number=$request->phone_number;
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
            return  redirect(route('UsersIndex'))->with($notification);
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
        $find = User::findOrFail($id);
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
        $get=User::whereIn('id', $ids)->get();
        foreach ($get as $delete_){
            if ($delete_->image!=null){
                delete_file($delete_->image);
            }
        }
        $delete_=User::whereIn('id', $ids)->delete();
        return response('yes');
    }
}
