@extends('layouts.Admin.index')
@section('title')
    <li class="m-nav__item">
        <a href="{{route('ShowAdmins.edit',admin()->user()->id)}}" class="m-nav__link">
            <span class="m-nav__link-text">الملف الشخصى</span>
        </a>
    </li>
@endsection
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">

    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">الملف الشخصى</h3>
            </div>
        </div>
    </div>

    <!-- END: Subheader -->
    <div class="m-content">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="m-portlet m-portlet--full-height  ">
                    <div class="m-portlet__body">
                        <div class="m-card-profile">
                            <div class="m-card-profile__title m--hide">
                                الملف الشخصى
                            </div>
                            <div class="m-card-profile__pic">
                                <div class="m-card-profile__pic-wrapper">
                                    <img src="{{get_file(admin()->user()->image)}}" alt="{{admin()->user()->name}}">
                                </div>
                            </div>
                            <div class="m-card-profile__details">
                                <span class="m-card-profile__name">{{admin()->user()->name}}</span>
                                <a href="" class="m-card-profile__email m-link">{{admin()->user()->email}}</a>
                                <br>
                                <br>
                                <span class="m-card-profile__name">{{admin()->user()->phone}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-tools">
                            <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
                                <li class="nav-item m-tabs__item">
                                    <a class="nav-link m-tabs__link active show" data-toggle="tab" href="#m_user_profile_tab_1" role="tab" aria-selected="true">
                                        <i class="flaticon-share m--hide"></i>
                                        تعديل الملف الشخصى
                                    </a>
                                </li>
{{--                                <li class="nav-item m-tabs__item">--}}
{{--                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_2" Role="tab" aria-selected="false">--}}
{{--                                        مواقع التواصل--}}
{{--                                    </a>--}}
{{--                                </li>--}}
                            </ul>
                        </div>

                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active show" id="m_user_profile_tab_1">
                            <form class="m-form m-form--fit m-form--label-align-right" method="post" action="{{route('ShowAdmins.update',admin()->user()->id)}}" enctype="multipart/form-data">
                                        @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="profile">
                                <div class="m-portlet__body">
                                    <div class="form-group m-form__group m--margin-top-10 m--hide">
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">الاسم</label>
                                        <div class="col-7">
                                            <input class="form-control m-input" name="name" type="text" value="{{admin()->user()->name}}">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">البريد الالكترونى</label>
                                        <div class="col-7">
                                            <input class="form-control m-input" name="email" type="text" value="{{admin()->user()->email}}">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">كلمة المرور</label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="password" name="password" placeholder="**********">

                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">رقم الهاتف</label>
                                        <div class="col-7">
                                            <input class="form-control m-input" name="phone" type="text" value="{{admin()->user()->phone}}">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">الصورة الشخصية</label>
                                        <div class="col-7">
                                            <input type="file" name="image"  id="input-file-now-custom-1" class="dropify" style="border-radius: 20px"
                                                   data-default-file="{{get_file(admin()->user()->image)}}" >
                                        </div>
                                    </div>
                                </div>
                                <div class="m-portlet__foot m-portlet__foot--fit">
                                    <div class="m-form__actions">
                                        <div class="row">
                                            <div class="col-2">
                                            </div>
                                            <div class="col-7">
                                                <button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">حفظ التغيرات</button>&nbsp;&nbsp;

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
{{--                        <div class="tab-pane" id="m_user_profile_tab_2">--}}
{{--                            <form class="m-form m-form--fit m-form--label-align-right" method="get" action="http://tarahum.dalel.96.lt/social_media">--}}
{{--                                <div class="m-portlet__body">--}}
{{--                                    <div class="form-group m-form__group m--margin-top-10 m--hide">--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group m-form__group row">--}}
{{--                                        <label for="example-text-input" class="col-2 col-form-label">Linkedin</label>--}}
{{--                                        <div class="col-7">--}}
{{--                                            <span class="form-control m-input" type="text" value=""></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group m-form__group row">--}}
{{--                                        <label for="example-text-input" class="col-2 col-form-label">Facebook</label>--}}
{{--                                        <div class="col-7">--}}
{{--                                            <span class="form-control m-input" type="text" value="https://www.facebook.com/">https://www.facebook.com/</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group m-form__group row">--}}
{{--                                        <label for="example-text-input" class="col-2 col-form-label">Twitter</label>--}}
{{--                                        <div class="col-7">--}}
{{--                                            <span class="form-control m-input" type="text" value="https://twitter.com/">https://twitter.com/</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group m-form__group row">--}}
{{--                                        <label for="example-text-input" class="col-2 col-form-label">Instagram</label>--}}
{{--                                        <div class="col-7">--}}
{{--                                            <span class="form-control m-input" type="text" value=""></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group m-form__group row">--}}
{{--                                        <label for="example-text-input" class="col-2 col-form-label">WhatsApp</label>--}}

{{--                                        <div class="col-5">--}}
{{--                                            <span class="form-control m-input" type="text" value="539044145">539044145</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-2">--}}
{{--                                            <span class="form-control m-input" type="text" value="+966">+966</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="m-portlet__foot m-portlet__foot--fit">--}}
{{--                                    <div class="m-form__actions">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-2">--}}
{{--                                            </div>--}}
{{--                                            <div class="col-7">--}}
{{--                                                <button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">تعديل</button>&nbsp;&nbsp;--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}

{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
