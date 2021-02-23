<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>تسجيل الدخول | الصفوة</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{url('Admin')}}/img/logo.png" />
    <!--begin:: Global Mandatory Vendors -->


    <!--begin::Web font -->

    <link href="https://fonts.googleapis.com/css?family=Almarai&display=swap" rel="stylesheet">




    {{--<link href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" rel="stylesheet" type="text/css" />--}}

    <link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" rel="stylesheet" type="text/css" />

    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">--}}
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>--}}
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}

    {{--<link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">--}}

    {{--<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">--}}




    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->


    <!-- Font Icon -->

    <!-- Main css -->


    <!-- ================== styles datatabele =================== -->
    <style>
        @import url("https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
        @import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
        .loader {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: none;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            z-index: 9999;
            background-color: rgba(0,0,0,0.5);
        }

        .loader img {
            width: 300px;
            height: 300px;
        }

        .loader .triple-spinner {
            display: block;
            position: relative;
            width: 125px;
            height: 125px;
            border-radius: 50%;
            border: 5px solid transparent;
            border-top: 5px solid #0E485F;
            -webkit-animation: spin 1s linear infinite;
            animation: spin 1s linear infinite;
        }

        .loader .triple-spinner::before,
        .loader .triple-spinner::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            border: 5px solid transparent;
        }

        .loader .triple-spinner::before {
            top: 5px;
            left: 5px;
            right: 5px;
            bottom: 5px;
            border-top-color: #98B748;
            -webkit-animation: spin 3s linear infinite;
            animation: spin 3.5s linear infinite;
        }

        .loader .triple-spinner::after {
            top: 15px;
            left: 15px;
            right: 15px;
            bottom: 15px;
            border-top-color: #E08A33;
            -webkit-animation: spin 1.5s linear infinite;
            animation: spin 1.75s linear infinite;
        }

        @-webkit-keyframes spin {
            from {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes spin {
            from {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>

    <style type="text/css">


        /*--------- Main Content ---------*/

        .box
        {
            margin: 25px;
            padding: 25px;
            background: #fff
        }

        th
        {
            text-align: center;
        }

        tbody tr
        {
            text-align: center;
        }


        .dropify-wrapper
        {
            border-radius: 20px;
        }

        .imageuploadify-container button:before
        {
            content: "remove";
        }
        .imageuploadify .imageuploadify-images-list .imageuploadify-container button.btn-danger
        {
            width: 51px;
        }


    </style>

    <style media="screen">
        .dz-image
        {
            border-radius:5px !important;
            margin-bottom: 10px;
        }
        .dz-remove
        {
            color: red;
        }
        .dz-image img
        {
            text-align: center;
            width:100%;
            height:100%;

        }

        .dropzone
        {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
        }

    </style>




    <style>
        .modal_body
        {
            position: relative;
        }
        .overlay
        {
            position: absolute;
            width: 94%;
            height: 95%;
            background: #fffffffa;
            z-index: 9999999;
            border-radius: 10px;
            display: none;
        }
        #loady
        {
            position: absolute;
            top: 50%;
            left: 38%;
        }
    </style>

    <style>
        .m-radio>input:checked ~ span:after, .m-checkbox>input:checked ~ span:after {
            display: block;
            transform: rotate(45deg);
        }
        #regForm {
            background-color: #ffffff;
            margin: 100px auto;
            padding: 40px;
            width: 70%;
            min-width: 300px;
        }

        /* Style the input fields */
        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        /* Mark the active step: */
        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #4CAF50;
        }
    </style>






    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.1/dropzone.css">




{{--    <link rel="shortcut icon" href="{{url('admin')}}/imgs/logo.png" />--}}



    <!--begin:: Global Mandatory Vendors -->
    <link href="{{url('admin')}}/vendors/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />


    <link href="{{url('admin')}}/vendors/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />


    <!--end::Global Theme Styles -->

    <!--begin::Page Vendors Styles -->
    {{--    <link href="{{url('admin')}}/assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />--}}

    <link href="{{url('admin')}}/assets/vendors/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />

    <!--end::Page Vendors Styles -->



    <!--begin::Web font -->
    <script src="{{url('admin')}}/js/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->

    <!--begin::Global Theme Styles -->
    <!--		<link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />-->
    <!--		<link href="assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />-->



    {{--------------RTL version:---------------------}}
    <link href="{{url('admin')}}/assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />
    <link href="{{url('admin')}}/assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />
    <link href="{{url('admin')}}/assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />

    <!-- ================== styles datatabele =================== -->

    <style type="text/css">

        .m-brand{  width: 255px; }
        body
        {
            font-family: 'Almarai', sans-serif;
        }


        /*--------- Main Content ---------*/



        th
        {
            text-align: center;
        }

        tbody tr
        {
            text-align: center;
        }



    </style>


</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<div class="loader">
    <div class="triple-spinner"></div>
</div>
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-3" id="m_login" style="background-image: url({{url('admin')}}/assets/app/media/img//bg/bg-2.jpg);">
        <div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
            <div class="m-login__container">
                <div class="m-login__logo">
                    <a href="#">
                        <img src="{{get_file('Admin/img/logo.png')}}" style="width: 20% !important;">
                    </a>
                </div>
                <div class="m-login__signin">
                    <div class="m-login__head">
                        <h3 class="m-login__title">تسجيل الدخول</h3>
                    </div>
                    <div class="m-login__form m-form" >
                        @csrf
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="email" placeholder="البريد الإلكترونى..." id="email" name="email" autocomplete="on">
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input m-login__form-input--last" type="password" id="password" placeholder="كلمة المرور..." name="password">
                        </div>

                        <div class="row m-login__form-sub">
                            <div class="col m--align-left m-login__form-left">
                                <label class="m-checkbox  m-checkbox--light">
                                    <input type="checkbox" id="ShowPassword" name="remember"> عرض كلمة المرور
                                    <span></span>
                                </label>
                            </div>
                            <div class="col m--align-right m-login__form-right">
                            </div>
                        </div>

                        <div class="m-login__form-action">
                            <button  id="login" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">تسجـيـل</button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>





<!--begin::Global Theme Bundle -->
<script src="{{url('admin')}}/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="{{url('admin')}}/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Vendors -->
<script src="{{url('admin')}}/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts -->
<script src="{{url('admin')}}/assets/app/js/dashboard.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="{{url('admin/js')}}/jquery.js" type="text/javascript"></script>






<script src="{{url('admin/js')}}/tostar.js"></script>
<script>

        @if (Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}"
    switch(type){
        case 'info':

            toastr.options.timeOut = 10000;
            toastr.info("{{Session::get('message')}}");
            var audio = new Audio('audio.mp3');
            audio.play();
            break;
        case 'success':

            toastr.options.timeOut = 10000;
            toastr.success("{{Session::get('message')}}");
            var audio = new Audio('audio.mp3');
            audio.play();

            break;
        case 'warning':

            toastr.options.timeOut = 10000;
            toastr.warning("{{Session::get('message')}}");
            var audio = new Audio('audio.mp3');
            audio.play();

            break;
        case 'error':

            toastr.options.timeOut = 10000;
            toastr.error("{{Session::get('message')}}");
            var audio = new Audio('audio.mp3');
            audio.play();

            break;
    }
    @endif
</script>
<script>
    $(document).on('click','#login',function () {
        var  email = $('#email').val()
        var  password = $('#password').val()
        if (email == '') return toastr.error('البريد الإلكترونى مطلوب!!')
        if (!isEmail(email)) return toastr.error('يجب إدخال بريد إالكترونى صحيح!!')
        if (password == '') return toastr.error('كلمة المرور مطلوبة!!')
        $(document).ready(function(){
            $(".loader ").css("display","flex");
            setTimeout(function () {
                $(".loader ").css("display","none");
            }, 1000);
        });

        $.ajax({
            type: 'POST',
            url: "{{route('do-log')}}",
            data: {"_token": "{{csrf_token()}}","email":email,"password":password},
            success: function (data) {
                if (data.status == 'yes') {
                    sessionStorage.setItem("login", "login");
                    window.location.href = "/"
                }
                if (data.status == 'password')  return toastr.error('كلمة المرور غير صحيحة!!')
                if (data.status == 'email')  return toastr.error('البريد الإلكترونى غير موجود!!')
            },
            error: function () {
                swal("هناك خطأ ماّ!!", {
                    icon: "error",
                })
                    .then(function(){
                        location.reload();
                    }
                );
            }
        });
    });
    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

</script>
<script>
    $(document).on('click','#ShowPassword',function () {
        if ($('#password').attr('type') == 'password'){
            $('#password').attr('type','text')
        }else {
            $('#password').attr('type','password')
        }
    });
</script>
<script type="text/javascript">
    document.onreadystatechange = function () {
        var state = document.readyState
        if (state == 'interactive') {
            $(".loader ").css("background-color","#fff");
            $(".loader ").css("display","flex");
        } else if (state == 'complete') {
            setTimeout(function(){
                $(".loader ").css("background-color","rgba(0,0,0,0.5)");
                $(".loader ").css("display","none");
            },1000);
        }
    }

    window.addEventListener("keydown", function(e) {
        if (e.keyCode == 13) {
            $('#login').click();
        }
    });
</script>


<!--end_tostar--->
</body>

<!-- end::Body -->
</html>
