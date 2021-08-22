@extends('website/master')

@section('content')

    <style>
        .search-bar .inputwithicon i{
            right: 245px!important;
        }
        .search-bar .btn-common{
            width: 230px!important;
        }
    </style>
    <div id="hero-area">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <div class="contents-ctg">
                        <div class="search-bar">
                            <div class="search-inner">
                                <form style="direction: rtl" class="search-form">

                                    <button class="btn btn-common" type="button"><i class="lni-search"></i> جستجو</button>

                                    <div class="form-group">
                                        <input style="margin-right: 10px;" type="text" name="customword" class="form-control" placeholder="نام یا کد تجهیز" />
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






    <div class="main-container section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-xs-12 page-sidebar">
                    <aside>

                        <div class="widget categories">
                            <h4 class="widget-title">دسته بندی ها</h4>
                            <ul class="categories-list">
                                <li><a href="#">تولید و حفاری <span class="category-counter">(5)</span></a></li>
                                <li><a href="#">تاسيسات و ماشين آلات <span class="category-counter">(8)</span></a></li>
                                <li><a href="#">حمل و نقل <span class="category-counter">(2)</span></a></li>
                                <li><a href="#">ماشن آلات و ابزار دقیق <span class="category-counter">(2)</span></a></li>
                                <li><a href="#">لوازم ساختمانی <span class="category-counter">(2)</span></a></li>
                                <li><a href="#">الکتریکی و مخابرات <span class="category-counter">(2)</span></a></li>
                                <li><a href="#">لوله، شیر و اتصالات <span class="category-counter">(2)</span></a></li>
                                <li><a href="#">مصالح ساختمانی و فلزات <span class="category-counter">(2)</span></a></li>
                                <li><a href="#">ابزار آلات <span class="category-counter">(2)</span></a></li>

                            </ul>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title">تبلیغات</h4>
                            <div class="add-box">
                                <img class="img-fluid" src="assets/img/img1.jpg" alt=""/>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-9 col-md-12 col-xs-12 page-content">
                    <div class="adds-wrapper">
                        <div class="tab-content">
                            <div id="list-view" class="tab-pane fade active show">
                                <div class="row">


                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="featured-box">
                                            <div class="feature-content">
                                                <h4><a href="{{ route('details') }}">جرثقیل ۵۰۰ تن ترکس – Terex ac 500</a></h4>
                                                @auth()
                                                    <div class="meta-tag">
                                                        <span style=""><i class="lni-alarm-clock"></i> زمان: ۹۹/۰۲/۰۱</span>
                                                        <span style="margin-right: 15px;"><i class="lni-map-marker"></i> شهر: بهبهان</span>
                                                        <span style="margin-right: 15px;"><i class="lni-list"></i> شرکت: بیدبلند خلیج فارس</span>
                                                    </div>
                                                @endauth()

                                                <p class="dsc">
                                                    جرثقیل ۵۰ تن ترکس Crane Terex ac 500 : اجاره جرثقیل فوق حرفه ایی ۵۰ تنی ترکس برای اولین بار در ایران , جرثقیل سپهر با نیم قرن تجربه در اجاره جرثقیل های سبک و سنگین آماده ی مشاوره و اجاره انواع جرثقیل های ترکس Terex در تهران و ایران میباشد .
                                                </p>
                                                <div class="listing-bottom">
                                                    <h5 style="margin: 6px;" class=" float-left">نوع: مزایده</h5>
                                                    <a style="background-color: #e04948;" href="{{ route('details') }}" class="btn btn-common float-right">مشاهده جزییات</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="featured-box">
                                            <div class="feature-content">
                                                <h4><a href="{{ route('details') }}">جرثقیل ۵۰۰ تن ترکس – Terex ac 500</a></h4>
                                                @auth()
                                                    <div class="meta-tag">
                                                        <span style=""><i class="lni-alarm-clock"></i> زمان: ۹۹/۰۲/۰۱</span>
                                                        <span style="margin-right: 15px;"><i class="lni-map-marker"></i> شهر: بهبهان</span>
                                                        <span style="margin-right: 15px;"><i class="lni-list"></i> شرکت: بیدبلند خلیج فارس</span>
                                                    </div>
                                                @endauth()
                                                <p class="dsc">
                                                    جرثقیل ۵۰ تن ترکس Crane Terex ac 500 : اجاره جرثقیل فوق حرفه ایی ۵۰ تنی ترکس برای اولین بار در ایران , جرثقیل سپهر با نیم قرن تجربه در اجاره جرثقیل های سبک و سنگین آماده ی مشاوره و اجاره انواع جرثقیل های ترکس Terex در تهران و ایران میباشد .
                                                </p>
                                                <div class="listing-bottom">
                                                    <h5 style="margin: 6px;" class=" float-left">نوع: فروش</h5>
                                                    <a style="background-color: #e04948;" href="{{ route('details') }}" class="btn btn-common float-right">مشاهده جزییات</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="featured-box">
                                            <div class="feature-content">
                                                <h4><a href="{{ route('details') }}">جرثقیل ۵۰۰ تن ترکس – Terex ac 500</a></h4>
                                                @auth()
                                                    <div class="meta-tag">
                                                        <span style=""><i class="lni-alarm-clock"></i> زمان: ۹۹/۰۲/۰۱</span>
                                                        <span style="margin-right: 15px;"><i class="lni-map-marker"></i> شهر: بهبهان</span>
                                                        <span style="margin-right: 15px;"><i class="lni-list"></i> شرکت: بیدبلند خلیج فارس</span>
                                                    </div>
                                                @endauth()
                                                <p class="dsc">
                                                    جرثقیل ۵۰ تن ترکس Crane Terex ac 500 : اجاره جرثقیل فوق حرفه ایی ۵۰ تنی ترکس برای اولین بار در ایران , جرثقیل سپهر با نیم قرن تجربه در اجاره جرثقیل های سبک و سنگین آماده ی مشاوره و اجاره انواع جرثقیل های ترکس Terex در تهران و ایران میباشد .
                                                </p>
                                                <div class="listing-bottom">
                                                    <h5 style="margin: 6px;" class=" float-left">نوع: مزایده</h5>
                                                    <a style="background-color: #e04948;" href="{{ route('details') }}" class="btn btn-common float-right">مشاهده جزییات</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="featured-box">
                                            <div class="feature-content">
                                                <h4><a href="{{ route('details') }}">جرثقیل ۵۰۰ تن ترکس – Terex ac 500</a></h4>
                                                @auth()
                                                    <div class="meta-tag">
                                                        <span style=""><i class="lni-alarm-clock"></i> زمان: ۹۹/۰۲/۰۱</span>
                                                        <span style="margin-right: 15px;"><i class="lni-map-marker"></i> شهر: بهبهان</span>
                                                        <span style="margin-right: 15px;"><i class="lni-list"></i> شرکت: بیدبلند خلیج فارس</span>
                                                    </div>
                                                @endauth()
                                                <p class="dsc">
                                                    جرثقیل ۵۰ تن ترکس Crane Terex ac 500 : اجاره جرثقیل فوق حرفه ایی ۵۰ تنی ترکس برای اولین بار در ایران , جرثقیل سپهر با نیم قرن تجربه در اجاره جرثقیل های سبک و سنگین آماده ی مشاوره و اجاره انواع جرثقیل های ترکس Terex در تهران و ایران میباشد .
                                                </p>
                                                <div class="listing-bottom">
                                                    <h5 style="margin: 6px;" class=" float-left">نوع: مزایده</h5>
                                                    <a style="background-color: #e04948;" href="{{ route('details') }}" class="btn btn-common float-right">مشاهده جزییات</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="featured-box">
                                            <div class="feature-content">
                                                <h4><a href="{{ route('details') }}">جرثقیل ۵۰۰ تن ترکس – Terex ac 500</a></h4>
                                                @auth()
                                                    <div class="meta-tag">
                                                        <span style=""><i class="lni-alarm-clock"></i> زمان: ۹۹/۰۲/۰۱</span>
                                                        <span style="margin-right: 15px;"><i class="lni-map-marker"></i> شهر: بهبهان</span>
                                                        <span style="margin-right: 15px;"><i class="lni-list"></i> شرکت: بیدبلند خلیج فارس</span>
                                                    </div>
                                                @endauth()
                                                <p class="dsc">
                                                    جرثقیل ۵۰ تن ترکس Crane Terex ac 500 : اجاره جرثقیل فوق حرفه ایی ۵۰ تنی ترکس برای اولین بار در ایران , جرثقیل سپهر با نیم قرن تجربه در اجاره جرثقیل های سبک و سنگین آماده ی مشاوره و اجاره انواع جرثقیل های ترکس Terex در تهران و ایران میباشد .
                                                </p>
                                                <div class="listing-bottom">
                                                    <h5 style="margin: 6px;" class=" float-left">نوع: فروش</h5>
                                                    <a style="background-color: #e04948;" href="{{ route('details') }}" class="btn btn-common float-right">مشاهده جزییات</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>









                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pagination-bar">
                        <nav>
                            <ul style="direction: rtl" class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link active" href="#">۱</a></li>
                                <li class="page-item"><a class="page-link" href="#">۲</a></li>
                                <li class="page-item"><a class="page-link" href="#">۳</a></li>
                                <li class="page-item"><a class="page-link" href="#">بعدی</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
