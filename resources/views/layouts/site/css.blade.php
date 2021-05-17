<title>{{__('mazad')}}</title>
<!-- icon -->
<link rel="icon" type="image/x-icon" href="#">
<!-- Bootstrap -->
@if(LaravelLocalization::getCurrentLocaleDirection() == 'rtl')
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-rtl.css') }}">
@endif
@if(LaravelLocalization::getCurrentLocaleDirection() == 'ltr')
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
@endif
<!-- MDBootstrap -->
<link rel="stylesheet" href="{{url('site')}}/css/mdb.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{url('site')}}/css/all.css">
<!-- Font Awesome Stars-->
<link rel="stylesheet" href="{{url('site')}}/css/fontawesome-stars.css">
<!-- odometer -->
<link rel="stylesheet" href="{{url('site')}}/css/odometer.min.css">
<!-- flatIcon -->
<link rel="stylesheet" href="{{url('site')}}/css/flaticon.css">
<!-- dropify -->
<link rel="stylesheet" href="{{url('site')}}/css/dropify.min.css">
<!-- swiper -->
<link rel="stylesheet" href="{{url('site')}}/css/swiper.css">
<!-- select2 -->
<link rel="stylesheet" href="{{url('site')}}/css/select2.css">
<!-- animate -->
<link rel="stylesheet" href="{{url('site')}}/css/aos.css">
<link rel="stylesheet" href="{{url('site')}}/css/normalize.css">
<!-- img gallery -->
<link rel="stylesheet" href="{{url('site')}}/css/jquery.fancybox.min.css">
<!-- Custom style  -->
<link rel="stylesheet" href="{{url('site')}}/css/style.css?v={{time()}}">
<!-- fonts  -->
@toastr_css

<link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
