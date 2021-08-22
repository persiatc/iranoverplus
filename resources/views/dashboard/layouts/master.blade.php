<!DOCTYPE html>
<!--
Project Name: PersiaTC
-->
<html lang="en" direction="rtl" style="direction: rtl;">
<!-- begin::Head -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="utf-8"/>

    <title>سامانه مبادلات  | {{ $title }}</title>
    <meta name="description" content="سامانه مبادلات تجهیزات مازاد صنعت نفت، گاز و پتروشیمی">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
    <!--end::Fonts -->

    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="/dashboard/assets/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css"/>
    <!--end::Page Vendors Styles -->


    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="/dashboard/assets/plugins/global/plugins.bundle.rtl.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/assets/css/style.bundle.rtl.css" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <!--end::Layout Skins -->

    <link rel="shortcut icon" href="/dashboard/assets/media/logos/favicon.ico"/>
    <link rel="icon" href="/dashboard/assets/media/logos/favicon.ico" type="image/x-icon"/>
    <link href="/dashboard/assets/plugins/global/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
    @yield('headerScripts')
    <style>
        .dt-print-view{
            font-family: iranyekan!important;
            padding: 50px!important;
            direction: rtl!important;
        }
        input, textarea{
            border-color: #374afb57!important;
        }
        .pwt-btn{
            font-family: iranyekan!important;
        }
        .header-row-cell{
            font-family: iranyekan!important;
        }

        .pwt-btn-today{
            font-family: iranyekan!important;
        }
        .card-title{
            font-family: iranyekan!important;
        }
        tspan{
            font-family: iranyekan!important;
        }
        td{
            font-family: iranyekan!important;
        }
        .select2-results__option{
            direction: rtl!important;
        }
        .select2-selection__rendered{
            direction: rtl!important;
        }
    </style>
</head>
<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-page--loading-enabled kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">

<!-- begin::Page loader -->

<!-- end::Page Loader -->
<!-- begin:: Page -->
@include('dashboard.layouts.header')
<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        @yield('content')


        <!-- begin:: Footer -->
            <div class="kt-footer  kt-footer--extended  kt-grid__item" id="kt_footer">

                <div style="padding: 0rem 0!important" class="kt-footer__bottom">
                    <div class="kt-container ">
                        <div class="kt-footer__wrapper">
                            <div class="kt-footer__logo">
                                <a href="{{ route('dashboard.index') }}">
                                    <img style="width: 70px;padding: 10px;" alt="Logo" src="/assets/img/logo0.png">
                                </a>
                                <div class="kt-footer__copyright">
                                    2020&nbsp;&copy;&nbsp;
                                    سامانه مبادلات تجهیزات مازاد نفت، گاز و پتروشیمی، طراحی و توسعه: شرکت ارتباطات پرشیا
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end:: Footer -->
    </div>
</div>
</div>

<!-- end:: Page -->



<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
    <i class="fa fa-arrow-up"></i>
</div>
<!-- end::Scrolltop -->
<!-- begin::Sticky Toolbar -->

<!-- end::Sticky Toolbar -->





</div>
</div>
<!--ENd:: Chat-->

<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#374afb",
                "light": "#ffffff",
                "dark": "#282a3c",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
</script>
<!-- end::Global Config -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="/dashboard/assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
<script src="/dashboard/assets/js/scripts.bundle.js" type="text/javascript"></script>
<!--end::Global Theme Bundle -->

<!--begin::Page Vendors(used by this page) -->
<script src="/dashboard/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
<script src="/dashboard/assets/plugins/custom/gmaps/gmaps.js" type="text/javascript"></script>
<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="/dashboard/assets/js/pages/dashboard.js" type="text/javascript"></script>
<!--end::Page Scripts -->
<script src="/dashboard/assets/plugins/global/sweetalert/sweetalert.min.js" type="text/javascript"></script>
@include('sweet::alert')

<script>
    $('.datepicker').datepicker({
        format: 'dd/mm/yyyy'
    });
</script>

<script type="text/javascript">
    !function(){var a=window,d=document;function g(){var g=d.createElement("script"),s="https://www.goftino.com/widget/Hqa6DI",l=localStorage.getItem("goftino");g.type="text/javascript",g.async=!0,g.src=l?s+"?o="+l:s;d.getElementsByTagName("head")[0].appendChild(g);}"complete"===d.readyState?g():a.attachEvent?a.attachEvent("onload",g):a.addEventListener("load",g,!1);}();
</script>


@yield('footerScripts')

</body>
<!-- end::Body -->

</html>
