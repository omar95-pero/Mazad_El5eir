<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Last_News;

class LastNewsController extends Controller
{
    public function index()
    {
        $news = Last_News::get();
        return view('Admin/Admin/index-last-news',compact('news'));
//        foreach ($news as $val){
//            $ext = pathinfo($val->image, PATHINFO_EXTENSION);
//            dd($ext);
//        }

    }
    public function create()
    {
        $news = Last_News::get();
        return view('Admin/Admin/create-last-news');

    }
    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->image != '') {
            $data['image'] = store_file($request, 'image', "mazad");
        }
        Last_News::create($data);
        toastr()->success('تم اضافة الخبر بنجاح');
        return back();

    }
    public function edit( $id)
    {
        $find = Last_News::findOrFail($id);

        return view('Admin/Admin/edit-last-news',compact('find'));
    }
    public function update($id ,Request $request)
    {


        $row = Last_News::find($id);


        $newData = request()->all();
        if ($request->image != '') {
            delete_file($row->image);
            $newData['image'] = store_file($request, 'image', "mazad");

        }
//        dd($newData);
        $row->update($newData);
        toastr()->success('تم تعديل البيانات بنجاح');
        return redirect('admin/last_news/index');
    }



    public function destroy($id)
    {
        $row =Last_News::find($id)->delete();
        toastr()->success('تم حذف الخبر بنجاح');
        return redirect('admin/last_news/index');
    }
}
