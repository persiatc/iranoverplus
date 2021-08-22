@extends('website/master')

@section('content')

    <style>
        ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: black!important;
            opacity: 1; /* Firefox */
        }

        :-ms-input-placeholder { /* Internet Explorer 10-11 */
            color: black!important;
        }

        ::-ms-input-placeholder { /* Microsoft Edge */
            color: black!important;
        }

    </style>

    <div id="hero-area">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-9 col-xs-12 text-center">
                    <div class="contents">
                        <h1 class="head-title"> سامانه مبادلات تجهیزات مازاد صنعت نفت، گاز و پتروشیمی </h1>
                        <p>خرید و فروش تجهیزات مازاد پروژه های صنعت نفت، گاز و پتروشیمی</p>
                        <div class="search-bar">
                            <div class="search-inner">
                                <form style="direction: rtl" class="search-form">

                                    <button class="btn btn-common" type="button"><i class="lni-search"></i> جستجو</button>

                                    <div class="form-group">
                                        <input style="margin-right: 10px;" type="text" name="customword" class="form-control" placeholder="نام یا کد کالا" />
                                    </div>


                                    <div class="form-group inputwithicon">
                                        <div class="select">
                                            <select>
                                                <option value="none">انتخاب دسته بندی</option>
                                                <option value="none">تولید و حفاری</option>
                                                <option value="none">تاسيسات و ماشين آلات</option>
                                                <option value="none">حمل و نقل</option>
                                                <option value="none">ماشن آلات و ابزار دقیق</option>
                                                <option value="none">لوازم ساختمانی</option>
                                                <option value="none">الکتریکی و مخابرات</option>
                                                <option value="none">لوله، شیر و اتصالات</option>
                                                <option value="none">مصالح ساختمانی و فلزات</option>
                                                <option value="none">ابزار آلات</option>
                                            </select>
                                        </div>
                                        <i class="lni-menu"></i>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<section id="categories">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div id="categories-icon-slider" class="categories-wrapper owl-carousel owl-theme">
                    <div class="item">
                        <a href="{{ route('list') }}">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img style="height: 50px" src="assets/img/icons/drilling.png" alt="" />
                                    </div>
                                    <h4>تولید و حفاری</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ route('list') }}">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img style="height: 50px" src="assets/img/icons/facilities.png" alt="" />
                                    </div>
                                    <h4>تاسيسات و ماشين آلات</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ route('list') }}">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img style="height: 50px" src="assets/img/icons/transportation.png" alt="" />
                                    </div>
                                    <h4>حمل و نقل</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ route('list') }}">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img style="height: 50px" src="assets/img/icons/machinery.png" alt="" />
                                    </div>
                                    <h4> ماشن آلات و ابزار دقیق</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ route('list') }}">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img style="height: 50px" src="assets/img/icons/construction.png" alt="" />
                                    </div>
                                    <h4>لوازم ساختمانی</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ route('list') }}">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img style="height: 50px" src="assets/img/icons/antenna.jpg" alt="" />
                                    </div>
                                    <h4> الکتریکی و مخابرات</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ route('list') }}">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img style="height: 50px" src="assets/img/icons/pipe.png" alt="" />
                                    </div>
                                    <h4>لوله، شیر و اتصالات</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ route('list') }}">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img style="height: 50px" src="assets/img/icons/metal.png" alt="" />
                                    </div>
                                    <h4>مصالح ساختمانی و فلزات</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ route('list') }}">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img style="height: 50px" src="assets/img/icons/tools.png" alt="" />
                                    </div>
                                    <h4>ابزار آلات</h4>
                                </div>
                            </div>
                        </a>
                    </div>



                    <div class="item">
                        <a href="{{ route('list') }}">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img style="height: 50px" src="assets/img/icons/chemical.png" alt="" />
                                    </div>
                                    <h4>رنگ و مواد شیمیایی</h4>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="item">
                        <a href="{{ route('list') }}">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img style="height: 50px" src="assets/img/icons/safety.png" alt="" />
                                    </div>
                                    <h4>لوازم دفتر و ایمنی</h4>
                                </div>
                            </div>
                        </a>
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>



<section class="featured-lis section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
                <h3 class="section-title">آخرین آگهی ها</h3>
                <div id="new-products" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="product-item">
                            <div class="carousel-thumb">
                                <img class="img-fluid" style="height: 220px" src="http://www.farazindustry.com/Faraz/images/Bently_clip_image002_0003.jpg" alt="">
                                <div class="overlay">
                                    <div>
                                        <a class="btn btn-common" href="{{ route('details') }}">جزییات</a>
                                    </div>
                                </div>

                            </div>
                            <div class="product-content">
                                <h3 class="product-title text-center"><a href="{{ route('details') }}">GE Bently 33300 XL</a></h3>
                                <div class="card-text">
                                    <div class="float-right">
                                        <span class="count-review">تاریخ: ۱۳۹۹/۲/۲۲</span>
                                    </div>
                                    <div class="float-left">
                                        <a class="address" href="#"><i class="lni-map-marker"></i> عسلویه</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="item">
                        <div class="product-item">
                            <div class="carousel-thumb">
                                <img class="img-fluid" style="height: 220px" src="http://www.farazindustry.com/Faraz/images/tuning_fork.jpg" alt="">
                                <div class="overlay">
                                    <div>
                                        <a class="btn btn-common" href="{{ route('details') }}">جزییات</a>
                                    </div>
                                </div>

                            </div>
                            <div class="product-content">
                                <h3 class="product-title  text-center"><a href="{{ route('details') }}">Tuning Fork</a></h3>
                                <div class="card-text">
                                    <div class="float-right">
                                        <span class="count-review">تاریخ: ۱۳۹۹/۲/۲۲</span>
                                    </div>
                                    <div class="float-left">
                                        <a class="address" href="#"><i class="lni-map-marker"></i> عسلویه</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="item">
                        <div class="product-item">
                            <div class="carousel-thumb">
                                <img class="img-fluid" style="height: 220px" src="http://www.farazindustry.com/Faraz/images/ab_clip_image002_0003.jpg" alt="">
                                <div class="overlay">
                                    <div>
                                        <a class="btn btn-common" href="{{ route('details') }}">جزییات</a>
                                    </div>
                                </div>

                            </div>
                            <div class="product-content">
                                <h3 class="product-title  text-center"><a href="{{ route('details') }}">CompactLogix Controller</a></h3>
                                <div class="card-text">
                                    <div class="float-right">
                                        <span class="count-review">تاریخ: ۱۳۹۹/۲/۲۲</span>
                                    </div>
                                    <div class="float-left">
                                        <a class="address" href="#"><i class="lni-map-marker"></i> عسلویه</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="item">
                        <div class="product-item">
                            <div class="carousel-thumb">
                                <img class="img-fluid"style="height: 220px" src="http://www.farazindustry.com/Faraz/images/Honeywell_clip_image001.jpg" alt="">
                                <div class="overlay">
                                    <div>
                                        <a class="btn btn-common" href="{{ route('details') }}">جزییات</a>
                                    </div>
                                </div>

                            </div>
                            <div class="product-content">
                                <h3 class="product-title  text-center"><a href="{{ route('details') }}">cost-effective ST 3000</a></h3>
                                <div class="card-text">
                                    <div class="float-right">
                                        <span class="count-review">تاریخ: ۱۳۹۹/۲/۲۲</span>
                                    </div>
                                    <div class="float-left">
                                        <a class="address" href="#"><i class="lni-map-marker"></i> عسلویه</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <div class="carousel-thumb">
                                <img class="img-fluid" style="height: 220px" src="http://www.farazindustry.com/Faraz/images/auma_clip_image002_0001.jpg" alt="">
                                <div class="overlay">
                                    <div>
                                        <a class="btn btn-common" href="{{ route('details') }}">جزییات</a>
                                    </div>
                                </div>

                            </div>
                            <div class="product-content">
                                <h3 class="product-title  text-center"><a href="{{ route('details') }}">SA with AUMA Matic Controls</a></h3>
                                <div class="card-text">
                                    <div class="float-right">
                                        <span class="count-review">تاریخ: ۱۳۹۹/۲/۲۲</span>
                                    </div>
                                    <div class="float-left">
                                        <a class="address" href="#"><i class="lni-map-marker"></i> عسلویه</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="works section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section-title">نحوه کار با سامانه</h3>
            </div>


            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="works-item">
                    <div class="icon-box">
                        <i class="lni-thumbs-up"></i>
                    </div>
                    <p style="direction: rtl;" >۳- بهره برداری از سامانه</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="works-item">
                    <div class="icon-box">
                        <i class="lni-bookmark-alt"></i>
                    </div>
                    <p style="direction: rtl;" >۲- احراز هویت</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="works-item">
                    <div class="icon-box">
                        <i class="lni-users"></i>
                    </div>
                    <p style="direction: rtl;">۱- ایجاد حساب کاربری</p>
                </div>
            </div>


            <hr class="works-line" />
        </div>
    </div>
</section>

<section class="services bg-light section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section-title">امکانات کلی سامانه</h3>
            </div>

            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
                    <div class="icon">
                        <i class="lni-search"></i>
                    </div>
                    <div class="services-content overplus-rtl" style="margin-right:40px;">
                        <h3><a href="#">قابلیت جستجو</a></h3>
                        <p>امکان جستجوی طیف وسعی از تجهیزات و ماشین آلات حوزه نفت، گاز و پتروشیمی</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="0.4s">
                    <div class="icon">
                        <i class="lni-display"></i>
                    </div>
                    <div class="services-content overplus-rtl" style="margin-right:40px;">
                        <h3><a href="#">تعاملات آنلاین</a></h3>
                        <p>پردازش برخط تعاملات، تبادل الکترونیکی داده و خرید و فروش آنلاین</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="0.2s">
                    <div class="icon">
                        <i class="lni lni-files"></i>
                    </div>
                    <div class="services-content overplus-rtl" style="margin-right:40px;">
                        <h3><a href="#">یکپارچگی اطلاعات</a></h3>
                        <p>ارایه اطلاعات جامع تجهیزات، قیمت، نحوه خرید، شرایط پرداخت و...</p>
                        </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="1.2s">
                    <div class="icon">
                        <i class="lni-emoji-smile"></i>
                    </div>
                    <div class="services-content overplus-rtl" style="margin-right:40px;">
                        <h3><a href="#">انعطاف پذیری</a></h3>
                        <p>انعطاف پذیری و امکان پیگربندی آسان و تعیین نقش ها و گروه های کاربری</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="1s">
                    <div class="icon">
                        <i class="lni-pencil-alt"></i>
                    </div>
                    <div class="services-content overplus-rtl" style="margin-right:40px;">
                        <h3><a href="#">دردسترس بودن اطلاعات</a></h3>
                        <p>ایجاد بستر مناسب جهت درج و انتشار آگهی های فروش تجهیزات مازاد</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="0.8s">
                    <div class="icon">
                        <i class="lni-lock"></i>
                    </div>
                    <div class="services-content overplus-rtl" style="margin-right:40px;">
                        <h3><a href="#">امنیت</a></h3>
                        <p>بکارگیری استاندارد SSL و رمزنگاری اطلاعات حساس به منظور برقراری ارتباط امن</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
