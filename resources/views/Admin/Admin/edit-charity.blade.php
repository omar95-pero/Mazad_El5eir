@extends('layouts.Admin.index')

@section('title')
    <li class="m-nav__item">
        <a href="{{route('ShowCharities.index')}}" class="m-nav__link">
            <span class="m-nav__link-text">الجمعيات</span>
        </a>
    </li>
    <li class="m-nav__separator">-</li>
    <li class="m-nav__item">
        <a href="{{route('insert.charity')}}" class="m-nav__link">
            <span class="m-nav__link-text">اضافة جمعية جديد</span>
        </a>
    </li>
@endsection

@section('content')
    <div class="main_cotent">
        <div class="box" style="margin: 25px 0px;">


            <div class="box">

                <div class="box-header">
                    <h3 class="box-title"> تعديل جمعية  </h3>
                </div>
                <hr><br>
                <!-- /.box-header -->

                <form  action="{{url('admin/charity/update',$charity->id)}}"  method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="form-group col-sm-6">
                                                            <label for="title">اسم الجمعية :</label>
                            <input class="form-control" name="name" type="text" id="title" placeholder="اسم الجمعية..."  data-validation="required" value="{{$charity->name}}">
                        </div>
                        <div class="form-group col-sm-6">
                                                            <label for="slug">العنوان :</label>
                            <input class="form-control" name="address" type="text" id="slug" placeholder="عنوان الجمعية..."  data-validation="required" value="{{$charity->address}}" l>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                                                            <label for="body">البريد الالكتروني :</label>
                            <input class="form-control" name="text" type="email" id="slug" placeholder="البريد الالكتروني..."  data-validation="required" value="{{$charity->email}}"></input>
                        </div>
                        <div class="form-group col-sm-6">
                                                            <label for="body">رقم التليفون :</label>
                            <input class="form-control" name="phone_number" type="number" id="slug" placeholder="رقم التليفون..."  data-validation="required" value="{{$charity->phone_number}}"></input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                                                    <label for="image">الصوره</label>
                            <input type="file" name="image"  id="input-file-now-custom-1"   class="dropify" style="border-radius: 20px"
                                   data-default-file="" >
                        </div>
                    </div>
                    <input class="btn btn-primary" type="submit" value="تعديل">
                </form>



            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->



    </div>
    {{--    </div>--}}

@endsection
