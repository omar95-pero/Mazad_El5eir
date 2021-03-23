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
            <span class="m-nav__link-text">اضافة جمعية جديدة</span>
        </a>
    </li>

@endsection
@section('content')


    <div class="m-content">
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            الجمعيات
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <button type="button" class="dt-button btn btn-danger delBtn btn_space" style="left: auto!important;" onclick="multycheck(); return false;"  id="pass"><i class="fa fa-trash"></i></button>
                            <input type="hidden" id="check_id" attr_route="{{route('ShowAdminsCheckDelete')}}" name="id" value="" />
                        </li>
                        <li class="m-portlet__nav-item"></li>

                        <li class="m-portlet__nav-item">
                            <a href="{{route('insert.charity')}}" class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air" >
                            <span>
                                <i class="la la-plus"></i>
                                <span>جمعية جديدة</span>
                            </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">

                <!--begin: Datatable -->






                <table id="example" class="table table-striped- table-bordered table-hover table-checkable" style="width:100%">
                    <thead style="background-color: #34bfa3;">
                    <tr>
                        <th class="not-exported" style="width: 30px!important;">
                            <input type="checkbox" class="check_all" style="box-sizing: border-box;background-color: indigo!important;font-size: 10px" onclick="check_all()" />
                        </th>
                        <th>#</th>
                        <th>اسم الجمعية</th>
                        <th>العنوان</th>
                        <th>الايميل</th>
                        <th>رقم التليفون</th>
                        <th class="not-exported">الصوره</th>
                        <th class="not-exported">تعديل</th>
                        <th class="not-exported">حذف</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($showCharities as $charity)
                            <tr>

                                <td>
                                    <input type="checkbox" name="checkvalue" id="checkItem" class="item_checkbox" style="margin-right: -21px!important;" value="">
                                </td>
                                <td>{{++$i}}</td>
                                <td>{{$charity->name}}</td>
                                <td>{{$charity->address}}</td>
                                <td>{{$charity->email}}</td>
                                <td>{{$charity->phone_number}}</td>
                                <td><img style="width: 70px;height: 70px" src="{{get_file($charity->image)}}" alt="user" onclick="window.open(this.src)"/></td>
                                <td >
                                    <a href="{{ url('admin/charities',$charity->id)}}">
                                        <button type="submit" class="btn btn-info btn-sm"   ><i class="fa fa-edit" style="margin-left: 1px"></i></button>
                                    </a>
                                </td>
                                <td >
                                    <form action="{{route('destroy.charity',$charity->id)}}" method="POST" m>
                                        @csrf
                                        <button type="submit" class="btn btn-info btn-sm" >
                                        <i class="fa fa-trash" style="margin-left: 1px"></i>
                                        </button>
                                    </form>
                                </td>
                                @endforeach
                            </tr>
                    </tbody>
                </table>
@endsection
