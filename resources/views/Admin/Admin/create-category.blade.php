@extends('layouts.Admin.index')


@section('title')
    <li class="m-nav__item">
        <a href="{{route('ShowCategories.index')}}" class="m-nav__link">
            <span class="m-nav__link-text">الاقسام</span>
        </a>
    </li>
    <li class="m-nav__separator">-</li>
    <li class="m-nav__item">
                <a href="{{route('insert.category')}}" class="m-nav__link">
        <span class="m-nav__link-text">اضافة قسم جديدة</span>
        </a>
    </li>
@endsection

@section('content')
    <div class="main_cotent">
        <div class="box" style="margin: 25px 0px;">


            <div class="box">

                <div class="box-header">
                    <h3 class="box-title"> اضافة قسم جديد </h3>
                </div>
                <hr><br>
                <!-- /.box-header -->

                <form  action="{{route('store.category')}}"  method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                            <div class="form-group col-sm-12">
{{--                                <label for="title">اسم الجمعية :</label>--}}
                                <input class="form-control" name="title" type="text" id="title" placeholder="اسم القسم..."  data-validation="required">
                            </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-sm-12">
{{--                        <label for="image">الصوره</label>--}}
                        <input type="file" name="icon"  id="input-file-now-custom-1"   class="dropify" style="border-radius: 20px"
                               data-default-file="" >
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
