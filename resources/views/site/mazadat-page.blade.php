<!doctype html>
<html lang="ar">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
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

    .pagination {
            display: inline-block;
        }

        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
            border: 1px solid #ddd;
            font-size: 22px;
        }

        .pagination a.active {
            background-color: #4CAF50;
            color: white;
            border: 1px solid #4CAF50;
        }

        .pagination a:hover:not(.active) {background-color: #ddd;}
    </style>
</head>
<body>
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
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////          //////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<section class="donations-area margin-top">
    <div class="title-top mb-5 d-flex align-items-center justify-content-center">
        <!-- <a href="index.html"> <i class="fad fa-home pl-2"></i> الرئيسية </a>
      <span> \ </span>
      <h3 class="font-weight-bold"> جميع المزادات  </h3> -->
        <!-- Search form -->
        <div class="row w-100">
            <div class="col-lg-7 mx-auto col-md-8 ">
                <form class=" d-flex align-items-center justify-content-center" action="{{route('search')}}"
                      method="post">
                    @csrf
                    <input class="form-control z-depth-1" name="search" type="text" placeholder="{{__('Search')}} ..."
                           aria-label="Search" style="height: 50px;">
                    <button type="submit" class="btn" style="padding: 10px 15px;
            border-radius: 4px;
            font-size: 20px;
            background: #107b50;
            color: white;"><i class="fad fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @if($auctions)
            @foreach ($auctions as $auction)
                @if($auction->status == 'done' )
                    <div style=" width:340px; " class="col-sm-6 col-lg-4 ">
                        <div class="donation-item">
                            <div class="img">
                                <img style="height: 200px; width:340px;" src="{{ get_file($auction->image) }}"
                                     alt="Donation">
                                <a class="common-btn" href="{{ route('auction.details',$auction->id) }}">{{__('auc_details')}}</a>
                            </div>
                            <div class="inner">
                                <div class="top">
                                    <a class="tags"
                                       href="{{ route('auction.details',$auction->id) }}"> {{ $auction->charity->name }}</a>
                                    <div>
                                        <h3>
                                            <a href="{{ route('auction.details',$auction->id) }}">{{ $auction ->item_name }}</a>
                                        </h3>
                                    </div>
                                    {{--                <p>--}}
                                    {{--                    {{$out = strlen($auction->item_detailes)> 50 ?substr($auction->item_detailes ,0,50)."..." : $auction->item_detailes }}--}}
                                    {{--                </p>--}}
{{--                                    <p id="demo-{{$auction->id}}"--}}
{{--                                       data-count="{{$timer =gmdate('Y-m-d h:m:s' , \Carbon\Carbon::parse($auction->end_at)->diffInSeconds(\Carbon\Carbon::now()))}}"--}}
{{--                                       end-at="{{$auction->end_at}}"--}}
{{--                                       class="count-down timer timer-counter" style="color: #e67412; font-size: 18px;"></p>--}}

                                    <div id="demo-{{$auction->id}}" style="height: 80px" class="countdown time-counter" end-at="{{$auction->end_at}}">
                                        @if($auction->end_at < now())
                                        <p class="no_time"></p>
                                        @endif
                                        @if($auction->end_at>now())
                                        <ul class="d-flex justify-content-center mb-0">
                                            <li><span id="seconds" class="timer_sec" ></span>{{__('sec')}}</li>

                                            <li><span id="minutes" class="timer_min"></span>{{__('min')}}</li>

                                            <li><span id="hours" class="timer_hour"></span>{{__('hr')}}</li>

                                            <li><span id="days" class="timer_day"></span>{{__('day')}}</li>
                                        </ul>
                                        @endif
                                    </div>
                                </div>
                                <div class="bottom">
                                    {{--                <div class="skill">--}}
                                    {{--                  <div class="skill-bar skill1 wow fadeInRightBig">--}}
                                    {{--                    <span class="skill-count2">--}}
                                    {{--                        @if($auction->target_price != 0)--}}
                                    {{--                        {{round(($auction->start_price/$auction->target_price)*100,2)}}%--}}
                                    {{--                        @endif--}}
                                    {{--                    </span>--}}
                                    {{--                  </div>--}}
                                    {{--                </div>--}}
                                    <ul>
                                        <li>
                                            <span>  <i class="fad fa-gavel mr-1"></i> {{__('start_price')}}  :</span> {{number_format($auction->start_price)}}
                                            {{__('LE')}}
                                        </li>
                                        <li style="padding-right: 10px ; border-right:1px dotted #eee "><span>  <i class="fad fa-sack-dollar" style="color:#ea1515 !important;">

                                                </i> {{__('best_price')}}   :</span>@foreach($auction->best_user as $bid) {{number_format($bid->bid_price)}}
                                            {{__('LE')}}@endforeach @if($auction->count_users == 0){{ 0 }} {{__('LE')}} @endif </li>
                                        {{--                    <li style="padding-right: 10px ; border-right:1px dotted #eee "> <p id="count-down" class="count-down" style="color: #e67412; font-size: 18px;"></p></li>--}}
                                    </ul>
                                    <h4 class="text-center"><span> {{$auction->count_users}} {{__('person')}} </span>{{__('they_bid')}}
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>

                @endif
            @endforeach
                @endif
        </div>
    <div class="d-flex justify-content-center">
        {!! $auctions->links() !!}
    </div>
    </div>
    <a href="{{ url('AddAuction') }}" class="AuctionAdd"><i class="far fa-plus"></i></a>
</section>

<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////          //////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
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
<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/mdb.min.js') }}"></script>
<script src="{{ asset('assets/js/smooth-scroll.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper.js') }}"></script>
<script src="{{ asset('assets/js/aos.js') }}"></script>
<script src="{{ asset('assets/js/dropify.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('assets/js/select2.js') }}"></script>
<script src="{{ asset('assets/js/fontawesome-pro.js') }}"></script>
<script src="{{ asset('assets/js/stars.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

<script>
    var x = setInterval(function () {

        $(".time-counter").each(function () {
            var op  = $(this)
            var oneEndAt = $(this).attr("end-at");
            var countDownDate = new Date(oneEndAt).getTime();
            var now = new Date().getTime();
            var distance = countDownDate - now;

            if (distance > 0){
                var days   = op.find('.timer_day').html(Math.floor(distance / (1000 * 60 * 60 * 24))) ;
                var hours  = op.find(".timer_hour").html(Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))) ;
                var min    = op.find(".timer_min").html(Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)));
                var second = op.find(".timer_sec").html( Math.floor((distance % (1000 * 60)) / 1000));
            }else {
                $(this).find(".no_time").css("text-align","center").html("منتهى ");
            }


            // Get today's date and tme
            // Find the distance between now and the count down date


            // console.log(typeof days);
            // console.log(h);
            // console.log(m);
            // console.log(s);
            //do something later when date is reached
            if(days < 0 && hours < 0 && min < 0 && second < 0) {
                let headline = document.getElementById("headline"),
                    countdown = document.getElementsByClassName("countdown"),
                    content = document.getElementById("content");

                headline.innerText = "منتهي!";
                countdown.style.display = "none";
                content.style.display = "block";

                clearInterval(x);
            }
            // seconds
        }, 0)
    });
</script>
{{--<script>--}}
{{--    var x = setInterval(function () {--}}
{{--      $(".timer-counter").each(function () {--}}
{{--          var oneEndAt = $(this).attr("end-at");--}}
{{--          var countDownDate = new Date(oneEndAt).getTime();--}}
{{--          // Get today's date and tme--}}
{{--          var now = new Date().getTime();--}}
{{--          // Find the distance between now and the count down date--}}
{{--          var distance = countDownDate - now;--}}
{{--          // Time calculations for days, hours, minutes and seconds--}}
{{--          var days = Math.floor(distance / (1000 * 60 * 60 * 24));--}}
{{--          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));--}}
{{--          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));--}}
{{--          var seconds = Math.floor((distance % (1000 * 60)) / 1000);--}}
{{--          // Display the result in the element with id="demo"--}}
{{--         // console.log(seconds);--}}
{{--          if(days < 0 && hours < 0 && minutes < 0 && seconds < 0){--}}
{{--              $(this).html("منتهى ");--}}
{{--          }--}}
{{--          else{--}}
{{--              $(this).html( days + "d " + hours + "h " + minutes + "m " + seconds + "s ");--}}
{{--          }--}}

{{--      })--}}
{{--    }, 1000);--}}


{{--</script>--}}
<script>
    $('#Header').load("Header.blade.php");
    $('#footer').load("Footer.blade.php");
</script>
<script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        slidesPerView: 'auto',
        // spaceBetween: 10,
        speed: 1500,
        loop: true,
        freeMode: true,
        loopedSlides: 5, //looped slides should be the same
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
        loop: true,
        effect: 'fade',
        keyboard: {
            enabled: true,
        },
        speed: 1500,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        loopedSlides: 5, //looped slides should be the same
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: galleryThumbs,
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
        },
    });
</script>
<script>
    var swiper = new Swiper('.cars', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        slidesPerView: 'auto',
        spaceBetween: 10,
        speed: 1000,
        loop: true,
        autoplay: {
            delay: 1500,
            disableOnInteraction: false,
        },
    });
</script>
<script>
    $("body").click(function(event) {
        $('.notifications').slideUp();
    });

    $(".notifications").click(function(event) {
        event.stopPropagation();
    });

    $(".nav-link.notificationsIcon").click(function(event) {
        event.stopPropagation();
        $('.notifications').slideToggle();
    });

</script>
@toastr_js
@toastr_render
</body>
</html>
