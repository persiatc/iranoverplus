@extends('website/master') @section('content')

    <div class="page-header" style="background: url(assets/img/oil1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">جزییات کالا</h2>
                        <ol class="breadcrumb">
                            <li><a href="/">صفحه اصلی /</a></li>
                            <li class="current">جزییات کالا</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-padding">
        <div class="container">
            <div class="product-info row">

                <div class="col-lg-4 col-md-6 col-xs-12">
                    <aside class="details-sidebar">
                        <div class="widget">
                            <h4 class="widget-title">اطلاعات شرکت</h4>
                            @guest()

                                <div class="agent-inner">
                                    <p style="direction: rtl; text-align: right "> کاربر گرامی، عضویت در سامانه جهت مشاهده جزییات آگهی الزامیست.</p>

                                </div>

                            @endguest

                            @auth()
                                <div class="agent-inner">
                                    <div class="agent-title">
                                        <div class="agent-photo">
                                            <a href="http://bidboland.com"><img src="/dashboard/assets/logo.png" alt="" /></a>
                                        </div>
                                        <div class="agent-details">
                                            <h3><a href="#"> بیدبلند خلیج فارس</a></h3>
                                        </div>
                                    </div>
                                    <p style="direction: rtl; text-align: right ">جهت شروع مذاکره جهت خریداری، برروی لینک زیر کلیک نمایید.</p>
                                    <p style="text-align: center"><button style="background-color: #e04948!important;" class="btn btn-common fullwidth mt-4">شروع مذاکره خرید</button></p>

                                </div>
                            @endauth

                        </div>


                    </aside>
                </div>




                <div class="col-lg-8 col-md-12 col-xs-12">
                    <div class="details-box">
                        <div class="ads-details-info">
                            <h2>جرثقیل ۵۰۰ تن ترکس – Terex ac 500</h2>

                            @auth()
                                <div class="details-meta">
                                    <span style="margin-right: 15px;"><i class="lni-alarm-clock"></i> زمان: ۹۹/۰۲/۰۱</span>
                                    <span style="margin-right: 15px;"><i class="lni-map-marker"></i> شهر: بهبهان</span>
                                    <span style="margin-right: 15px;"><i class="lni-list"></i> شرکت: بهبهان</span>
                                </div>
                            @endauth()


                            <h5 style="color: black" class="mt-3">اطلاعات کلی: </h5>
                            <p class="mb-4">
                                جرثقیل ۵۰ تن ترکس Crane Terex ac 500 : اجاره جرثقیل فوق حرفه ایی ۵۰ تنی ترکس برای اولین بار در ایران , جرثقیل سپهر با نیم قرن تجربه در اجاره جرثقیل های سبک و سنگین آماده ی مشاوره و اجاره انواع جرثقیل های ترکس Terex در تهران و ایران میباشد .
                                <br><br>

                                @guest()
                                <div class="alert alert-danger" role="alert">
                                    کاربر گرامی، عضویت در سامانه جهت مشاهده جزییات آگهی الزامیست.
                                    <br>
                                    <p style="text-align: center">
                                        <a href="/login"><button style="background-color: #e04948!important;" class="btn btn-common fullwidth mt-4">ورود به سیستم</button></a>
                                        <a href="/register"><button style="background-color: #e04948!important;" class="btn btn-common fullwidth mt-4">عضویت در سامانه</button></a>
                                    </p>

                                </div>
                                @endguest()

                             @auth()
                                جرثقیل ۵۰ تن ترکس Crane Terex ac 500 : اجاره جرثقیل فوق حرفه ایی ۵۰ تنی ترکس برای اولین بار در ایران , جرثقیل سپهر با نیم قرن تجربه در اجاره جرثقیل های سبک و سنگین آماده ی مشاوره و اجاره انواع جرثقیل های ترکس Terex در تهران و ایران میباشد .
                                جرثقیل ۵۰ تن ترکس Crane Terex ac 500 : اجاره جرثقیل فوق حرفه ایی ۵۰ تنی ترکس برای اولین بار در ایران , جرثقیل سپهر با نیم قرن تجربه در اجاره جرثقیل های سبک و سنگین آماده ی مشاوره و اجاره انواع جرثقیل های ترکس Terex در تهران و ایران میباشد .
                            </p>



                        <div class="mt-5">
                            <h5 style="color: black">مشخصات: </h5>
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>



                            <div class="mt-5">
                                <h5 style="color: black">دریافت اسناد: </h5>
                                <a href=""><p>جهت دریافت اسناد اینجا کلیک نمایید.</p></a>
                            </div>




                    </div>
                        <div class="tag-bottom">
                            <div class="float-right">
                                <ul class="advertisement">
                                    <li><p>دسته بندی: <strong>تست</strong></p></li>
                                    <li><p>نام شرکت: <strong>بیدبلند خلیج فارس</strong></p></li>
                                    <li><p>شهر: <strong>بهبهان</strong></p></li>
                                    <li><p>نوع:<strong>مزایده</strong></p></li>
                                </ul>
                            </div>
                        </div>
                    @endauth()
                    </div>
                </div>





            </div>
        </div>
    </div>

@endsection
