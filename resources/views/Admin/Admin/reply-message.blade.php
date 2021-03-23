@extends('layouts.Admin.index')

{{--@section('title')--}}
{{--    <li class="m-nav__item">--}}
{{--        <a href="{{route('ShowAdmins.index')}}" class="m-nav__link">--}}
{{--            <span class="m-nav__link-text">المستخدمين</span>--}}
{{--        </a>--}}
{{--    </li>--}}
{{--    <li class="m-nav__separator">-</li>--}}
{{--    <li class="m-nav__item">--}}
{{--        <a href="{{route('ShowAdmins.create')}}" class="m-nav__link">--}}
{{--            <span class="m-nav__link-text">اضافة مستخدم جديد</span>--}}
{{--        </a>--}}
{{--    </li>--}}
{{--@endsection--}}

@section('content')
    <div class="main_cotent">
        <div class="box" style="margin: 25px 0px;">


            <div class="box">

                <hr><br>
                <!-- /.box-header -->
                <form method="POST" action="{{route('ReplyMessage',$find->id)}}" accept-charset="UTF-8" >
                    {{--                    <input name="_token" type="hidden" value="sSfedSAmdwxno23r3PS9EJkR1kgoFfXukhDOHJ9o">--}}
                    @csrf
                    <div class="row">

                        <div class="form-group col-sm-12">
                            <label for="message">الرسالة :</label>
                            <textarea class="form-control" name="message" type="text" id="name" placeholder="الرسالة..." ></textarea>
                        </div>

                    </div>


{{--                    <div class="form-group">--}}
{{--                        <label for="image">الصوره</label>--}}
{{--                        <input type="file" name="image"  id="input-file-now-custom-1" class="dropify" style="border-radius: 20px"--}}
{{--                               data-default-file="{{get_file($find->image)}}" >--}}
{{--                    </div>--}}
                    <input class="btn btn-primary" type="submit" value="تأكيد">
                </form>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->



    </div>
    {{--    </div>--}}

@endsection
