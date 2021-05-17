@extends('layouts.Admin.index')
@section('title')
    <li class="m-nav__item">
        <a href="" class="m-nav__link">
            <span class="m-nav__link-text">مزاد على {{$auction_details->item_name}}</span>
        </a>
    </li>
    {{--    <li class="m-nav__separator">-</li>--}}
    {{--    <li class="m-nav__item">--}}
    {{--        <a href="" class="m-nav__link">--}}
    {{--            <span class="m-nav__link-text">اضافة مزاد جديد</span>--}}
    {{--        </a>--}}
    {{--    </li>--}}

@endsection
@section('content')


    <div class="m-content">
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            مزاد على {{$auction_details->item_name}}

                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">

                </div>
            </div>
<div>
    <div class="row">
        <div class="col-sm-4">
            <label>اسم المنتج : </label>
            <input  value="{{$auction_details->item_name}}" disabled>
        </div>
        <div class="col-sm-4">
            <label>صاحب المزاد : </label>
            <input  value="{{$auction_details->user->name}}" disabled>
        </div>
        <div class="col-sm-4">
            <label>الجمعية المتبرع لها : </label>
            <input  value="{{$auction_details->charity->name}}" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <label>العنوان : </label>
            <input  value="{{$auction_details->address}}" disabled>
        </div>
        <div class="col-sm-6">
            <label> تفاصيل المزاد : </label>
            <input  value="{!! $auction_details->item_detailes !!}" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <label>سعر البدأ : </label>
            <input  value="{{$auction_details->start_price}}" disabled>
        </div>
        <div class="col-sm-3">
            <label>  حد المزايدة : </label>
            <input  value="{!! $auction_details->bid_limit !!}" disabled>
        </div>
        <div class="col-sm-3">
            <label>  حالة المزاد : </label>
            <input  value="{!! $auction_details->status=='cancel' ? 'غير معروض' : 'معروض' !!}" disabled>
        </div>
        <div class="col-sm-3">
            <label>  نوع المزاد : </label>
            <input  value="{!! $auction_details->is_special=='no' ? 'مزاد غير مميز' : 'مزاد مميز' !!}" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <label>  صورة {{$auction_details->item_name}} : </label>
            <img class="mt-5" src="{{get_file($auction_details->image)}}" style="width: 300px; height: 150px;">
        </div>

    </div>
</div>






{{--                <table id="example" class="table table-striped- table-bordered table-hover table-checkable" style="width:100%">--}}
{{--                    <thead style="background-color: #34bfa3;">--}}
{{--                    <tr>--}}
{{--                        <th class="not-exported" style="width: 30px!important;">--}}
{{--                            <input type="checkbox" class="check_all" style="box-sizing: border-box;background-color: indigo!important;font-size: 10px" onclick="check_all()" />--}}
{{--                        </th>--}}
{{--                        <th>#</th>--}}
{{--                        <th>اسم المنتج</th>--}}
{{--                        <th> المزادات المميزة</th>--}}
{{--                        <th>سعر البدأ</th>--}}
{{--                        <th class="not-exported">الصوره</th>--}}
{{--                        <th class="not-exported">تعديل حالة المزاد</th>--}}
{{--                        <th class="not-exported">حذف</th>--}}

{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    @foreach($getAuctions as $data)--}}
{{--                        <tr>--}}
{{--                            <td>--}}
{{--                                --}}{{--                                    <input type="checkbox" name="checkvalue" id="checkItem" class="item_checkbox" style="margin-right: -21px!important;" value="{{$user->id}}">--}}
{{--                            </td>--}}
{{--                            --}}{{--                                <td>{{$i}}</td>--}}
{{--                            <td>{{++$n}}</td>--}}
{{--                            <td><a href="{{route('auction_details',$data->id)}}">{{$data->item_name}}</a></td>--}}
{{--                            <td><label class="switch"><a href="{{route('update_to_special.Auction',$data->id)}}"><input type="checkbox" {{$data->is_special == "yes" ? 'checked' :''}}><span class="slider round"></span></a></label></td>--}}
{{--                            <td>{{$data->start_price}}</td>--}}
{{--                            <td><img style="width: 70px;height: 70px" src="{{get_file($data->image)}}" alt="user" onclick="window.open(this.src)"/></td>--}}
{{--                            <td><label class="switch"><a href="{{route('updateState.Auction',$data->id)}}"><input type="checkbox" {{$data->status == "done" ? 'checked' :''}}><span class="slider round"></span></a></label></td>--}}
{{--                            <td >--}}
{{--                                <a href="{{route('delete.Auction',$data->id)}}">--}}
{{--                                    <button type="button" class="btn btn-danger btn-sm"  id="submit_delete"  ><i class="fa fa-trash" style="margin-left: 1px"></i></button>--}}
{{--                                </a>--}}
{{--                            </td>--}}
{{--                        --}}{{--                                <td >--}}
{{--                        --}}{{--                                    <a href="{{route('ShowAdmins.edit',$user->id)}}">--}}
{{--                        --}}{{--                                        <button type="submit" class="btn btn-info btn-sm"   ><i class="fa fa-edit" style="margin-left: 1px"></i></button>--}}
{{--                        --}}{{--                                    </a>--}}
{{--                        --}}{{--                                </td>--}}


{{--                        --}}{{--                                <?php--}}
{{--                        --}}{{--                                $i++?>--}}
{{--                        --}}{{--                                <div id="delete{{$user->id}}" class="modal fade" role="dialog">--}}
{{--                        --}}{{--                                    <div class="modal-dialog">--}}
{{--                        --}}{{--                                        <div class="modal-content">--}}
{{--                        --}}{{--                                            <form action="" method="post" enctype="application/x-www-form-urlencoded">--}}
{{--                        --}}{{--                                                @csrf--}}
{{--                        --}}{{--                                                <input type="hidden" name="id" value="{{$user->id}}" />--}}
{{--                        --}}{{--                                                <div class="modal-header">--}}
{{--                        --}}{{--                                                    <button type="button" class="close" data-dismiss="modal" style="margin-left: 390px">&times;</button>--}}
{{--                        --}}{{--                                                    <h4 class="modal-title" style="margin-right:-2%">حذف</h4>--}}
{{--                        --}}{{--                                                </div>--}}
{{--                        --}}{{--                                                <div class="modal-body">--}}
{{--                        --}}{{--                                                    <h4>هل انت متأكد من حذف <strong style="color: red">{{$user->name}}</strong>؟!</h4>--}}
{{--                        --}}{{--                                                </div>--}}
{{--                        --}}{{--                                                <div class="modal-footer">--}}
{{--                        --}}{{--                                                    <button type="button" class="btn btn-info" data-dismiss="modal">غلق</button>--}}
{{--                        --}}{{--                                                    <input type="submit" name="submit"  id="action" value="تأكيد" style="width: 60px" class="btn btn-danger">--}}
{{--                        --}}{{--                                                </div>--}}
{{--                        --}}{{--                                            </form>--}}
{{--                        --}}{{--                                        </div>--}}
{{--                        --}}{{--                                    </div>--}}
{{--                        --}}{{--                                </div>--}}
{{--                        --}}{{--                            </tr>--}}
{{--                    @endforeach--}}
{{--                    </tbody>--}}

{{--                </table>--}}
{{--            </div>--}}
        </div>

        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
    <div id="check" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="post" enctype="application/x-www-form-urlencoded">
                    @csrf
                    <input type="hidden" name="id" value="" />
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="margin-left: 85%">&times;</button>
                        <h4 class="modal-title" style="margin-top: -5px">حذف</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger text-center">
                            <h4 id="text">هل انت موافق على حذف المشرفين المحددين<br> وعددهم <span id="span" style="color:red;"></span> ! </h4>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">غلق</button>
                        <input type="submit" name="submit"  id="action" value="تأكيد" style="width: 60px" class="btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
