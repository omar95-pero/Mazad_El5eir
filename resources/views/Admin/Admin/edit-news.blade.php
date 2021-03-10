@extends('layouts.Admin.index')

@section('title')
    <li class="m-nav__item">
        <a href="{{route('ShowAdmins.index')}}" class="m-nav__link">
            <span class="m-nav__link-text">الاخبار</span>
        </a>
    </li>
    <li class="m-nav__separator">-</li>
    <li class="m-nav__item">
        <a href="{{route('ShowAdmins.create')}}" class="m-nav__link">
            <span class="m-nav__link-text">اضافة مشرف جديد</span>
        </a>
    </li>

@endsection


@section('content')
    <div class="main_cotent">
        <div class="box" style="margin: 25px 0px;">


            <div class="box">

                <div class="box-header">
                    <h3 class="box-title"> تعديل الخبر </h3>
                </div>
                <hr><br>
                <!-- /.box-header -->

                <form method="POST" action="{{route('update.news',$find->id)}}" accept-charset="UTF-8" enctype="multipart/form-data">
                    {{--                    <input name="_token" type="hidden" value="sSfedSAmdwxno23r3PS9EJkR1kgoFfXukhDOHJ9o">--}}
{{--                    @method('put')--}}
                    @csrf

                    <div class="row">

                        <div class="form-group col-sm-6">
                            <label for="title">عنوان الخبر:</label>
                            <input class="form-control" name="title" type="text" id="title" placeholder="العنوان..."  data-validation="required" value="{{$find->title}}" >
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="slug">نبذة عن الخبر:</label>
                            <input class="form-control" name="slug" type="text" id="slug" placeholder="نبذة عن الموضوع..."  data-validation="required" value="{{$find->slug}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="body">الموضوع:</label>
                            <textarea class="form-control" name="body" type="text" id="slug" placeholder="الموضوع..."  data-validation="required" >{{$find->body}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">الصوره</label>
                            <input type="file" name="image"  id="input-file-now-custom-1"   class="dropify" style="border-radius: 20px"
                                   value="{{$find->image}}" >
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
