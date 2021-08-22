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
            max-width: 750px!important;
        }
        .nav-item{
            margin-right: 30px;
        }
        .form-group{
            text-align: right;
            direction: rtl;
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
                            <h4 >عضویت در سامانه مبادلات تجهیزات مازاد صنعت نفت، گاز و پتروشیمی</h4>
                            <p style="direction: rtl" class="mb-10">جهت عضویت، ابتدا نوع شخصیت خودرا وارد نمایید.</p>
                        </div>


                        <p>
                            <a class="btn btn-primary" data-toggle="collapse" href="#haghighi" role="button" aria-expanded="false" aria-controls="haghighi">شخضیت حقیقی</a>
                            <a class="btn btn-primary" data-toggle="collapse" href="#hoghooghi" role="button" aria-expanded="false" aria-controls="hoghooghi">شخصیت حقوقی</a>
                        </p>


                            <div class="col-md-12">
                                <div class="collapse" id="hoghooghi">
                                    <div class="card card-body">
                                        <form class="form" method="POST" action="{{ route('login') }}" >
                                            @csrf


                                            <div class="form-group mb-5">
                                                <label class="font-size-h6 font-weight-bolder text-dark">نام شرکت:</label>
                                                <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="نام شرکت" autofocus required name="email" value="{{ old('email') }}" autocomplete="off" />
                                            </div>


                                            <div class="form-group mb-5">
                                                <label class="font-size-h6 font-weight-bolder text-dark">نوع شرکت:</label>
                                                <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="نوع شرکت" autofocus required name="email" value="{{ old('email') }}" autocomplete="off" />
                                            </div>


                                            <div class="form-group mb-5">
                                                <label class="font-size-h6 font-weight-bolder text-dark">شماره ثبت:</label>
                                                <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="شماره ثبت" autofocus required name="email" value="{{ old('email') }}" autocomplete="off" />
                                            </div>

                                            <div class="form-group mb-5">
                                                <label class="font-size-h6 font-weight-bolder text-dark">شناسه ملی:</label>
                                                <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="شناسه ملی" autofocus required name="email" value="{{ old('email') }}" autocomplete="off" />
                                            </div>

                                            <div class="form-group mb-5">
                                                <label class="font-size-h6 font-weight-bolder text-dark">کد اقتصادی:</label>
                                                <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="کد اقتصادی" autofocus required name="email" value="{{ old('email') }}" autocomplete="off" />
                                            </div>

                                            <div class="form-group mb-5">
                                                <label class="font-size-h6 font-weight-bolder text-dark">صاحبان حق امضا:</label>
                                                <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="صاحبان حق امضا" autofocus required name="email" value="{{ old('email') }}" autocomplete="off" />
                                            </div>

                                            <div class="form-group mb-5">
                                                <label class="font-size-h6 font-weight-bolder text-dark">استان:</label>
                                                <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="استان" autofocus required name="email" value="{{ old('email') }}" autocomplete="off" />
                                            </div>

                                            <div class="form-group mb-5">
                                                <label class="font-size-h6 font-weight-bolder text-dark">شهر:</label>
                                                <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="شهر" autofocus required name="email" value="{{ old('email') }}" autocomplete="off" />
                                            </div>

                                            <div class="form-group mb-5">
                                                <label class="font-size-h6 font-weight-bolder text-dark">آدرس:</label>
                                                <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="آدرس" autofocus required name="email" value="{{ old('email') }}" autocomplete="off" />
                                            </div>


                                            <div class="form-group mb-5">
                                                <label class="font-size-h6 font-weight-bolder text-dark">کدپستی:</label>
                                                <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="کدپستی" autofocus required name="email" value="{{ old('email') }}" autocomplete="off" />
                                            </div>


                                            <div class="form-group mb-5">
                                                <label class="font-size-h6 font-weight-bolder text-dark">تلفن ثابت:</label>
                                                <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="تلفن ثابت" autofocus required name="email" value="{{ old('email') }}" autocomplete="off" />
                                            </div>


                                            <div class="form-group mb-5">
                                                <label class="font-size-h6 font-weight-bolder text-dark">تلفن همراه:</label>
                                                <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="تلفن همراه" autofocus required name="email" value="{{ old('email') }}" autocomplete="off" />
                                            </div>



                                            <div class="form-group mb-5">
                                                <label class="font-size-h6 font-weight-bolder text-dark">آدرس ایمیل:</label>
                                                <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="آدرس ایمیل" autofocus required name="email" value="{{ old('email') }}" autocomplete="off" />
                                            </div>


                                            <div class="form-group mb-5">
                                                <label class="font-size-h6 font-weight-bolder text-dark">رمز عبور:</label>
                                                <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="رمز عبور" name="password" />

                                            </div>


                                            <button type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">عضویت در سیستم</button>
                                        </form>
                                    </div>
                                </div>
                            </div>


                        <div class="col-md-12">
                            <div class="collapse" id="haghighi">
                                <div class="card card-body">
                                    <form class="form" method="POST" action="{{ route('login') }}" >
                                        @csrf


                                        <div class="form-group mb-5">
                                            <label class="font-size-h6 font-weight-bolder text-dark">نام و نام خانوادگی:</label>
                                            <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="نام و نام خانوادگی" autofocus required name="email" value="{{ old('email') }}" autocomplete="off" />
                                        </div>


                                        <div class="form-group mb-5">
                                            <label class="font-size-h6 font-weight-bolder text-dark">تاریخ تولد:</label>
                                            <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="تاریخ تولد" autofocus required name="email" value="{{ old('email') }}" autocomplete="off" />
                                        </div>


                                        <div class="form-group mb-5">
                                            <label class="font-size-h6 font-weight-bolder text-dark">جنسیت:</label>
                                            <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="جنسیت" autofocus required name="email" value="{{ old('email') }}" autocomplete="off" />
                                        </div>

                                        <div class="form-group mb-5">
                                            <label class="font-size-h6 font-weight-bolder text-dark">شماره شناسنامه:</label>
                                            <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="شماره شناسنامه" autofocus required name="email" value="{{ old('email') }}" autocomplete="off" />
                                        </div>

                                        <div class="form-group mb-5">
                                            <label class="font-size-h6 font-weight-bolder text-dark">کد ملی:</label>
                                            <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="کد ملی" autofocus required name="email" value="{{ old('email') }}" autocomplete="off" />
                                        </div>

                                        <div class="form-group mb-5">
                                            <label class="font-size-h6 font-weight-bolder text-dark">استان:</label>
                                            <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="استان" autofocus required name="email" value="{{ old('email') }}" autocomplete="off" />
                                        </div>

                                        <div class="form-group mb-5">
                                            <label class="font-size-h6 font-weight-bolder text-dark">شهر:</label>
                                            <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="شهر" autofocus required name="email" value="{{ old('email') }}" autocomplete="off" />
                                        </div>

                                        <div class="form-group mb-5">
                                            <label class="font-size-h6 font-weight-bolder text-dark">آدرس:</label>
                                            <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="آدرس" autofocus required name="email" value="{{ old('email') }}" autocomplete="off" />
                                        </div>

                                        <div class="form-group mb-5">
                                            <label class="font-size-h6 font-weight-bolder text-dark">کد پستی:</label>
                                            <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="کد پستی" autofocus required name="email" value="{{ old('email') }}" autocomplete="off" />
                                        </div>


                                        <div class="form-group mb-5">
                                            <label class="font-size-h6 font-weight-bolder text-dark">تلفن ثابت:</label>
                                            <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="تلفن ثابت" autofocus required name="email" value="{{ old('email') }}" autocomplete="off" />
                                        </div>


                                        <div class="form-group mb-5">
                                            <label class="font-size-h6 font-weight-bolder text-dark">تلفن همراه:</label>
                                            <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="تلفن همراه" autofocus required name="email" value="{{ old('email') }}" autocomplete="off" />
                                        </div>



                                        <div class="form-group mb-5">
                                            <label class="font-size-h6 font-weight-bolder text-dark">آدرس ایمیل:</label>
                                            <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="آدرس ایمیل" autofocus required name="email" value="{{ old('email') }}" autocomplete="off" />
                                        </div>


                                        <div class="form-group mb-5">
                                            <label class="font-size-h6 font-weight-bolder text-dark">رمز عبور:</label>
                                            <input style="direction: rtl; text-align: right" class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="رمز عبور" name="password" />

                                        </div>


                                        <button type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">عضویت در سیستم</button>
                                    </form>
                                </div>
                            </div>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('.collapse').on('show.bs.collapse', function () {
                $('.collapse.show').each(function(){
                    $(this).collapse('hide');
                });
            });
        });
    </script>

    <!--begin::Page Scripts(used by this page)-->
    <script src="/dashboard/assets/js/pages/custom/login/login-general.js"></script>


@endsection
