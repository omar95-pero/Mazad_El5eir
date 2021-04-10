@extends('layouts.Admin.index')


{{--@section('title')--}}
{{--    <li class="m-nav__item">--}}
{{--        <a href="{{url(' admin/news ')}}" class="m-nav__link">--}}
{{--            <span class="m-nav__link-text">الاخبار</span>--}}
{{--        </a>--}}
{{--    </li>--}}
{{--    <li class="m-nav__separator">-</li>--}}
{{--    <li class="m-nav__item">--}}
{{--        <a href="{{url(' admin/news')}}" class="m-nav__link">--}}
{{--            <span class="m-nav__link-text">اضافة خبر جديد</span>--}}
{{--        </a>--}}
{{--    </li>--}}
{{--@endsection--}}

@section('content')
    <div class="main_cotent">
        <div class="box" style="margin: 25px 0px;">


            <div class="box">

                <div class="box-header">
                    <h3 class="box-title"> اضافة خبر جديد </h3>
                </div>
                <hr><br>
                <!-- /.box-header -->

                <form method="POST" action="{{route('update.settings',$settings->id)}}" accept-charset="UTF-8" enctype="multipart/form-data">
                    {{--                    <input name="_token" type="hidden" value="sSfedSAmdwxno23r3PS9EJkR1kgoFfXukhDOHJ9o">--}}
                    @csrf
                    <div class="row">

                        <div class="form-group col-sm-6">
                            <label for="body">الموضوع:</label>
                            <textarea rows="8" class="form-control" name="body" type="text" id="title" placeholder="الموضوع..."  data-validation=" required"> {{$settings->body}}</textarea>
                        </div>
                        <div class="form-group  col-sm-6" >
                            <label for="image">الصوره</label>
                            <input type="file" name="image"  id="input-file-now-custom-1"   class="dropify" style="border-radius: 20px" data-default-file="" value="{{$settings->image}}" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="google_play">رابط التطبيق علي Google Play:</label>
                            <input class="form-control" name="google_play" type="url" id="slug" placeholder="رابط التطبيق علي Google Play..."  data-validation="required" value="{{$settings->google_play}}">
                        </div>
                    <div class="form-group col-sm-6">
                        <label for="app_store">رابط التطبيق علي App Store:</label>
                        <input class="form-control" name="app_store" type="url" id="slug" placeholder="رابط التطبيق علي App Store..."  data-validation="required" value="{{$settings->app_store}}">
                    </div>
                </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="twitter">رابط Twitter:</label>
                            <input class="form-control" name="twitter" type="url" id="slug" placeholder="رابط Twitter:..."  data-validation="required" value="{{$settings->twitter}}">
                        </div>

                        <div class="form-group col-sm-6">
                         <label for="instagram">رابط Instagram:</label>
                            <input class="form-control" name="instagram" type="url" id="slug" placeholder="رابط Instagram..."  data-validation="required" value="{{$settings->instagram}}">
                        </div>
                       </div>
                    <div class="row">
                <div class="form-group col-sm-6">
                    <label for="google_plus">رابط Google Plus:</label>
                    <input class="form-control" name="google_plus" type="url" id="slug" placeholder="رابط Google Plus..."  data-validation="required" value="{{$settings->google_plus}}">
                </div>
                <div class="form-group col-sm-6">
                    <label for="facebook">رابط FaceBook:</label>
                    <input class="form-control" name="facebook" type="url" id="slug" placeholder="رابط FaceBook..."  data-validation="required" value="{{$settings->facebook}}">
                </div>
            </div>




                    <input class="btn btn-primary" type="submit" value="إضافة">
                </form>


            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->



    </div>
    {{--    </div>--}}

@endsection
