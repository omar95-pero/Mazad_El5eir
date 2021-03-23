<script src="{{url('site')}}/js/jquery-3.4.1.min.js"></script>
<script src="{{url('site')}}/js/popper.min.js"></script>
<script src="{{url('site')}}/js/bootstrap.min.js"></script>
<script src="{{url('site')}}/js/mdb.min.js"></script>
<script src="{{url('site')}}/js/smooth-scroll.min.js"></script>
<script src="{{url('site')}}/js/swiper.js"></script>
<script src="{{url('site')}}/js/aos.js"></script>
<script src="{{url('site')}}/js/dropify.min.js"></script>
<script src="{{url('site')}}/js/jquery.appear.min.js"></script>
<script src="{{url('site')}}/js/grade.js"></script>
<script src="{{url('site')}}/js/odometer.min.js"></script>
<script src="{{url('site')}}/js/jquery.fancybox.min.js"></script>
<script src="{{url('site')}}/js/select2.js"></script>
<script src="{{url('site')}}/js/progress.js"></script>
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


{{--<script>--}}
{{--    $(document).ready(function () {--}}

{{--        // Hide sideNav--}}
{{--        $('.button-collapse').sideNav('hide');--}}
{{--        // Show sideNav--}}
{{--        $('.button-collapse').sideNav('show');--}}
{{--    });--}}
{{--</script>--}}


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
<script>
    $(document).ready(function () {
        // SideNav Default Options
        $('.button-collapse').sideNav({
            edge: 'right',
            breakpoint: 992,
            menuWidth: 240,
        });
    });
</script>
