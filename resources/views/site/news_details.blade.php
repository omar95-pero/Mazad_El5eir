<!doctype html>
<html lang="ar">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @include('layouts.site.css')

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


<section class="events-sec mt-5">
    <div class="event-area pt-5 pb-4">
        <div class="container-fluid mt-5">
            <div class="section-title">
                 <h2>{{__('last_news')}}</h2>
            </div>

            <div class="row">
                @foreach($last_news as $last)
                    <div class="col-lg-4">
                        <div class="event-item">
                            <img src="{{ $last->image }}" alt="Event">
                            <div class="inner">
                                <h4>{{Carbon\Carbon::parse($last->created_at)->toFormattedDateString()}}<span></span></h4>
                                <h3>
                                    <a href="{{route('news_details',$last->id)}}">{{$last->title}} </a>
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

                                <p class="text-white mt-4">
                                    {{$out = strlen($last->body)> 50 ?substr($last->body ,0,50)."..." : $last->body }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
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
