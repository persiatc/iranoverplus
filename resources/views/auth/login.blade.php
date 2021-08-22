@extends('website/master')

@section('content')



    <!--begin::Fonts-->


    <!--begin::Page Custom Styles(used by this page)-->
    <link href="/dashboard/assets/css/login-2.css" rel="stylesheet" type="text/css"/>
    <!--end::Page Custom Styles-->

    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="/dashboard/assets/css/login/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/assets/css/login/prismjs.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/assets/css/login/style.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles-->

    <!--begin::Layout Themes(used by all pages)-->

    <link href="/dashboard/assets/css/login/light.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/assets/css/login/light.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/assets/css/login/dark.css" rel="stylesheet" type="text/css"/>
    <link href="/dashboard/assets/css/login/dark.css" rel="stylesheet" type="text/css"/>        <!--end::Layout Themes-->

    <link rel="shortcut icon" href="/dashboard/assets/media/logos/favicon.ico"/>


    <style>
        @font-face {
            font-family: iranyekan;
            font-style: normal;
            font-weight: bold;
            src: url('/assets/fonts/eot/iranyekanwebbold.eot');
            src: url('/assets/fonts/eot/iranyekanwebbold.eot?#iefix') format('embedded-opentype'), /* IE6-8 */
            url('/assets/fonts/woff2/iranyekanwebbold.woff2') format('woff2'), /* FF39+,Chrome36+, Opera24+*/
            url('/assets/fonts/woff/iranyekanwebbold.woff') format('woff'), /* FF3.6+, IE9, Chrome6+, Saf5.1+*/
            url('/assets/fonts/ttf/iranyekanwebbold.ttf') format('truetype');
        }

        @font-face {
            font-family: iranyekan;
            font-style: normal;
            font-weight: 300;
            src: url('/assets/fonts/eot/iranyekanweblight.eot');
            src: url('/assets/fonts/eot/iranyekanweblight.eot?#iefix') format('embedded-opentype'), /* IE6-8 */
            url('/assets/fonts/woff2/iranyekanweblight.woff2') format('woff2'), /* FF39+,Chrome36+, Opera24+*/
            url('/assets/fonts/woff/iranyekanweblight.woff') format('woff'), /* FF3.6+, IE9, Chrome6+, Saf5.1+*/
            url('/assets/fonts/ttf/iranyekanweblight.ttf') format('truetype');
        }

        @font-face {
            font-family: iranyekan;
            font-style: normal;
            font-weight: normal;
            src: url('/assets/fonts/eot/iranyekanwebregular.eot');
            src: url('/assets/fonts/eot/iranyekanwebregular.eot?#iefix') format('embedded-opentype'), /* IE6-8 */
            url('/assets/fonts/woff2/iranyekanwebregular.woff2') format('woff2'), /* FF39+,Chrome36+, Opera24+*/
            url('/assets/fonts/woff/iranyekanwebregular.woff') format('woff'), /* FF3.6+, IE9, Chrome6+, Saf5.1+*/
            url('/assets/fonts/ttf/iranyekanwebregular.ttf') format('truetype');
        }
        @font-face {
            font-family: BYekan;
            font-style: normal;
            font-weight: bold;
            src: url('/assets/fonts/BYekan.eot');
            src: url('/assets/fonts/BYekan.eot?#iefix') format('embedded-opentype'), /* IE6-8 */
            url('/assets/fonts/BYekan.woff') format('woff'), /* FF3.6+, IE9, Chrome6+, Saf5.1+*/
            url('/assets/fonts/BYekan.ttf') format('truetype');
        }
        @font-face {
            font-family: Rezvan;
            font-style: normal;
            font-weight: bold;
            src: url('/assets/fonts/Rezvan.eot');
            src: url('/assets/fonts/Rezvan.eot?#iefix') format('embedded-opentype'), /* IE6-8 */
            url('/assets/fonts/Rezvan.woff') format('woff'), /* FF3.6+, IE9, Chrome6+, Saf5.1+*/
            url('/assets/fonts/Rezvan.ttf') format('truetype');
        }

        .nav-item{
            margin-right: 30px;
        }

        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: iranyekan!important;
        }

        p,
        span,
        a,
        div,
        h1 {
            font-family: iranyekan!important;
        }

        .overplus-rtl{
            direction: rtl;
            text-align: right;
        }
        .overplus-byekan {
            font-family: byekan !important;
        }
        .login.login-2 .login-form{
            max-width: 550px!important;
        }

    </style>
    <!-- Hotjar Tracking Code for keenthemes.com -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!--end::Head-->

<!--begin::Body-->
<body  id="kt_body"  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading"  >

<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div style="margin-top: 100px" class="login login-2 login-signin-on d-flex flex-row-fluid" id="kt_login">
        <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('/dashboard/assets/bg-3.jpg');">
            <div class="login-form text-center p-7 position-relative overflow-hidden">
                <!--begin::Login Header-->
                <div class="d-flex flex-center mb-3">
                    <a href="#">
                        <img src="/assets/img/logo0.png" class="max-h-150px" alt=""/>
                    </a>
                </div>
                <!--end::Login Header-->

                <!--begin::Login Sign in form-->
                <div class="login-signin">
                    <div class="mb-5">
                        <h4 class="mb-10">ورود به سامانه مبادلات تجهیزات مازاد صنعت نفت، گاز و پتروشیمی</h4>
                    </div>
                    <form class="form" method="POST" action="{{ route('login') }}" >
                        @csrf
                        <div class="form-group mb-5">
                            <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8 @error('email') is-invalid @enderror" type="text" placeholder=" نام کاربری" autofocus required name="email" value="{{ old('email') }}" autocomplete="off" />
                            @error('email')
                            <span style="direction: rtl" class="invalid-feedback pt-3" role="alert">
                                        <strong style="direction: rtl">{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mb-5">
                            <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8 @error('password') is-invalid @enderror" type="password" placeholder="رمز عبور" name="password" />
                            @error('password')
                            <span style="direction: rtl" class="invalid-feedback pt-3" role="alert">
                                        <strong style="direction: rtl" >{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
                            <a href="{{ route('password.request') }}" class=" text-hover-primary">رمز عبور را فراموش کرده اید؟</a>
                            <label class="checkbox m-0 ">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                مرا به خاطر بسپار
                                <span></span>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">ورود به سیستم</button>
                    </form>
                    <div class="mt-10">
					<span class="opacity-70 mr-4">
						حساب کاربری ندارید؟
					</span>
                        <a href="/register" class=" text-hover-primary font-weight-bold">عضویت در سامانه</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Login-->
</div>
<!--end::Main-->


<!--begin::Global Config(global config for global JS scripts)-->
<script>
    var KTAppSettings = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1200
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#3699FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#F3F6F9",
                    "dark": "#212121"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1F0FF",
                    "secondary": "#ECF0F3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#212121",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#ECF0F3",
                "gray-300": "#E5EAEE",
                "gray-400": "#D6D6E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#80808F",
                "gray-700": "#464E5F",
                "gray-800": "#1B283F",
                "gray-900": "#212121"
            }
        },
        "font-family": "Poppins"
    };
</script>
<!--end::Global Config-->

<!--begin::Global Theme Bundle(used by all pages)-->
<script src="/dashboard/assets/css/login/plugins.bundle.js"></script>
<script src="/dashboard/assets/css/login/prismjs.bundle.js"></script>
<script src="/dashboard/assets/css/login/scripts.bundle.js"></script>
<!--end::Global Theme Bundle-->


<!--begin::Page Scripts(used by this page)-->
<script src="/dashboard/assets/js/pages/custom/login/login-general.js"></script>


@endsection