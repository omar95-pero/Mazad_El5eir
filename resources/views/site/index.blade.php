@extends('layouts.site.index')
@include('layouts.site.Header')
@section('content')
    <section class=" main ">

        <!-- Swiper -->
        <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(img/p1.jpg)">
                    <div class="galleryContent">
                        <!-- <h6> مصر - الإسكندرية </h6> -->
                        <h1> مزادات خيرية لصالح الخير </h1>
                        <p>اختتمت في نهاية الأسبوع الماضي فعاليات المزاد الخيري السنوي

                        </p>
                        <button class=" btn"> تصفح </button>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image:{{ asset('assets/img/p2.jpg') }}">
                    <div class="galleryContent">
                        <!-- <h6> egypt - cairo </h6> -->
                        <h1> مزادات خيرية لصالح الخير </h1>
                        <p>اختتمت في نهاية الأسبوع الماضي فعاليات المزاد الخيري السنوي</p>
                        <button class=" btn"> تصفح </button>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image:{{ asset('assets/img/p3.jpg') }}">
                    <div class="galleryContent">
                        <!-- <h6> egypt - cairo </h6> -->
                        <h1> مزادات خيرية لصالح الخير </h1>
                        <p>اختتمت في نهاية الأسبوع الماضي فعاليات المزاد الخيري السنوي
                        </p>
                        <button class=" btn"> تصفح </button>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image:{{ asset('assets/img/p4.jpg') }}">
                    <div class="galleryContent">
                        <!-- <h6> egypt - cairo </h6> -->
                        <h1>مزادات خيرية لصالح الخير </h1>
                        <p>اختتمت في نهاية الأسبوع الماضي فعاليات المزاد الخيري السنوي
                        </p>
                        <button class=" btn"> تصفح </button>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image:{{ asset('assets/img/p5.jpg') }}">
                    <div class="galleryContent">
                        <!-- <h6> egypt - cairo </h6> -->
                        <h1>مزادات خيرية لصالح الخير </h1>
                        <p>اختتمت في نهاية الأسبوع الماضي فعاليات المزاد الخيري السنوي
                        </p>
                        <button class=" btn"> تصفح </button>
                    </div>
                </div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
        <div class="swiper-container gallery-thumbs">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="thumbsImg"><img src="{{ asset('assets/img/p1.jpg') }}"></div>
                </div>
                <div class="swiper-slide">
                    <div class="thumbsImg"><img src="{{ asset('assets/img/p2.jpg') }}"></div>
                </div>
                <div class="swiper-slide">
                    <div class="thumbsImg"><img src="{{ asset('assets/img/p3.jpg') }}"></div>
                </div>
                <div class="swiper-slide">
                    <div class="thumbsImg"><img src="{{ asset('assets/img/p4.jpg') }}"></div>
                </div>
                <div class="swiper-slide">
                    <div class="thumbsImg"><img src="{{ asset('assets/img/p5.jpg') }}"></div>
                </div>


            </div>
        </div>
@auth
    
        <a href="{{ url('AddAuction') }}" class="AuctionAdd"><i class="far fa-plus"></i></a>
@endauth
    
    </section>
@endsection
