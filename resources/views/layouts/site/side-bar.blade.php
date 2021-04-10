<!-- SideNav slide-out button -->
<a href="#" data-activates="slide-out" class="btn btn-primary p-3 button-collapse"
   style="position: fixed ; background-color: #107b50 !important ; z-index: 1200;"><i class="fas fa-bars"></i></a>

<!-- Sidebar navigation -->
<div id="slide-out" class="side-nav    " style="background-color: #fff !important; ">
    <ul class="custom-scrollbar" style="overflow-y: scroll;">
        <!-- Logo -->
        <li>
            <div class="logo-wrapper waves-light" style="height: 175px;">
                <a href="#"><img src="{{asset('assets/img/logo.png')}}" class="img-fluid flex-center"></a>
            </div>
        </li>
        <!--/. Logo -->

        <div class="container">
            <ul class="side-contents mt-4">
                <li> <a href="{{route('bestAuctions')}}"
                        style="height: 45px; color: #107b50; font-weight: bold; line-height: 40px ; font-size: 15px !important;">
                        <i class="fad fa-concierge-bell ml-1"></i> مزادات مميزة </a> </li>
                @foreach($categories as $category)
                <li> <a href="{{route('category',$category->id)}}"
                        style="height: 45px; color: #107b50; font-weight: bold; line-height: 40px ; font-size: 15px !important;"><i
                            class="fad fa-concierge-bell ml-1"></i> {{$category->title}}</a> </li>
                @endforeach
{{--                <li> <a href="{{route('clothes')}}"--}}
{{--                        style="height: 45px; color: #107b50; font-weight: bold; line-height: 40px ; font-size: 15px !important;"><i--}}
{{--                            class="fad fa-tshirt ml-1"></i> ملابس</a> </li>--}}
{{--                <li> <a href="{{route('mobiles')}}"--}}
{{--                        style="height: 45px; color: #107b50; font-weight: bold; line-height: 40px ; font-size: 15px !important;"><i--}}
{{--                            class="fad fa-tablet ml-1"></i> موبايلات وتابلت </a> </li>--}}
{{--                <li> <a href="{{route('electricDevices')}}"--}}
{{--                        style="height: 45px; color: #107b50; font-weight: bold; line-height: 40px ; font-size: 15px !important;"><i--}}
{{--                            class="fad fa-charging-station ml-1"></i> أجهزة كهربائيه</a> </li>--}}
{{--                <li> <a href=""--}}
{{--                        style="height: 45px; color: #107b50; font-weight: bold; line-height: 40px ; font-size: 15px !important;"><i--}}
{{--                            class="fad fa-couch ml-1"></i> اثاث وأدوات منزليه</a> </li>--}}
{{--                <li> <a href=""--}}
{{--                        style="height: 45px; color: #107b50; font-weight: bold; line-height: 40px ; font-size: 15px !important;">--}}
{{--                        <i class="fad fa-gamepad-alt ml-1"></i> العاب ومستلزمات أطفال</a> </li>--}}
{{--                <li> <a href=""--}}
{{--                        style="height: 45px; color: #107b50; font-weight: bold; line-height: 40px ; font-size: 15px !important;">--}}
{{--                        <i class="fad fa-gamepad-alt ml-1"></i>تحف وانتيكات</a> </li>--}}
{{--                <li> <a href=""--}}
{{--                        style="height: 45px; color: #107b50; font-weight: bold; line-height: 40px ; font-size: 15px !important;">--}}
{{--                        <i class="fad fa-gamepad-alt ml-1"></i>أجهزة رياضيه </a> </li>--}}
{{--                <li> <a href=""--}}
{{--                        style="height: 45px; color: #107b50; font-weight: bold; line-height: 40px ; font-size: 15px !important;">--}}
{{--                        <i class="fad fa-gamepad-alt ml-1"></i> أخرى </a> </li>--}}
            </ul>
        </div>


        <!--Social-->
        <li>
            <ul class="social">
                <li><a href="#" class="icons-sm fb-ic"><i class="fab fa-facebook-f"
                                                          style="font-size:18px ; color: rgb(38, 51, 167);"> </i></a></li>
                <li><a href="#" class="icons-sm gplus-ic"><i class="fab fa-google-plus-g"
                                                             style="font-size:18px ; color: rgb(163, 7, 7);"> </i></a></li>
                <li><a href="#" class="icons-sm tw-ic"><i class="fab fa-twitter"
                                                          style="font-size:18px ; color: rgb(23, 173, 243);"> </i></a></li>
            </ul>
        </li>
        <!--/Social-->
        <!--/. Side navigation links -->
    </ul>
    <div class="sidenav-bg "></div>
</div>
<!--/. Sidebar navigation -->
