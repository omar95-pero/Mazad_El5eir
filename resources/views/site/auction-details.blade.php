<!doctype html>
<html lang="ar">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>مزاد الخير</title>
  <!-- icon -->
  <link rel="icon" type="image/x-icon" href="#">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-rtl.css') }}">
  <!-- MDBootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/css/mdb.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
  <!-- Font Awesome Stars-->
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-stars.css') }}">
  <!-- odometer -->
  <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
  <!-- flatIcon -->
  <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
  <!-- dropify -->
  <link rel="stylesheet" href="{{ asset('assets/css/dropify.min.css') }}">
  <!-- swiper -->
  <link rel="stylesheet" href="{{ asset('assets/css/swiper.css') }}">
  <!-- select2 -->
  <link rel="stylesheet" href="">
  <!-- animate -->
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
  <!-- img gallery -->
  <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
  <!-- Custom style  -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <!-- fonts  -->
    @toastr_css
  <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
{{--    @toastr_css--}}
{{--    @toastr_css--}}
</head>


<body>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

    <!-- ================ spinner ================= -->
    {{-- <div class="spinner">
        <div class="loader">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div> --}}
    <!-- ================ spinner ================= -->



    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////   nav-bar     //////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->


    <div id="Header" class="main-header">
        @include('layouts.site.Header')
    </div>


    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////          //////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->

    <!-- SideNav slide-out button -->
    <a href="#" data-activates="slide-out" class="btn btn-primary p-3 button-collapse"
       style="position: fixed ; background-color: #107b50 !important ; z-index: 123456;"><i class="fas fa-bars"></i></a>

    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav    " style="background-color: #fff !important; ">
        <ul class="custom-scrollbar" style="overflow-y: scroll;">
            <!-- Logo -->
            <li>
                <div class="logo-wrapper waves-light" style="height: 175px;">
                    <a href="#"><img src="{{asset('assets/img/logo.png')}}" class="img-fluid flex-center"></a>
                </div>
            </li>
            <!--/. Logo -->

            <div class="container">
                <ul class="side-contents mt-4">
                    <li> <a href="{{route('bestAuctions')}}"
                            style="height: 45px; color: #107b50; font-weight: bold; line-height: 40px ; font-size: 15px !important;">
                            <i class="fad fa-concierge-bell ml-1"></i> مزادات مميزة </a> </li>
                    <li> <a href=""
                            style="height: 45px; color: #107b50; font-weight: bold; line-height: 40px ; font-size: 15px !important;"><i
                                class="fad fa-concierge-bell ml-1"></i> الأكثر مزايدة</a> </li>
                    <li> <a href=""
                            style="height: 45px; color: #107b50; font-weight: bold; line-height: 40px ; font-size: 15px !important;"><i
                                class="fad fa-tshirt ml-1"></i> ملابس</a> </li>
                    <li> <a href=""
                            style="height: 45px; color: #107b50; font-weight: bold; line-height: 40px ; font-size: 15px !important;"><i
                                class="fad fa-tablet ml-1"></i> موبايلات وتابلت </a> </li>
                    <li> <a href=""
                            style="height: 45px; color: #107b50; font-weight: bold; line-height: 40px ; font-size: 15px !important;"><i
                                class="fad fa-charging-station ml-1"></i> أجهزة كهربائيه</a> </li>
                    <li> <a href=""
                            style="height: 45px; color: #107b50; font-weight: bold; line-height: 40px ; font-size: 15px !important;"><i
                                class="fad fa-couch ml-1"></i> اثاث وأدوات منزليه</a> </li>
                    <li> <a href=""
                            style="height: 45px; color: #107b50; font-weight: bold; line-height: 40px ; font-size: 15px !important;">
                            <i class="fad fa-gamepad-alt ml-1"></i> العاب ومستلزمات أطفال</a> </li>
                    <li> <a href=""
                            style="height: 45px; color: #107b50; font-weight: bold; line-height: 40px ; font-size: 15px !important;">
                            <i class="fad fa-gamepad-alt ml-1"></i>تحف وانتيكات</a> </li>
                    <li> <a href=""
                            style="height: 45px; color: #107b50; font-weight: bold; line-height: 40px ; font-size: 15px !important;">
                            <i class="fad fa-gamepad-alt ml-1"></i>أجهزة رياضيه </a> </li>
                    <li> <a href=""
                            style="height: 45px; color: #107b50; font-weight: bold; line-height: 40px ; font-size: 15px !important;">
                            <i class="fad fa-gamepad-alt ml-1"></i> أخرى </a> </li>
                </ul>
            </div>


            <!--Social-->
            <li>
                <ul class="social">
                    <li><a href="#" class="icons-sm fb-ic"><i class="fab fa-facebook-f"
                                                              style="font-size:18px ; color: rgb(38, 51, 167);"> </i></a></li>
                    <li><a href="#" class="icons-sm gplus-ic"><i class="fab fa-google-plus-g"
                                                                 style="font-size:18px ; color: rgb(163, 7, 7);"> </i></a></li>
                    <li><a href="#" class="icons-sm tw-ic"><i class="fab fa-twitter"
                                                              style="font-size:18px ; color: rgb(23, 173, 243);"> </i></a></li>
                </ul>
            </li>
            <!--/Social-->
            <!--/. Side navigation links -->
        </ul>
        <div class="sidenav-bg "></div>
    </div>
    <!--/. Sidebar navigation -->

    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////          //////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->

    <div class="title-top margin-top  d-flex align-items-center justify-content-start">
{{--        <div class="contents d-flex align-items-center mr-4 justify-content-center">--}}
{{--            <a href="{{ route('index') }}"> <i class="fad fa-home pl-2"></i> الرئيسية </a>--}}
{{--            <span> \ </span>--}}
{{--            <h3 class="font-weight-bold"> تفاصيل المزاد </h3>--}}

{{--        </div>--}}

    </div>


    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////          //////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!-- Start Causes
    ============================================= -->
    <div class="causes-area  pt-5">
        <div class="container">


            <div class="causes-items">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Single Item -->
                        <div class="grid-item">
                            <div class="row">




                                <div class="thumb col-lg-5 rounded" data-fancybox="gallery" href="img/TopSales/car.jpg"
                  style="background-image: url({{ get_file($auctionDetailes->image) }});">

                  <span class="cats">لصالح {{$charity_name}}</span>

                </div>

                                <div class="info col-lg-7">

                                    <h3 class="mb-4">
                                        <a href="#"> المزاد عن {{ $auctionDetailes->item_name }}

                                        </a>
{{--                                        <span> <i class="far fa-eye"></i> </span>--}}
{{--                                        <span>{{$view_count}}</span>--}}
                                        <a href="{{route('favorite-action',$auctionDetailes->id)}}">
                                            <span class="float-left favorite " style="{{$auctionDetailes->favorite == "yes"?'transform: scale(0.9); color: #FFD700;':''}}">
                                                <i class="fad fa-heart"></i>
                                            </span>
                                        </a>
                                    </h3>
                                    <p>

                                    </p>
                                    <div class="top-entry my-3 row">
                                        <div class="date col-md-6 mb-3">
                                            <i class="fad fa-tags pl-2"></i> أعلى سعر  :<strong
                                                    class="last-price font-weight-bold px-2">

                                                {{  number_format($maxPrice)}}

                                            </strong> جنية
                                        </div>
                                        <div class="date col-md-6 mb-3">
                                            <i class="fad fa-tags pl-2"></i> سعر البدأ  :<strong
                                                    class="last-price font-weight-bold px-2">

                                                {{ number_format($auctionDetailes->start_price)}}

                                            </strong> جنية
                                        </div>
                                        <div class="date col-md-6 mb-3">
                                            <i class="fad fa-tags pl-2"></i> حد المزايدة :<strong
                                                    class="last-price font-weight-bold px-2">

                                                {{  number_format($auctionDetailes->bid_limit)}}

                                            </strong> جنية
                                        </div>
                                        <div class="location col-md-6 mb-3">
                                            <i class="fad fa-user pl-2"></i> <strong>صاحب المزاد : </strong> <a
                                                    href="profile.html"> {{ $auctionDetailes->user->name }}                                            </a>
                                        </div>
                                    </div>

                                    <h3 class="font-weight-bold mb-3" style="color: #107b50; font-size: 23px "> أعلى المزايدين : </h3>

                                    <div  class="auction-people">
                                        <div class="row">

                                            @foreach ($bids as $bid)

                                                <div  class="col-md-6 row my-2">

                                                    <div class="col-3 d-flex align-items-center">

                                                        <img src="{{ $bid->user->image? get_file($bid->user->image):asset("assets/img/user.jpg")}}" alt="">
                                                    </div>
                                                    <div class="col-9 d-flex align-items-center">
                                                        <div>
                                                            <a class="font-weight-bold">{{ $bid->user->name }}</a>
                                                            <h6 class="font-weight-bold">{{number_format($bid->bid_price) }}جنية</h6>
                                                            <small class="d-block"> {{  $bid->created_at }} <span
                                                                        class="mr-2 font-weight-bold"></span></small>
                                                        </div>
                                                    </div>
                                                </div>


                                            @endforeach

                                        </div>
                                    </div>

                                    <!--Social-->
                                    <div class="my-3">
                                        <ul class="social d-flex float-left">

                                            <li class="mx-2">مشاركة :</li>
                                            <li class="mx-2"> <a  class="shareLink mx-1" target="_blank" href="https://facebook.com/sharer/sharer.php?u={{route('auction.details',$auctionDetailes->id)}}"><i class="fab fa-facebook-f"
                                                                                                   style="font-size:18px ; color: rgb(38, 51, 167);"> </i></a></li>
                                            <li class="mx-2"><a  class="shareLink mx-1" target="_blank" href="https://plus.google.com/share?url={{route('auction.details',$auctionDetailes->id)}}"><i class="fab fa-google-plus-g"
                                                                                                      style="font-size:18px ; color: rgb(163, 7, 7);"> </i></a></li>
                                            <li class="mx-2"><a  class="shareLink mx-1" target="_blank" href="https://twitter.com/share?url={{route('auction.details',$auctionDetailes->id)}}"><i class="fab fa-twitter"
                                                                                                   style="font-size:18px ; color: rgb(23, 173, 243);"> </i></a></li>
                                        </ul>
                                    </div>
                                    <!--/Social-->
                                </div>


                                <div class="col-lg-5 px-0">
                                    <div class="gallery my-4 px-0">
                                        <!-- Swiper -->
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                @foreach($getImages as $image )
                                                <div class="swiper-slide">
                                                    <a data-fancybox="gallery" href="{{ get_file($image->imag) }}">
                                                        <img src="{{ get_file($image->imag) }}">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a data-fancybox="gallery" href="{{ get_file($image->img) }}">
                                                        <img src="{{ get_file($image->img) }}">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a data-fancybox="gallery" href="{{ get_file($image->imge) }}">
                                                        <img src="{{ get_file($image->imge) }}">
                                                    </a>
                                                </div>
                                                @endforeach
                                                    @foreach($getImages as $img )
                                                        <div class="swiper-slide">
                                                            <a data-fancybox="gallery" href="{{ get_file($img->imag) }}">
                                                                                        <img src="{{ get_file($img->imag) }}">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a data-fancybox="gallery" href="{{ get_file($img->img) }}">
                                                                <img src="{{ get_file($img->img) }}">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a data-fancybox="gallery" href="{{ get_file($img->imge) }}">
                                                                <img src="{{ get_file($img->imge) }}">
                                                            </a>
                                                        </div>
                                                    @endforeach
{{--                                                @endforeach--}}
{{--                                                <div class="swiper-slide">--}}
{{--                                                    <a data-fancybox="gallery" href="{{ get_file($auctionDetailes->image) }}">--}}
{{--                                                        <img src="{{ get_file($auctionDetailes->image) }}">--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                                <div class="swiper-slide">--}}
{{--                                                    <a data-fancybox="gallery" href="{{ get_file($auctionDetailes->image) }}">--}}
{{--                                                        <img src="{{ get_file($auctionDetailes->image) }}">--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                                <div class="swiper-slide">--}}
{{--                                                    <a data-fancybox="gallery" href="{{ get_file($auctionDetailes->image) }}">--}}
{{--                                                        <img src="{{ get_file($auctionDetailes->image) }}">--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}

                                            </div>
                                            <!-- Add Pagination -->
                                            <div class="swiper-pagination" style="bottom: -25px;">

                                            </div>
                                            <!-- Add Arrows -->
                                            <div class="swiper-button-next" style="background-color: #fff ; left: 2px !important;
  right: auto !important; bottom: 25px !important;"></div>
                                            <div class="swiper-button-prev" style="right: 2px !important;
  background-color: #fff ; left: auto !important; bottom: 25px !important;"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="progress-box">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" data-width="33">
                                                <span>33%</span>
                                            </div>
                                        </div>
                                        <!-- <p> أخر سعر :  $5488   <span> سعر البدء : $12800 </span> </p> -->

                                    </div>
                                    <div
                                        class="mt-4 d-flex justify-content-between align-items-center position-relative">


                                        <p id="count-down" class="mt-2 "></p>
                                    </div>
                                    <div class="row">
                                    <div class="col-lg-8">
                                        @auth
                       @if(\Carbon\Carbon::parse($auctionDetailes->end_at) > \Carbon\Carbon::now())

                                        <form action="{{ url('AuctionProcess',$auctionDetailes->id) }}" method="POST">
                                            @csrf
                                            <div class="col-lg-12">
                                            <div class="form-group">
                                            <input type="number" class="form-control" name="bid_price" placeholder=" ادخل سعر المزايدة{{number_format($maxPrice).'+'.number_format($auctionDetailes->bid_limit)}}" required>
                                            <input type="hidden" class="form-control" name="Auction_id" value="{{ $auctionDetailes->id }}">
                                            </div>
                                           </div>
                                            <button id="price-input-show" class="btn btn-theme border" href="#">زايد
                                            الان</button>
                                         </form>
                       @endif
                                        @endauth

                                    </div>
                                    </div>
                                </div>


                                <style>
                                    .md-tabs .nav-link.active,
                                    .md-tabs .nav-item.open .nav-link {
                                        background-color: #ffffff;
                                        color: rgb(48, 48, 48);


                                    }
                                </style>

                                <div class="col-12 mb-3  client-edits">
                                    <ul class="nav nav-tabs nav-justified md-tabs " id="myTabJust" role="tablist"
                                        style="background-color:#107b50; box-shadow: none; ">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab"
                                               aria-controls="home-just" aria-selected="true">

                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img class="head-tab-img" src="{{asset("assets/img/tab3.png")}}" alt="product">
                                                    <p class="head-tab-text mr-4">الوصف</p>

                                                </div>

                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab"
                                               aria-controls="profile-just" aria-selected="false">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img class="head-tab-img" src= "{{ asset('assets/img/tab2.png') }}"  alt="product">
                                                    <p class="head-tab-text mr-4">التوصيل</p>

                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#gallery-just" role="tab"
                                               aria-controls="profile-just" aria-selected="false">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img class="head-tab-img" src="{{ asset('assets/img/tab3.png')}}" alt="product">
                                                    <p class="head-tab-text mr-4">تاريخ المزايدات</p>

                                                </div>
                                            </a>
                                        </li>

                                    </ul>
                                    <div class="tab-content  card pt-5" id="myTabContentJust">



                                        <div class="tab-pane fade show active" id="home-just" role="tabpanel"
                                             aria-labelledby="home-tab-just">
                                            {{ $auctionDetailes->item_detailes }}


                                        </div>



                                        <div class="tab-pane fade" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">

                                            {{ $auctionDetailes->delivery_details}}

                                        </div>



                                        <div class="tab-pane fade" id="gallery-just" role="tabpanel" aria-labelledby="profile-tab-just">

                                            <div class="container-fluid" style="background-color: #ebf2ff;  overflow: scroll;">
                                                <div id="container">


                                                    <table class="table  table-hover" id="oi">
                                                        <thead>
                                                        <tr>
                                                            <th>م</th>
                                                            <th></th>
                                                            <th>المزايد</th>
                                                            <th>التاريخ</th>
                                                            <th>الوقت</th>
                                                            <th>القيمة</th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        @foreach($bidUsers as $key=>$val)

                                                            <tr>
                                                            <th scope="row">{{++$no}}</th>
                                                            <td>
                                                                <div class="img-circle">
                                                                    <img src=" {{$val->user->image? get_file($val->user->image): asset('assets/img/user.png') }} " alt="">
                                                                </div>
                                                            </td>
                                                            <td>{{$val->user->name}}</td>
                                                            <td>{{\Carbon\Carbon::parse($val->created_at)->toDateString()}}</td>
                                                            <td>{{\Carbon\Carbon::parse($val->created_at)->toTimeString()}}</td>
                                                            <td>{{$val->bid_price}}</td>
                                                        </tr>
                                                        @endforeach
{{--                                                        <tr>--}}
{{--                                                            <th scope="row">2</th>--}}
{{--                                                            <td>--}}
{{--                                                                <div class="img-circle">--}}
{{--                                                                    <img src=" {{ asset('assets/img/users-photo/02.png') }} " alt="">--}}
{{--                                                                </div>--}}
{{--                                                            </td>--}}
{{--                                                            <td>Alice</td>--}}
{{--                                                            <td>12 / 2 /2021</td>--}}
{{--                                                            <td>09:12</td>--}}
{{--                                                            <td>3500 جنية</td>--}}
{{--                                                        </tr>--}}
                                                        </tbody>
                                                    </table>


                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- End Single Item -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Causes -->
{{--<div class="row">--}}
{{--    <div class="col-12">--}}
{{--      <button>--}}
{{--             <a  class="shareLink mx-1" target="_blank" href="https://facebook.com/sharer/sharer.php?u={{route('auction.details',$auctionDetailes->id)}}"><i class="fab fa-facebook" style="color: white"></i></a>--}}
{{--      </button>--}}
{{--        <button>--}}
{{--             <a  class="shareLink mx-1" target="_blank" href="https://twitter.com/share?url={{route('auction.details',$auctionDetailes->id)}}"><i class="fab fa-twitter" style="color: white"></i></a>--}}
{{--        </button>--}}
{{--        <button>--}}
{{--             <a  class="shareLink mx-1" target="_blank" href="https://plus.google.com/share?url={{route('auction.details',$auctionDetailes->id)}}"><i class="fab fa-google-plus" style="color: white"></i></a>--}}
{{--        </button>--}}
{{--        <button>--}}
{{--            <a  class="shareLink mx-1" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url={{route('auction.details',$auctionDetailes->id)}}"><i class="fab fa-linkedin" style="color: white"></i></a>--}}
{{--        </button>--}}
{{--    </div>--}}
{{--</div>--}}
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////  footer  //////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <div id="footer">
        @include('layouts.site.Footer')
    </div>
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--/////////////////////////////JavaScript/////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
@include('layouts.site.js')

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("{{$auctionDetailes->end_at}}").getTime();

        // Update the count down every 1 second
        var x = setInterval(function () {

            // Get todays date and time
            var now = new Date().getTime();

            // Find the distance between now an the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="cont-down"
            document.getElementById("count-down").innerHTML = days + "d " + hours + "h " +
                minutes + "m " + seconds + "s ";

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("count-down").innerHTML = "لقد إنتهى وقت المزاد";
            }
        }, 1000);
    </script>

    <script>
        var swiper = new Swiper('.swiper-container', {
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },

            spaceBetween: 10,
            freeMode: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                },
                640: {
                    slidesPerView: 3,
                },
                768: {
                    slidesPerView: 4,
                },
                1024: {
                    slidesPerView: 5,
                },
            }
        });
    </script>
    @toastr_js
    @toastr_render
</body>
{{--@jquery--}}

</html>
