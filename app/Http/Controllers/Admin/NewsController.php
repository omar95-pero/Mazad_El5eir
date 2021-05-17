<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Auction;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::get();
        return view('Admin/Admin/news',compact('news'));
//        foreach ($news as $val){
//            $ext = pathinfo($val->image, PATHINFO_EXTENSION);
//            dd($ext);
//        }

    }
    public function create()
    {
        $news = News::get();
        return view('Admin/Admin/create-news');

    }
    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->image != '') {
            $data['image'] = store_file($request, 'image', "mazad");
        }
        News::create($data);
        toastr()->success('تم اضافة الخبر بنجاح');
        return back();

}
    public function edit( $id)
    {
        $find = News::findOrFail($id);

        return view('Admin/Admin/edit-news',compact('find'));
    }
    public function update($id ,Request $request)
    {


        $row = News::find($id);


        $newData = request()->all();
        if ($request->image != '') {
            delete_file($row->image);
            $newData['image'] = store_file($request, 'image', "mazad");

        }
//        dd($newData);
        $row->update($newData);
        toastr()->success('تم تعديل البيانات بنجاح');
        return redirect('admin/news/index');
    }



    public function destroy($id)
    {
        $row =News::find($id);
        $row->delete();
        toastr()->success('تم حذف الخبر بنجاح');
        return redirect('admin/news/index');
    }

}
