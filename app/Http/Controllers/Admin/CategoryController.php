<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(){
        $showCategories = Category::orderBy('id','DESC')->get();
        return view('Admin.Admin.categories',compact('showCategories'))->with('i',0);
    }
    public function insert(){
        return view('Admin.Admin.create-category');
    }
    public function store(Request $request){
        $data = $request->all();
        if ($request->image != '') {
            $data['image'] = store_file($request, 'image', "mazad");
        }
//       dd($data);
        Category::create($data);
        toastr()->success('تم اضافة بيانات القسم بنجاح');
        return back();
    }
    public function edit( $id)
    {
        $category = Category::findOrFail($id);

        return view('Admin/Admin/edit-category',compact('category'));
    }
    public function update($id ,Request $request)
    {

        $row = Category::find($id);
        $newData = request()->all();
        if ($request->image != '') {
            $newData['image'] = store_file($request, 'image', "mazad");
        }
//        dd($newData );

        $row->update($newData);
        toastr()->success('تم تعديل البيانات بنجاح');
        return redirect('admin/categories/index');
    }
    public function destroy($id)
    {
        $row =Category::find($id)->delete();
        toastr()->success('تم حذف القسم بنجاح');
        return redirect('admin/categories/index');
    }
}
