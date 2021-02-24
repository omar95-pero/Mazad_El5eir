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
  <link href="https://fonts.تصفحogleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    @toastr_css
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


    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////          //////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->

    <div class="title-top margin-top  d-flex align-items-center justify-content-start">
        <div class="contents d-flex align-items-center mr-4 justify-content-center">
            <a href="{{ route('index') }}"> <i class="fad fa-home pl-2"></i> الرئيسية </a>
            <span> \ </span>
            <h3 class="font-weight-bold"> تفاصيل المزاد </h3>

        </div>

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

                                <div class="info col-lg-7">

                                    <h3 class="mb-4">
                                        <a href="#"> المزاد عن {{ $auctionDetailes->item_name }} 
                                            <span class="float-left"><i class="fad fa-star"></i></span>
                                        </a>                                    
                                    </h3>
                                    <p>
                                       {{ $auctionDetailes->item_detailes }}
                                    </p>

                                    <div class="top-entry my-4">
                                        <div class="date">
                                            <i class="fad fa-tags pl-2"></i> أعلى سعر للمزاد :<strong
                                                class="last-price font-weight-bold px-2"> 
                                               
                                                  {{  $maxPrice}}
                                               
                                            </strong> جنية
                                        </div>
                                        <div class="date">
                                            <i class="fad fa-tags pl-2"></i> سعر بداية المزاد :<strong
                                                class="last-price font-weight-bold px-2"> 
                                               
                                                  {{  $auctionDetailes->start_price}}
                                               
                                            </strong> جنية
                                        </div>
                                        <div class="location">
                                            <i class="fad fa-user pl-2"></i> <strong>صاحب المزاد : </strong> <a
                                                href="profile.html"> {{ $auctionDetailes->user->name }}                                            </a>
                                        </div>
                                    </div>
                           <div  class="auction-people">
                                        <div class="row">
                            @foreach ($bids as $bid)                       
                                                
                                            <div  class="col-md-6 row my-2">

                                                <div class="col-3 d-flex align-items-center">
                                                    <img src="{{ asset('assets/img/300_9.jpg') }}" alt="">
                                                </div>
                                                <div class="col-9 d-flex align-items-center">
                                                    <div>
                                                        <a class="font-weight-bold">{{ $bid->user->name }}</a>
                                                        <h6 class="font-weight-bold">{{ $bid->bid_price }}جنية</h6>
                                                        <small class="d-block"> {{  $bid->created_at }} <span
                                                                class="mr-2 font-weight-bold"></span></small>
                                                    </div>
                                                </div>
                                            </div>


                             @endforeach

                                        </div>
                                    </div>

                                </div>


                                                <div class="thumb col-lg-5 rounded" data-fancybox="gallery" href="img/TopSales/car.jpg"
                  style="background-image: url({{ get_file($auctionDetailes->image) }});">
                  <span class="cats">لصالح جمعية رسالة</span>
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
                                            
                                        <form action="{{ route('bid',$auctionDetailes->id) }}" method="POST">
                                            @csrf
                                            <div class="col-lg-12">
                                            <div class="form-group">
                                            <input type="number" class="form-control" name="bid_price" placeholder="ادخل سعر المزايدة" required>
                                            <input type="hidden" class="form-control" name="Auction_id" value="{{ $auctionDetailes->id }}">
                                            </div>
                                           </div>
                                            <button id="price-input-show" class="btn btn-theme border" href="#">زايد
                                            الان</button>
                                         </form>
                                        @endauth

                                    </div>
                                    </div>
                                    <div class="w-100 py-3 d-flex justify-content-center align-items-center">
                                        <div id="mazad-input">
                                            <input class="position-relative" type="number" placeholder="مبلغ المزايدة">
                                            <button class="btn mx-2">إستكمال</button>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-lg-5 px-0">
                  <div class="gallery my-4 px-0">
                    <!-- Swiper -->
                    <div class="swiper-container">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <a data-fancybox="gallery" href="{{ get_file($auctionDetailes->image) }}">
                            <img src="{{ get_file($auctionDetailes->image) }}">
                          </a>
                        </div>
                        <div class="swiper-slide">
                          <a data-fancybox="gallery" href="{{ get_file($auctionDetailes->image) }}">
                            <img src="{{ get_file($auctionDetailes->image) }}">
                          </a>
                        </div>
                        <div class="swiper-slide">
                          <a data-fancybox="gallery" href="{{ get_file($auctionDetailes->image) }}">
                            <img src="{{ get_file($auctionDetailes->image) }}">
                          </a>
                        </div>
                        <div class="swiper-slide">
                          <a data-fancybox="gallery" href="{{ get_file($auctionDetailes->image) }}">
                            <img src="{{ get_file($auctionDetailes->image) }}">
                          </a>
                        </div>
                        <div class="swiper-slide">
                          <a data-fancybox="gallery" href="{{ get_file($auctionDetailes->image) }}">
                            <img src="{{ get_file($auctionDetailes->image) }}">
                          </a>
                        </div>
                        <div class="swiper-slide">
                          <a data-fancybox="gallery" href="{{ get_file($auctionDetailes->image) }}">
                            <img src="{{ get_file($auctionDetailes->image) }}">
                          </a>
                        </div>
                        <!-- <div class="swiper-slide" style="background-image: url(img/cairo.jpg);"></div>
                        <div class="swiper-slide" style="background-image: url(img/cairopage.jpg);"></div>
                        <div class="swiper-slide" style="background-image: url(img/hurgada.jpg);"></div>
                        <div class="swiper-slide" style="background-image: url(img/aswanpage.jpg);"></div>
                        <div class="swiper-slide" style="background-image: url(img/luxor.jpg);"></div>
                        <div class="swiper-slide" style="background-image: url(img/makadipage.jpeg);"></div>
                        <div class="swiper-slide" style="background-image: url(img/hurgadapage.jpg);"></div>
                      </div> -->
                      </div>
                    </div>
                  </div>
                </div>
                                {{-- <div class="col-lg-5 px-0">
                                    <div class="gallery my-4 px-0">
                                        <!-- Swiper -->
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <a data-fancybox="gallery" href="{{ asset('assets/img/car.jpg') }}">
                                                        <img src="{{ get_file($auctionDetailes->image) }}">
                                                    </a>
                                                {{-- </div>
                                                <div class="swiper-slide">
                                                    <a data-fancybox="gallery" href="img/car.jpg">
                                                        <img src="{{ asset('assets/img/car.jpg') }}">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a data-fancybox="gallery" href="{{ asset('assets/img/car.jpg') }}">
                                                        <img src="{{ asset('assets/img/car.jpg') }}">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a data-fancybox="gallery" href="{{ asset('assets/img/car.jpg') }}">
                                                        <img src="{{ asset('assets/img/car.jpg') }}">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a data-fancybox="gallery" href="{{ asset('assets/img/car.jpg') }}">
                                                        <img src="{{ asset('assets/img/car.jpg') }}">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a data-fancybox="gallery" href="{{ asset('assets/img/car.jpg') }}">
                                                        <img src="{{ asset('assets/img/car.jpg') }}">
                                                    </a>
                                                </div> --}}
                                                <!-- <div class="swiper-slide" style="background-image: url(img/cairo.jpg);"></div>
                        <div class="swiper-slide" style="background-image: url(img/cairopage.jpg);"></div>
                        <div class="swiper-slide" style="background-image: url(img/hurgada.jpg);"></div>
                        <div class="swiper-slide" style="background-image: url(img/aswanpage.jpg);"></div>
                        <div class="swiper-slide" style="background-image: url(img/luxor.jpg);"></div>
                        <div class="swiper-slide" style="background-image: url(img/makadipage.jpeg);"></div>
                        <div class="swiper-slide" style="background-image: url(img/hurgadapage.jpg);"></div>
                      </div> -->
                                            </div> --}}
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



    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////  footer  //////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <div id="footer"></div>
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--/////////////////////////////JavaScript/////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////////-->
    <script src="{{asset('assets/ js/jquery-3.4.1.min.js ')}}"></script>
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
    // Set the date we're counting down to
    var countDownDate = new Date("Feb 1, 2022 15:10:00").getTime();

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
        document.getElementById("count-down").innerHTML = "EXPIRED";
      }
    }, 1000);
  </script>


  <!-- Initialize Swiper -->
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
  <script>
    $(document).ready(function () {
      $("#price-input-show").click(function () {
        $("#mazad-input").toggle();
      });
    });
  </script>


</body>

</html>
@jquery
@toastr_js
@toastr_render
</html>