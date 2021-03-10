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
        $newData = request([
            'title' => request('title'),
            'slug' => request('slug'),
            'body' => request('body'),
            'image' => request('image'),
        ]);

        $row->update($newData);
        toastr()->success('تم تعديل البيانات بنجاح');
        return redirect('admin/news/index');
    }
    public function destroy($id)
    {
        $row =News::find($id)->delete();
        toastr()->success('تم حذف الخبر بنجاح');
        return redirect('admin/news/index');
    }

}
