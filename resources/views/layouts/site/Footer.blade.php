<!-- Footer Start -->
<footer id="footer-section" class="footer-section">
    <div class="over-lay"></div>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4 class="footer-title"> {{__('mazad')}}</h4>
                    <div class="about-widget white-bg d-flex align-items-center justify-content-center p-1"
                         style="border-radius: 6px;">
                        <!-- <p class="logo-p"> الابداع الثالث لتقنية المعلومات توفر عليك عناء ادارة الهوية الرقمية بدون الحاجة لعشرات الموظفين
                        </p> -->
                        <img src="{{get_file(getSettings()->image)}}" class="footer-logo" alt="">
                    </div>
                </div>

                <div class="col-md-3">
                    <h4 class="footer-title"> {{__('mazad')}}</h4>
                    <div class="about-widget ">
                        <p class="logo-p">
                  {{getSettings()->body}}
                        </p>
                        <!-- <img src="img/logo1.png" class="footer-logo" alt=""> -->
                    </div>
                </div>

                <div class="col-md-3">
                    <h4 class="footer-title">{{__('company')}} </h4>
                    <ul class="sitemap-widget">
                        <li class="active"><a class="d-flex justify-content-between align-items-center" href="{{url('/ShowAuctions')}}">

                                المزادات
                            </a></li>
                        <li class="active"><a class="d-flex justify-content-between align-items-center" href="{{url('/AddAuction')}}">شارك
                                بشئ ثمين
                            </a></li>
                        <li class="active"><a class="d-flex justify-content-between align-items-center" href="">رابط
                            </a></li>
                        <li class="active"><a class="d-flex justify-content-between align-items-center" href="">رابط
                            </a></li>

                    </ul>
                </div>


                <div class="col-md-3">
                    <h4 class="footer-title"> {{__('download')}}

                    </h4>
                    <ul class="sitemap-widget">




                        <li class="active"><a class="d-flex justify-content-between align-items-center" href="{{getSettings()->google_play}}">
                                <img src="{{asset('assets/img/google-store-btn.png')}}" alt="">
                            </a>
                        </li>


                        <li class="active"><a class="d-flex justify-content-between align-items-center" href="{{getSettings()->app_store}}">
                                <img src="{{asset('assets/img/app-store-btn.png')}}" alt="">
                            </a>
                        </li>





                    </ul>
                </div>




            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 d-flex align-items-center">
                    <div class="copyright ">
                        <p>&copy; 2020 {{__('copyright')}} , <a href="#" target="_blank"> {{__('motowroon')}} </a>.</p>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6">
                    <div class="text-center ft-bottom-right ">


                        <div class="buttons ">
                            <!--Twitter-->
                            <a href="{{getSettings()->twitter}}" class="btn-floating m-0 btn-sm mx-1 btn-tw waves-effect waves-light" type="button"
                               role="button"><i class="fab fa-twitter"></i></a>

                            <!--Instagram-->
                            <a href="{{getSettings()->instagram}}" class="btn-floating m-0 mx-1 btn-sm btn-ins waves-effect waves-light" type="button"
                               role="button"><i class="fab fa-instagram"></i></a>

                            <!--Google +-->
                            <a href="{{getSettings()->google_plus}}" class="btn-floating m-0 mx-1 btn-sm btn-gplus waves-effect waves-light" type="button"
                               role="button"><i class="fab fa-google-plus-g"></i></a>

                            <!--Facebook-->
                            <a href="{{getSettings()->facebook}}" class="btn-floating mx-1 m-0 btn-sm  btn-fb waves-effect waves-light" type="button"
                               role="button"><i class="fab fa-facebook-f"></i></a>




                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
