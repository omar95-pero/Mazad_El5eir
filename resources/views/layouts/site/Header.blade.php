<div id="Header" class="main-header ">
    <nav class="navbar navbar-expand-lg navbar-light  fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="{{ url('site') }}/img/Logo.png">
                <!-- <h1>ZELZ</h1> -->
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
                <ul class="navbar-nav index-navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('index') }}">الرئيسية </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('auctions.detailes') }}">المزادات </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('aboutus') }}">من نحن </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('site.Contact') }}">تواصل معنا </a>
                    </li>
                    @guest


                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('login') }}">تسجيل الدخول </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('register') }}">التسجيل بالموقع </a>
                        </li>
                    @endguest
@auth
                    <li class=" nav-item">
                        <div class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ url('site') }}/img/300_9.jpg" class=" useImg">
                            </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="profile.html"> <i
                                        class="fad fa-user mx-2"></i>{{ auth()->user()->name }}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('تسجيل الخروج') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </div>
                    </li>

                </ul>

    
                <div class=" d-flex justify-content-center align-items-center">



                    <div class="nav-item position-relative">
                        <div class="nav-link notificationsIcon">
                            <i class="fad fa-bell"></i>
                            <span class=" badge"> 3 </span>
                        </div>
                        <div class=" notifications ">
                            <h6 class=" font-weight-bold px-3 pt-21 pb-2 border-bottom"> الاشعارات </h6>
                            <h5 class=" font-weight-bold"> </h5>

                            <div class="row">
                                <div class="col-3 p-1 d-flex justify-content-center align-items-center">
                                    <i class="far fa-bell"></i>
                                </div>
                                <div class="col-9 p-1 d-flex justify-content-start align-items-center pl-4">
                                    <a href="#">
                                        <h6>إشعار جديد </h6>
                                        <p> لديك إستشارة </p>
                                    </a>
                                </div>
                                <span class="closeIcon"><i class="fas fa-times"></i></span>
                            </div>

                            <div class="see-all pb-1 pt-2 d-flex  align-items-center justify-content-center">
                                <a href="notification page.html" class="text-dark">إظهار كل التعليقات</a>
                            </div>

                        </div>
                    </div>






                </div>
@endauth

            </div>
        </div>
    </nav>
</div>


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
    $(document).ready(function() {
        // SideNav Default Options
        $('.button-collapse').sideNav({
            edge: 'right',
            breakpoint: 992,
            menuWidth: 240,
        });
    });

</script>
