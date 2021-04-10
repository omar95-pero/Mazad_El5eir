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
    <link href="https://fonts.تصفحogleapis.com/css?family=Cairo&display=swap" rel="stylesheet">

    <script>
        @if(Session::has('message'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.success("{{ session('message') }}");
        @endif

            @if(Session::has('error'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.error("{{ session('error') }}");
        @endif

            @if(Session::has('info'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.info("{{ session('info') }}");
        @endif

            @if(Session::has('warning'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.warning("{{ session('warning') }}");
        @endif
    </script>
</head>

<body>
<!-- ================ spinner ================= -->
 <div class="spinner">
    <div class="loader">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
    </div>
</div>
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

  @yield('content')


  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////          //////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->

  <!-- <section class="top-auction pt-5">
    <div class="head d-flex align-items-center justify-content-center">
      <div class="contents">
        <h3> أبرز المزادات </h3>
        <p class="text-center py-3">أكثر المزادات تفاعلا   </p>
      </div>
    </div>

  </section> -->



  <!--============= Upcoming Auction Section Starts Here =============-->
  <section class="upcoming-auction padding-bottom padding-top">

@yield('index')

  </section>
  <!--============= Upcoming Auction Section Ends Here =============-->

  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////          //////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->

  <section class="donations-area pt-5 pb-4">
    <div class="container">
      <div class="section-title">
        <span class="sub-title">مزادات خيرية</span>
        <h2 class="py-3">كن سببا في جعل شخصا يبتسم</h2>
        <p>مزادات خيرية لصالح الخير , ساهم بأشيائك القيمة في الخير</p>
      </div>
      <div class="row">
      @foreach($showAuctions as $auction)

        <div class="col-sm-6 col-lg-4">
          <div class="donation-item">
            <div class="img">
              <img src="{{ get_file($auction->image) }}" alt="Donation">
              <a class="common-btn" href="{{ route('auction.details',$auction->id) }}">تفاصيل المزاد</a>
            </div>
            <div class="inner">
              <div class="top">
                <a class="tags" href="#">{{$auction->charity->name}}</a>
                <h3>
                  <a href="#">{{$auction->item_name}}</a>
                </h3>
{{--                <p>{{$out = strlen($auction->item_detailes)> 50 ?substr($auction->item_detailes ,0,50)."..." : $auction->item_detailes }}--}}
{{--                </p>--}}


{{--                  <div class="countdown timer-counter" end-at="{{$auction->end_at}}">--}}
{{--                      <ul class="d-flex justify-content-center mb-0">--}}
{{--                          <li><span id="seconds-{{$auction->id}}"></span>ثانية</li>--}}

{{--                          <li><span id="minutes-{{$auction->id}}"></span>دقيقة</li>--}}

{{--                          <li><span id="hours-{{$auction->id}}"></span>ساعة</li>--}}

{{--                          <li><span id="days-{{$auction->id}}"></span>يوم</li>--}}
{{--                      </ul>--}}
{{--                  </div>--}}
                  <div id="demo-{{$auction->id}}" class="countdown time-counter" style="height: 80px" end-at="{{$auction->end_at}}">
                      @if($auction->end_at<now())

                      <p class="no_time" ></p>
                      @endif
                      @if($auction->end_at>now())
                      <ul class="d-flex justify-content-center count_time mb-0 ">
                          <li><span id="seconds" class="timer_sec" ></span>ثانية</li>

                          <li><span id="minutes" class="timer_min"></span>دقيقة</li>

                          <li><span id="hours" class="timer_hour"></span>ساعة</li>

                          <li><span id="days" class="timer_day"></span>يوم</li>
                      </ul>
                          @endif
                  </div>





                  {{--                  <p id="demo-{{$auction->id}}"--}}
{{--                     data-count="{{$timer =gmdate('Y-m-d h:m:s' , \Carbon\Carbon::parse($auction->end_at)->diffInSeconds(\Carbon\Carbon::now()))}}"--}}
{{--                     end-at="{{$auction->end_at}}"--}}
{{--                     class="count-down timer timer-counter" style="color: #e67412; font-size: 18px;"></p>--}}

              </div>
              <div class="bottom">
{{--                <div class="skill">--}}
{{--                  <div class="skill-bar skill1 wow fadeInRightBig">--}}
{{--                    <span class="skill-count1"></span>--}}
{{--                  </div>--}}
{{--                </div>--}}
                <ul>
                  <li> <span>  <i class="fad fa-gavel mr-1"></i> سعر البدأ :</span> {{number_format($auction->start_price)}}ج.م</li>
                    <li style="padding-right: 10px ; border-right:1px dotted #eee "> <span>  <i class="fad fa-sack-dollar" style="color:#ea1515 !important;"></i> أعلى سعر  :</span>@foreach($auction->best_user as $bid) {{number_format($bid->bid_price)}}ج.م@endforeach</li>

{{--                    <li style="padding-right: 10px ; border-right:1px dotted #eee "> <p id="count-down" class="count-down" style="color: #e67412; font-size: 18px;"></p></li>--}}
                </ul>
                <h4 class="text-center"> <span>{{$auction->count_users }} شخص </span> قاموا بالمزايدة </h4>
              </div>
            </div>
          </div>
        </div>
          @endforeach
{{--        <div class="col-sm-6 col-lg-4">--}}
{{--          <div class="donation-item">--}}
{{--            <div class="img">--}}
{{--              <img src="{{ asset('assets/img/donation2.jpg') }}" alt="Donation">--}}
{{--              <a class="common-btn" href="aucation-details.blade.php">تفاصيل المزاد</a>--}}
{{--            </div>--}}
{{--            <div class="inner">--}}
{{--              <div class="top">--}}
{{--                <a class="tags" href="#"># مؤسسة مجدي يعقوب</a>--}}
{{--                <h3>--}}
{{--                  <a href="#">مزاد لصالح أطفال الصعيد</a>--}}
{{--                </h3>--}}
{{--                <p>مزاد على ساعة رولكس قديمة موديل 1960--}}
{{--                  بالفاتورة--}}
{{--                </p>--}}
{{--              </div>--}}
{{--              <div class="bottom">--}}
{{--                <div class="skill">--}}
{{--                  <div class="skill-bar skill2 wow fadeInRightBig">--}}
{{--                    <span class="skill-count2">95%</span>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <ul>--}}
{{--                  <li> سعر البدأ :5,500ج.م</li>--}}
{{--                    <li> <p id="count-down-2" class="count-down" style="color: #e67412; font-size: 18px;"></p></li>--}}
{{--                </ul>--}}
{{--                <h4> <span> 60 شخص </span> قاموا بالمزايدة </h4>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--        <div class="col-sm-6 col-lg-4">--}}
{{--          <div class="donation-item">--}}
{{--            <div class="img">--}}
{{--              <img src="{{ asset('assets/img/donation3.jpg') }}" alt="Donation">--}}
{{--              <a class="common-btn" href="aucation-details.blade.php">تفاصيل المزاد</a>--}}
{{--            </div>--}}
{{--            <div class="inner">--}}
{{--              <div class="top">--}}
{{--                <a class="tags" href="#"># مؤسسة مجدي يعقوب</a>--}}
{{--                <h3>--}}
{{--                  <a href="#">مزاد لصالح أطفال الصعيد</a>--}}
{{--                </h3>--}}
{{--                <p>مزاد على ساعة رولكس قديمة موديل 1960--}}
{{--                  بالفاتورة--}}
{{--                </p>--}}
{{--              </div>--}}
{{--              <div class="bottom">--}}
{{--                <div class="skill">--}}
{{--                  <div class="skill-bar skill3 wow fadeInRightBig">--}}
{{--                    <span class="skill-count3">90%</span>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <ul>--}}
{{--                  <li> سعر البدأ :  5,500ج.م</li>--}}
{{--                    <li> <p id="count-down-3" class="count-down" style="color: #e67412; font-size: 18px;"></p></li>--}}
{{--                </ul>--}}
{{--                <h4> <span> 60 شخص </span> قاموا بالمزايدة </h4>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--        <div class="col-sm-6 col-lg-4">--}}
{{--          <div class="donation-item">--}}
{{--            <div class="img">--}}
{{--              <img src="{{ asset('assets/img/donation4.jpg') }}" alt="Donation">--}}
{{--              <a class="common-btn" href="aucation-details.blade.php">تفاصيل المزاد</a>--}}
{{--            </div>--}}
{{--            <div class="inner">--}}
{{--              <div class="top">--}}
{{--                <a class="tags" href="#"># مؤسسة مجدي يعقوب</a>--}}
{{--                <h3>--}}
{{--                  <a href="#">مزاد لصالح أطفال الصعيد</a>--}}
{{--                </h3>--}}
{{--                <p>مزاد على ساعة رولكس قديمة موديل 1960--}}
{{--                  بالفاتورة--}}
{{--                </p>--}}
{{--              </div>--}}
{{--              <div class="bottom">--}}
{{--                <div class="skill">--}}
{{--                  <div class="skill-bar skill4 wow fadeInRightBig">--}}
{{--                    <span class="skill-count4">80%</span>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <ul>--}}
{{--                  <li> سعر البدأ : 5,500ج.م</li>--}}
{{--                    <li> <p id="count-down-4" class="count-down" style="color: #e67412; font-size: 18px;"></p></li>--}}
{{--                </ul>--}}
{{--                <h4> <span> 60 شخص </span> قاموا بالمزايدة </h4>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--        <div class="col-sm-6 col-lg-4">--}}
{{--          <div class="donation-item">--}}
{{--            <div class="img">--}}
{{--              <img src="{{ asset('assets/img/donation4.jpg') }}" alt="Donation">--}}
{{--              <a class="common-btn" href="aucation-details.blade.php">تفاصيل المزاد</a>--}}
{{--            </div>--}}
{{--            <div class="inner">--}}
{{--              <div class="top">--}}
{{--                <a class="tags" href="#"># مؤسسة مجدي يعقوب</a>--}}
{{--                <h3>--}}
{{--                  <a href="#">مزاد لصالح أطفال الصعيد</a>--}}
{{--                </h3>--}}
{{--                <p>مزاد على ساعة رولكس قديمة موديل 1960--}}
{{--                  بالفاتورة--}}
{{--                </p>--}}
{{--              </div>--}}
{{--              <div class="bottom">--}}
{{--                <div class="skill">--}}
{{--                  <div class="skill-bar skill5 wow fadeInRightBig">--}}
{{--                    <span class="skill-count5">75%</span>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <ul>--}}
{{--                  <li> سعر البدأ :  5,500ج.م</li>--}}
{{--                    <li> <p id="count-down-5" class="count-down" style="color: #e67412; font-size: 18px;"></p></li>--}}
{{--                </ul>--}}
{{--                <h4> <span> 60 شخص </span> قاموا بالمزايدة </h4>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--        <div class="col-sm-6 col-lg-4">--}}
{{--          <div class="donation-item">--}}
{{--            <div class="img">--}}
{{--              <img src="{{ asset('assets/img/donation6.jpg') }}" alt="Donation">--}}
{{--              <a class="common-btn" href="aucation-details.blade.php">تفاصيل المزاد</a>--}}
{{--            </div>--}}
{{--            <div class="inner">--}}
{{--              <div class="top">--}}
{{--                <a class="tags" href="#"># مؤسسة مجدي يعقوب</a>--}}
{{--                <h3>--}}
{{--                  <a href="#">مزاد لصالح أطفال الصعيد</a>--}}
{{--                </h3>--}}
{{--                <p>مزاد على ساعة رولكس قديمة موديل 1960--}}
{{--                  بالفاتورة--}}
{{--                </p>--}}
{{--              </div>--}}
{{--              <div class="bottom">--}}
{{--                <div class="skill">--}}
{{--                  <div class="skill-bar skill6 wow fadeInRightBig">--}}
{{--                    <span class="skill-count6">70%</span>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <ul>--}}
{{--                  <li> سعر البدأ :  5,500ج.م</li>--}}
{{--                    <li> <p id="count-down-6" class="count-down" style="color: #e67412; font-size: 18px;"></p></li>--}}
{{--                </ul>--}}
{{--                <h4> <span> 60 شخص </span> قاموا بالمزايدة </h4>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
      </div>

      <div class="w-100 py-3 d-flex align-items-center justify-content-center">
        <a href="{{route('auctions')}}" class="see-all"> كل المزادات </a>
      </div>

    </div>
  </section>


  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////          //////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->
  <!--////////////////////////////////////////////////////////////////////////////////-->

  <!-- Start Counter Area -->
  <section class="counter-area py-3" style="direction: ltr;">

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-sm-6" data-aos="zoom-in" data-aos-duration="1100">
          <div class="single-counter">
            <h2>
                <i class="fad fa-hand-holding-heart mr-1"></i>
                <br>
              <span class="odometer" data-count="{{$charities}}">00</span>
            </h2>

            <p>جمعية خيرية</p>

            <div class="counter-shape">
              <!-- <img src="{{ asset('') }}"img/counter-shape.png" alt="Image"> -->
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6" data-aos="zoom-in" data-aos-duration="1100">
          <div class="single-counter">
            <h2>
                <i class="fad fa-sack-dollar"></i>
                <br>
              <span class="odometer" data-count="{{$auction->total}}">-1000</span>
{{--              <span class="target">+</span>--}}
            </h2>

            <p>اجمالي التبرعات</p>

            <div class="counter-shape">
              <!-- <img src="{{ asset('') }}"img/counter-shape.png" alt="Image"> -->
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6" data-aos="zoom-in" data-aos-duration="1100">
          <div class="single-counter">
            <h2>
                <i class="fad fa-user-crown mr-1"></i>
                <br>
              <span class="odometer" data-count="{{$count_bids}}">-1000</span>
            </h2>

            <p>مزايد </p>

            <div class="counter-shape">
              <!-- <img src="{{ asset('') }}"img/counter-shape.png" alt="Image"> -->
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6" data-aos="zoom-in" data-aos-duration="1100">
          <div class="single-counter">
            <h2>
                <i class="fad fa-gavel mr-1"></i>
                <br>
              <span class="odometer" data-count="{{$count_auctions}}">00</span>
              <!-- <span class="target">%</span> -->
            </h2>

            <p>مزاد </p>

            <div class="counter-shape">
              <!-- <img src="{{ asset('') }}"img/counter-shape.png" alt="Image"> -->
            </div>
          </div>


        </div>
      </div>
    </div>
  </section>
  <!-- End Counter Area -->



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
  <section class="events-sec">
    <div class="event-area pt-5 pb-4">
      <div class="container">
        <div class="section-title">
          <span class="sub-title">مزاد الخير </span>
          <h2>أخر الأخبار</h2>
        </div>
        <div class="row">
            @foreach($last_news as $last)
          <div class="col-lg-6">
            <div class="event-item">
              <img src="{{ $last->image }}" alt="Event">
              <div class="inner">
                <h4>{{Carbon\Carbon::parse($last->created_at)->toFormattedDateString()}}<span></span></h4>
                <h3>
                  <a href="{{route('news')}}">{{$last->title}} </a>
                </h3>
                <ul>
                  <li>
                    <i class="fal fa-stopwatch"></i>
                    <span>{{$last->created_at}}</span>
                  </li>
                  <!-- <li>
                    <i class="fal fa-map-marker-check"></i>
                    <span>Australia</span>
                  </li> -->
                </ul>
              </div>
            </div>
          </div>
            @endforeach
        </div>
      </div>
    </div>
      <div class="w-100 py-3 d-flex align-items-center justify-content-center" style="    background: #f8f8f8;
    font-size: 20px;">
          <a href="{{route('news')}}" class="see-all" style="color: #0e3d67"> عرض الاخبار </a>
      </div>
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
  <section class="CarsSlider">
    <div class="container">
      <div class=" Title ">
        <h2>الجمعيات</h2>
      </div>
      <div class="swiper-container cars">
        <div class="swiper-wrapper">
          @foreach($charitiesImages as $charity)
          <a href="#!" class="swiper-slide "><img src="{{ get_file($charity->image) }}"></a>
          @endforeach
          @foreach($charitiesImages as $charity)
                 <a href="#!" class="swiper-slide "><img src="{{ get_file($charity->image) }}"></a>
          @endforeach
{{--          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/2.png') }}"></a>--}}
{{--          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/3.png') }}"></a>--}}
{{--          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/4.png') }}"></a>--}}
{{--          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/5.png') }}"></a>--}}
{{--          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/1.png') }}"></a>--}}
{{--          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/2.png') }}"></a>--}}
{{--          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/3.png') }}"></a>--}}
{{--          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/4.png') }}"></a>--}}
{{--          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/5.png') }}"></a>--}}
{{--          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/1.png') }}"></a>--}}
{{--          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/2.png') }}"></a>--}}
{{--          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/3.png') }}"></a>--}}
{{--          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/4.png') }}"></a>--}}
{{--          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/5.png') }}"></a>--}}
{{--          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/1.png') }}"></a>--}}
{{--          <a href="#!" class="swiper-slide "><img src="{{ asset('assets/img/charity-logos/1.png') }}"></a>--}}

          <!-- <a href="#!" class="swiper-slide "><img src="img/cars/dodge-icon.jpg"></a> -->
        </div>
        <!-- Add Arrows -->
        <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> -->
      </div>
    </div>
  </section>

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

            if (distance>0){
                var days   = op.find('.timer_day').html(Math.floor(distance / (1000 * 60 * 60 * 24))) ;
                var hours  = op.find(".timer_hour").html(Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))) ;
                var min    = op.find(".timer_min").html(Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)));
                var second = op.find(".timer_sec").html( Math.floor((distance % (1000 * 60)) / 1000));
            }else {
               $(".count_time").hide();
                $(this).find(".no_time").css("text-align","center").html("منتهى ");
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

{{--<script>--}}
{{--    (function () {--}}
{{--        const second = 1000,--}}
{{--            minute = second * 60,--}}
{{--            hour = minute * 60,--}}
{{--            day = hour * 24;--}}

{{--        let birthday = "Sep 30, 2021 00:00:00",--}}
{{--            countDown = new Date(birthday).getTime(),--}}
{{--            x = setInterval(function() {--}}

{{--                let now = new Date().getTime(),--}}
{{--                    distance = countDown - now;--}}

{{--                    document.getElementById("days").innerText = Math.floor(distance / (day)),--}}
{{--                    document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),--}}
{{--                    document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),--}}
{{--                    document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);--}}

{{--                //do something later when date is reached--}}
{{--                if (distance < 0) {--}}
{{--                    let headline = document.getElementById("headline"),--}}
{{--                        countdown = document.getElementsByClassName("countdown"),--}}
{{--                        content = document.getElementById("content");--}}

{{--                    headline.innerText = "It's my birthday!";--}}
{{--                    countdown.style.display = "none";--}}
{{--                    content.style.display = "block";--}}

{{--                    clearInterval(x);--}}
{{--                }--}}
{{--                //seconds--}}
{{--            }, 0)--}}
{{--    }());--}}
{{--</script>--}}
{{--<script>--}}
{{--    var x = setInterval(function () {--}}
{{--        $(".timer-counter").each(function () {--}}
{{--            var oneEndAt = $(this).attr("end-at");--}}
{{--            var countDownDate = new Date(oneEndAt).getTime();--}}
{{--            // Get today's date and tme--}}
{{--            var now = new Date().getTime();--}}
{{--            // Find the distance between now and the count down date--}}
{{--            var distance = countDownDate - now;--}}
{{--            // Time calculations for days, hours, minutes and seconds--}}
{{--            var days = Math.floor(distance / (1000 * 60 * 60 * 24));--}}
{{--            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));--}}
{{--            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));--}}
{{--            var seconds = Math.floor((distance % (1000 * 60)) / 1000);--}}
{{--            // Display the result in the element with id="demo"--}}
{{--            // console.log(seconds);--}}
{{--            if(days < 0 && hours < 0 && minutes < 0 && seconds < 0){--}}
{{--                $(this).html("منتهى ");--}}
{{--            }--}}
{{--            else{--}}
{{--                $(this).html( days + "d " + hours + "h " + minutes + "m " + seconds + "s ");--}}
{{--            }--}}

{{--        })--}}
{{--    }, 1000);--}}


{{--</script>--}}

@toastr_js
@toastr_render
</body>

</html>
