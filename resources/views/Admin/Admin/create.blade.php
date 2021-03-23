@extends('layouts.Admin.index')


@section('title')
    <li class="m-nav__item">
        <a href="{{route('ShowAdmins.index')}}" class="m-nav__link">
            <span class="m-nav__link-text">المشرفين</span>
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
                    <h3 class="box-title"> اضافة مشرف جديد </h3>
                </div>
                <hr><br>
                <!-- /.box-header -->

                <form method="POST" action="{{route('ShowAdmins.store')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                    {{--                    <input name="_token" type="hidden" value="sSfedSAmdwxno23r3PS9EJkR1kgoFfXukhDOHJ9o">--}}
                    @csrf
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="name">الإسم:</label>
                            <input class="form-control" name="name" type="text" id="name" placeholder="الإسم..."  data-validation="required">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="email">البريد الإلكترونى:</label>
                            <input class="form-control" name="email" data-validation="required"  type="email" id="email" placeholder="البريد الإلكترونى..." >
                        </div>

{{--                        <div class="form-group col-sm-6">--}}
{{--                            <label for="authorization">الصلاحية:</label>--}}
{{--                            <select class="form-control"  data-validation="required" name="role" id="authorization" >--}}
{{--                                <option>إختر الصلاحية</option>--}}
{{--                                --}}{{-- @foreach($get as $role)--}}
{{--                                    <option value="{{$role->name}}">{{$role->name}}</option>--}}
{{--                                @endforeach --}}
{{--                            </select>--}}
{{--                        </div>--}}
                        <div class="form-group col-sm-6">
                            <label for="password">كلمة السر:</label>
                            <input class="form-control" name="password" type="password" id="password" placeholder="كلمة السر..."  data-validation="required">
                        </div>
                        <div class="form-group col-sm-6">

                        <label for="phone">رقم التليفون:</label>
                        <input class="form-control" name="phone" type="text" id="phone" placeholder="رقم التليفون..."  data-validation="">   </div>
                    </div>
            </div>


{{--                            <div class="form-group col-sm-12">--}}
{{--                              --}}
{{--                            </div>--}}
                    <div class="form-group">
                        <label for="image">الصوره</label>
                        <input type="file" name="image"  id="input-file-now-custom-1"   class="dropify" style="border-radius: 20px"
                               data-default-file="" >
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
