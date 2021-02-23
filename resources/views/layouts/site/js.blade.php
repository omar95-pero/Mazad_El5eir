<script src="{{url('site')}}/js/jquery-3.4.1.min.js"></script>
<script src="{{url('site')}}/js/popper.min.js"></script>
<script src="{{url('site')}}/js/bootstrap.min.js"></script>
<script src="{{url('site')}}/js/mdb.min.js"></script>
<script src="{{url('site')}}/js/smooth-scroll.min.js"></script>
<script src="{{url('site')}}/js/swiper.js"></script>
<script src="{{url('site')}}/js/aos.js"></script>
<script src="{{url('site')}}/js/dropify.min.js"></script>
<script src="{{url('site')}}/js/jquery.appear.min.js"></script>
<script src="{{url('site')}}/js/odometer.min.js"></script>
<script src="{{url('site')}}/js/jquery.fancybox.min.js"></script>
<script src="{{url('site')}}/js/select2.js"></script>
<script src="{{url('site')}}/js/fontawesome-pro.js"></script>
<script src="{{url('site')}}/js/stars.js"></script>
<script src="{{url('site')}}/js/main.js"></script>

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
