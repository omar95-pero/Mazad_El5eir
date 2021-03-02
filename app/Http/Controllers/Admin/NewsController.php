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
}
