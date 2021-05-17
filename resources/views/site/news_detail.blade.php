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

<section class="news mt-5">
    <div class="container pt-5">
        <div class="row mb-5 mt-5" style="background-color: #f9f9f9;">
            <div class=" col-md-12   m-0 py-3 bg-white " style="border-left: 1px dashed #bbbbbb;">
                <div class=" news-details">
                    <div class=" news-detailsImg">
                        <img src="{{get_file($news_detail->image)}}">
                    </div>
                    <div class=" my-4 news-detailsInfo">
                        <h3 class="sideTitle"> {{$news_detail->title}}  </h3>
                        <div class=" mb-2">
                            <span> <i class="fa fa-calendar color2"></i> </span>
                            <span class=" mx-1">{{$news_detail->created_at}}</span>
{{--                            <span class=" mx-1">اكتوبر</span>--}}
{{--                            <span class=" mx-1">2020</span>--}}
                        </div>
                        <p>
                            {{$news_detail->body}}
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////////////////////////-->
<!--////////////////////////  footer  //////////////////////////////////-->
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
      $(".timer-counter").each(function () {
          var oneEndAt = $(this).attr("end-at");
          var countDownDate = new Date(oneEndAt).getTime();
          // Get today's date and tme
          var now = new Date().getTime();
          // Find the distance between now and the count down date
          var distance = countDownDate - now;
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
          // Display the result in the element with id="demo"
         // console.log(seconds);
          if(days < 0 && hours < 0 && minutes < 0 && seconds < 0){
              $(this).html("منتهى ");
          }
          else{
              $(this).html( days + "d " + hours + "h " + minutes + "m " + seconds + "s ");
          }

      })
    }, 1000);


</script>
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
