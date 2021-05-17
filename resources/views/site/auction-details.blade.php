<!doctype html>
<html lang="ar">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
@include('layouts.site.css')

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

   @include('layouts.site.side-bar')

    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////          //////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->

{{--    <div class="title-top margin-top  d-flex align-items-center justify-content-start">--}}
{{--        <div class="contents d-flex align-items-center mr-4 justify-content-center">--}}
{{--            <a href="{{ route('index') }}"> <i class="fad fa-home pl-2"></i> الرئيسية </a>--}}
{{--            <span> \ </span>--}}
{{--            <h3 class="font-weight-bold"> تفاصيل المزاد </h3>--}}

{{--        </div>--}}

{{--    </div>--}}


    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////          //////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!-- Start Causes
    ============================================= -->
    @if($auctionDetailes->status == 'done')
    <div class="causes-area  pt-5">
        <div class="container">


            <div class="causes-items">
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <!-- Single Item -->
                        <div class="grid-item">
                            <div class="row">




                                <div class="thumb col-lg-5  rounded" {{--data-fancybox="gallery" href="{{get_file($auctionDetailes->image)}}"
                  style="background-image: url({{ get_file($auctionDetailes->image) }});"--}}>
                                    <img style="width: 100%; height: 70%;" src="{{ get_file($auctionDetailes->image) }}" data-fancybox="gallery" href="{{get_file($auctionDetailes->image)}}" alt="">
                  <span class="cats">لصالح {{$charity_name}}</span>
                                    <div class="mb-4 ">
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

                                </div>

                                <div class="info col-lg-7">

                                    <h3 class="mb-1 ">
                                        <a href="#"> المزاد عن {{ $auctionDetailes->item_name }}</a>
{{--                                        <span> <i class="far fa-eye"></i> </span>--}}
{{--                                        <span>{{$view_count}}</span>--}}
                                        <a href="{{route('favorite-action',$auctionDetailes->id)}}">
                                            <span class="  favorite " style="{{$auctionDetailes->favorite == "yes"?'transform: scale(0.9); color: red;':''}}">
                                                <i class="fad fa-heart"></i>
                                            </span>
                                        </a>
                                    </h3>
                                    <p style="color: #7b7b7b;
    font-weight: bold;
    font-size: 14px;">  <i class="fad fa-user pl-1" style="color: #107b50"></i>   <span>{{$auctionDetailes->user->name}}</span>  </p>
                                    <div class="top-entry my-3 row">
                                        <div class="date main-price col-md-12 d-flex justify-content-center mb-3">
                                            <span style="    display: block; font-weight: bold; color: orangered; font-size: 20px;">  <i class="fad fa-tags pl-2"></i>أعلى سعر  :</span><strong
                                                    class="last-price font-weight-bold px-2">

                                                {{  number_format($maxPrice)}}

                                            </strong> جنية
                                        </div>
                                        <div class="date col-md-6  d-flex  justify-content-center mb-3">
                                            <span style="    display: block; font-weight: bold; color: #ffc200; font-size: 18px;">  <i class="fad fa-tags pl-2"></i>سعر البدأ  :</span><strong
                                                    class="last-price font-weight-bold px-2">

                                                {{ number_format($auctionDetailes->start_price)}}

                                            </strong> جنية
                                        </div>
                                        <div class="date d-flex col-md-6 justify-content-center mb-3">
                                            <span style="    display: block; font-weight: bold; color: #ffc200; font-size: 18px;">  <i class="fad fa-tags pl-2"></i>حد المزايدة :</span>
                                            <strong
                                                    class="last-price font-weight-bold px-2">

                                                {{  number_format($auctionDetailes->bid_limit)}}

                                            </strong> جنية
                                        </div>
{{--                                        <div class="location col-md-6 mb-3">--}}
{{--                                            <span style="    display: block; font-weight: bold; color: #ffc200; font-size: 18px;">  <i class="fad fa-user pl-2"></i>صاحب المزاد :</span> <a--}}
{{--                                                    href="#"> {{ $auctionDetailes->user->name }}                                            </a>--}}
{{--                                        </div>--}}



                                        <div class="col-12 mb-3" style="background: #e7f2ed;">
                                            <div  class="w-100 text-center">
                                                <div id="demo-{{$auctionDetailes->id}}" class="countdown time-counter" end-at="{{$auctionDetailes->end_at}}">
                                                    <ul class="d-flex justify-content-center mb-0">
                                                        <li><span id="seconds" class="timer_sec"  style="display: block !important;" ></span>ثانية</li>

                                                        <li><span id="minutes" class="timer_min" style="display: block !important;" ></span>دقيقة</li>

                                                        <li><span id="hours" class="timer_hour" style="display: block !important;" ></span>ساعة</li>

                                                        <li><span id="days" class="timer_day" style="display: block !important;" ></span>يوم</li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <div class="d-flex justify-content-around">

                                                <div class="location   mb-3">
                                                    <span style="   font-weight: bold; color: #8a8c8c; font-size: 25px;">  <i class="fad fa-eye pl-2"></i>
                                                        {{ $auctionDetailes->views }}
                                                   </span>
                                                    <p class=" ">  مشاهدات </p>
                                                </div>

                                                <div class="location    mb-3">
                                                    <span style="    font-weight: bold; color: #8a8c8c; font-size: 25px;">  <i class="fad fa-gavel pl-2" style="font-size: 25px;"></i>
                                                     {{ $bidUsersNumber }}
                                                    </span>
                                                    <p class=" ">  مزايد </p>

                                                </div>
                                                <div class="location    mb-3">
                                                    <span style="  font-weight: bold; color: #8a8c8c; font-size: 25px;">  <i class="fad fa-sack pl-2" style="font-size: 25px;"></i>
                                                     {{ $bidsNumber }}
                                                    </span>
                                                    <p class=" ">  مزايدات </p>
                                                </div>


                                            </div>

                                        </div>


                                    </div>
                                    <div class="content-share d-flex justify-content-between">
                                        <h3 class="font-weight-bold mb-3" style="color: #107b50; font-size: 23px ">   </h3>
                                        <!--Social-->
                                        <div class="">
                                            <ul class="social d-flex float-left">

{{--                                                <li class="mx-1">مشاركة :</li>--}}
                                                <li class="mx-1"> <a  class="shareLink mx-1" target="_blank" href="https://facebook.com/sharer/sharer.php?u={{route('auction.details',$auctionDetailes->id)}}"><i class="fab fa-facebook-f"
                                                                                                                                                                                                                  style="font-size:18px ; color: rgb(38, 51, 167);"> </i></a></li>
                                                <li class="mx-1"><a  class="shareLink mx-1" target="_blank" href="https://plus.google.com/share?url={{route('auction.details',$auctionDetailes->id)}}"><i class="fab fa-google-plus-g"
                                                                                                                                                                                                          style="font-size:18px ; color: rgb(163, 7, 7);"> </i></a></li>
                                                <li class="mx-1"><a  class="shareLink mx-1" target="_blank" href="https://twitter.com/share?url={{route('auction.details',$auctionDetailes->id)}}"><i class="fab fa-twitter"
                                                                                                                                                                                                      style="font-size:18px ; color: rgb(23, 173, 243);"> </i></a></li>
                                            </ul>
                                        </div>
                                        <!--/Social-->
                                    </div>

{{--                                    <div  class="auction-people">--}}
{{--                                        <div class="row">--}}

{{--                                            @foreach ($bids as $bid)--}}

{{--                                                <div  class="col-md-6 row my-2">--}}

{{--                                                    <div class="col-3 d-flex align-items-center">--}}

{{--                                                        <img src="{{ $bid->user->image? get_file($bid->user->image):asset("assets/img/user.jpg")}}" alt="">--}}
{{--                                                    </div>--}}

{{--                                                    <div class="col-9 d-flex align-items-center">--}}
{{--                                                        <div>--}}
{{--                                                            <a class="font-weight-bold">{{ $bid->user->name }}</a>--}}
{{--                                                            <h6 class="font-weight-bold">{{number_format($bid->bid_price) }}جنية</h6>--}}
{{--                                                            <small class="d-block"> {{  $bid->created_at }} <span--}}
{{--                                                                        class="mr-2 font-weight-bold"></span></small>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}


{{--                                            @endforeach--}}

{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="">--}}
                                        {{--                                    <div class="progress-box">--}}
                                        {{--                                        <div class="progress">--}}
                                        {{--                                            <div class="progress-bar" role="progressbar" data-width="33">--}}
                                        {{--                                                <span>33%</span>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                        {{--                                        <!-- <p> أخر سعر :  $5488   <span> سعر البدء : $12800 </span> </p> -->--}}

{{--                                                                            </div>--}}




                                                    @if(\Carbon\Carbon::parse($auctionDetailes->end_at) > \Carbon\Carbon::now())
{{--                                                        @if($auctionDetailes->user_id != auth()->user()->id)--}}
                                                            <form action="{{ url('AuctionProcess',$auctionDetailes->id) }}" method="POST">
                                                                @csrf
                                                                <div class="form-group d-flex" style="    justify-content: space-around;">
                                                                    <input type="number" class="form-control w-75" style="height: 50px" name="bid_price" placeholder=" ادخل سعر المزايدةلايقل عن{{ $out = number_format(($out = $maxPrice?$maxPrice:$auctionDetailes->start_price)+$auctionDetailes->bid_limit)}}" required>
                                                                    <input type="hidden" class="form-control" name="Auction_id" value="{{ $auctionDetailes->id }}">
                                                                    <button id="price-input-show" class="btn m-0 btn-theme border" href="#" style=" border-radius: 6px !important;     border-radius: 6px !important;
    padding: 10px 20px;
    font-weight: bold;">زايد
                                                                        الان</button>
                                                                </div>


                                                            </form>
{{--                                                        @endif--}}
                                                    @endif



                                    </div>



                                </div>






                                <style>
                                    .md-tabs .nav-link.active,
                                    .md-tabs .nav-item.open .nav-link {
                                        background-color: #ffffff;
                                        color: rgb(48, 48, 48);
                                    }

                                    .md-tabs .nav-link p {
                                        color:#0f0f0f !important;
                                    }

                                    @media (max-width: 768px) {
                                        .top-entry span {
                                            display: inline !important;
                                        }
                                    }
                                </style>

                                <div class="col-12 mb-3  client-edits">
                                    <ul class="nav nav-tabs nav-justified md-tabs " id="myTabJust" role="tablist"
                                        style="background-color:#e7f2ed; box-shadow: none; ">
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
                                            {!! $auctionDetailes->item_detailes !!}


                                        </div>



                                        <div class="tab-pane fade" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">
                                            @if($auctionDetailes->delivery != null)
                                            <p>المحافظة:{{$auctionDetailes->delivery->govrnate->govrnate}}</p>
                                            <p>الطول:{{$out = $auctionDetailes->delivery->length >=100?($auctionDetailes->delivery->length/100).'متر':($auctionDetailes->delivery->length).'سم'}}</p>
                                            <p>العرض:{{$out = $auctionDetailes->delivery->width >=100?($auctionDetailes->delivery->width/100).'متر':($auctionDetailes->delivery->width).'سم'}}</p>
                                            <p>الارتفاع:{{$out = $auctionDetailes->delivery->height >=100?($auctionDetailes->delivery->height/100).'متر':($auctionDetailes->delivery->height).'سم'}}</p>
                                            <p>الوزن:{{$out = $auctionDetailes->delivery->weight>=1000?($auctionDetailes->delivery->weight/1000).'كجم':($auctionDetailes->delivery->weight).'جم'}}</p>
                                            <p>القابلية للكسر:{{$out = $auctionDetailes->delivery->is_breakable=='yes'?'قابل للكسر':'غير قابل للكسر'}}</p>
                                            <p>التصنيف:{{ $auctionDetailes->delivery->type}}</p>
                                            @endif
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
    @endif
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
        var x = setInterval(function () {

            $(".time-counter").each(function () {
                var op  = $(this)
                var oneEndAt = $(this).attr("end-at");
                var countDownDate = new Date(oneEndAt).getTime();
                var now = new Date().getTime();
                var distance = countDownDate - now;

                if (distance <= 0){
                    $(this).css("text-align","center","height","80px").html("منتهى ");
                }else {
                    var days   = op.find('.timer_day').html(Math.floor(distance / (1000 * 60 * 60 * 24))) ;
                    var hours  = op.find(".timer_hour").html(Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))) ;
                    var min    = op.find(".timer_min").html(Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)));
                    var second = op.find(".timer_sec").html( Math.floor((distance % (1000 * 60)) / 1000));
                }


                // Get today's date and tme
                // Find the distance between now and the count down date


                // console.log(typeof days);
                // console.log(h);
                // console.log(m);
                // console.log(s);
                //do something later when date is reached

                // seconds
            }, 0)
        });
    </script>


    {{--    <script>--}}
{{--        // Set the date we're counting down to--}}
{{--        var countDownDate = new Date("{{$auctionDetailes->end_at}}").getTime();--}}

{{--        // Update the count down every 1 second--}}
{{--        var x = setInterval(function () {--}}

{{--            // Get todays date and time--}}
{{--            var now = new Date().getTime();--}}

{{--            // Find the distance between now an the count down date--}}
{{--            var distance = countDownDate - now;--}}

{{--            // Time calculations for days, hours, minutes and seconds--}}
{{--            var days = Math.floor(distance / (1000 * 60 * 60 * 24));--}}
{{--            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));--}}
{{--            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));--}}
{{--            var seconds = Math.floor((distance % (1000 * 60)) / 1000);--}}

{{--            // Display the result in the element with id="cont-down"--}}
{{--            document.getElementById("count-down").innerHTML = days + "d " + hours + "h " +--}}
{{--                minutes + "m " + seconds + "s ";--}}

{{--            // If the count down is finished, write some text--}}
{{--            if (distance < 0) {--}}
{{--                clearInterval(x);--}}
{{--                document.getElementById("count-down").innerHTML = "لقد إنتهى وقت المزاد";--}}
{{--            }--}}
{{--        }, 1000);--}}
{{--    </script>--}}

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
