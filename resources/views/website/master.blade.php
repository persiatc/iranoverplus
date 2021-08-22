<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>سامانه مبادلات تجهیزات و قطعات مازاد حوزه نفت، گاز و پتروشیمی</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/line-icons.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slicknav.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" />
    <link rel="stylesheet" id="colors" href="{{ asset('assets/css/colors/darkBlue.css') }}" type="text/css">
</head>
<body>
<header id="header-wrap" class="overplus-rtl">


    <nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="منو موبایل">
                    <span class="navbar-toggler-icon"></span>
                    <span class="lni-menu"></span>
                    <span class="lni-menu"></span>
                    <span class="lni-menu"></span>
                </button>
                <a href="/" class="navbar-brand"><img style="    margin-bottom: 10px;" src="assets/img/logo0.png" alt="" />
                    <span style="color: #3e4094; font-size: 15px">ایران اورپلاس</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav mr-auto w-100 justify-content-center">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a class="nav-link" href="/" >صفحه اصلی</a></li>
                    <li class="nav-item {{ request()->is('aboutUs') ? 'active' : '' }}"><a class="nav-link" href="{{ route('aboutUs') }}">درباره سامانه</a></li>
                    <li class="nav-item {{ request()->is('list') ? 'active' : '' }} {{ request()->is('details') ? 'active' : '' }} "><a class="nav-link" href="{{ route('list') }}" >آخرین آگهی ها</a></li>
                    <li class="nav-item"><a target="_blank" class="nav-link " href="/terms.pdf" >قوانین</a></li>
                    <li class="nav-item {{ request()->is('faq') ? 'active' : '' }}"><a class="nav-link" href="{{ route('faq') }}" >سوالات متداول</a></li>
                    <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}"><a class="nav-link " href="{{ route('contact') }}" >تماس باما</a></li>
                </ul>
                @auth()
                    <a style="margin: 10px;" class="btn btn-common" href="/register">مشاهده سامانه</a>
                @endauth()
                @guest()
                    <a style="margin: 10px;background-color: #e04948!important; color: white!important;" class="btn btn-common" href="/login"><i style="color: white!important" class="lni lni-users"></i> ورود</a>
                    <a style="margin: 10px;background-color: #e04948!important;color: white!important" class="btn btn-common" href="/register"><i style="color: white!important" class="lni-pencil-alt"></i> عضویت </a>
                @endguest()
            </div>
        </div>

        <ul class="mobile-menu">
            <li class="nav-item"><a class="nav-link" href="/" >صفحه اصلی</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('aboutUs') }}">درباره سامانه</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('faq') }}" >سوالات متداول</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('list') }}" >آخرین آگهی ها</a></li>
            <li class="nav-item"><a class="nav-link" href="" >قوانین</a></li>
            <li class="nav-item"><a class="nav-link " href="{{ route('contact') }}" >تماس باما</a></li>

        </ul>
    </nav>

</header>

@yield('content')

<footer class="overplus-rtl">
    <section class="footer-Content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                    <div class="widget">
                        <h3 class="block-title">درباره سامانه</h3>
                        <div class="textwidget">
                            <p>برای معرفی تجهیزات نفت، گاز و پتروشیمی ابتدا نیاز است اطلاعات مختصری راجع به تاریخچه این صنعت داشته باشیم. کلمه‌ پتروشیمی در اصل ترکیبی از دو واژه "پترول" و "شیمی" است که معنای لغوی این عبارت تبدیل فراورده‌های نفت خام یا گاز طبیعی به محصولات مصرفی می‌باشد. </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                    <div class="widget">
                        <h3 class="block-title">دسترسی سریع</h3>
                        <ul style="margin-right: 30px" class="menu">
                            <li><a href="#"></a></li>
                            <li><a href="{{ route('aboutUs') }}">- درباره ما</a></li>
                            <li><a href="#"></a></li>
                            <li><a href="{{ route('contact') }}">- تماس باما</a></li>
                            <li><a href="#"> </a></li>
                            <li><a href="{{ route('faq') }}">- سوالات متداول</a></li>
                            <li><a href="#"> </a></li>
                            <li><a href="">- قوانین و شرایط</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                    <div class="widget">
                        <h3 class="block-title">اطلاعات تماس</h3>
                        <ul class="contact-footer">
                            <li>
                                <strong><i class="lni-phone"></i></strong>
                                <span class="overplus-byekan">۸۷۷۰۰۱۱۲ ۰۲۱</span>
                            </li>
                            <li>
                                <strong><i class="lni-envelope"></i></strong>
                                <span>Info@IranOverplus.com  <br /></span>
                            </li>
                            <li>
                                <strong><i class="lni-map-marker"></i></strong>
                                <span>
                                            <a href="#">
                                                تهران - خیابان کریم خان زند - خیابان خردمند شمالی نبش اعرابی سوم - پلاک ۹۴ - طبقه دوم
                                            </a>
                                        </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-info text-center">
                        <p>طراحی و توسعه در  <a href="http://www.persiatc.com/" target="_blank">دپارتمان فناوری اطلاعات و ارتباطات شرکت ارتباطات پرشیا</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="back-to-top">
    <i class="lni-chevron-up"></i>
</a>

<script type="text/javascript">
    !function(){var a=window,d=document;function g(){var g=d.createElement("script"),s="https://www.goftino.com/widget/Hqa6DI",l=localStorage.getItem("goftino");g.type="text/javascript",g.async=!0,g.src=l?s+"?o="+l:s;d.getElementsByTagName("head")[0].appendChild(g);}"complete"===d.readyState?g():a.attachEvent?a.attachEvent("onload",g):a.addEventListener("load",g,!1);}();
</script>

<div id="preloader">
    <div class="loader" id="loader-1"></div>
</div>

<!---start GOFTINO code--->
<!---end GOFTINO code--->

<script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.min.js"></script>
<script src="assets/js/summernote.js"></script>
</body>
</html>
