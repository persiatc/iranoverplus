@extends('dashboard.layouts.master', ['title' => 'صفحه اصلی'])
@section('content')
    <style>
        .kt-timeline-v2__item-time {
            font-size: 12px !important;
            padding-top: 5px !important;
            font-family: BYekan !important;
        }
    </style>


    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">داشبورد </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc iranyekan">صفحه اصلی</span>
            </div>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div style="" class="kt-container  kt-grid__item kt-grid__item--fluid">

        <div class="row">



            <div class="col-xl-4 col-lg-6 col-md-6">
                <a style="cursor: pointer;" href="{{ route('equipment.index') }}">
                    <div class="kt-portlet">
                        <div class="kt-portlet__body">
                            <div class="kt-widget__files">
                                <div class="kt-widget__media mb-5">
                                    <h3>تجهیزات مازاد</h3>
                                </div>
                                <center><img class="kt-widget__img kt-hidden-" width="40px" src="/dashboard/assets/media/index/learn.png" alt="image"></center>
                            </div>
                        </div>
                    </div>
                </a>
        </div>


        <div class="col-xl-4 col-lg-6 col-md-6">
            <a style="cursor: pointer;" href="{{ route('pricing.index') }}">
                <div class="kt-portlet">
                    <div class="kt-portlet__body">
                        <div class="kt-widget__files">
                            <div class="kt-widget__media mb-5">
                                <h3>قیمت گذاری</h3>
                            </div>
                            <center><img class="kt-widget__img kt-hidden-" width="36px" src="/dashboard/assets/media/index/docs.png" alt="image"></center>
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <div class="col-xl-4 col-lg-6 col-md-6">
            <a target="_blank" style="cursor: pointer;" href="{{ route('ads.index') }}">
                <div class="kt-portlet">
                    <div class="kt-portlet__body">
                        <div class="kt-widget__files">
                            <div class="kt-widget__media mb-5">
                                <h3>انتشار آگهی</h3>
                            </div>
                            <center><img class="kt-widget__img kt-hidden-" width="40px" src="/dashboard/assets/media/index/pngwave.png" alt="image"></center>
                        </div>
                    </div>
                </div>
            </a>
        </div>





            <div class="col-xl-4 col-lg-6 col-md-6">
                <a style="cursor: pointer;" href="">
                    <div class="kt-portlet">
                        <div class="kt-portlet__body">
                            <div class="kt-widget__files">
                                <div class="kt-widget__media mb-5">
                                    <h3>مذاکرات خرید</h3>
                                </div>
                                <center><img class="kt-widget__img kt-hidden-" width="40px" src="/dashboard/assets/media/index/learn.png" alt="image"></center>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6">
                <a style="cursor: pointer;" href="">
                    <div class="kt-portlet">
                        <div class="kt-portlet__body">
                            <div class="kt-widget__files">
                                <div class="kt-widget__media mb-5">
                                    <h3>سفارشات</h3>
                                </div>
                                <center><img class="kt-widget__img kt-hidden-" width="36px" src="/dashboard/assets/media/index/docs.png" alt="image"></center>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6">
                <a style="cursor: pointer;" href="{{ route('contracts.index') }}">
                    <div class="kt-portlet">
                        <div class="kt-portlet__body">
                            <div class="kt-widget__files">
                                <div class="kt-widget__media mb-5">
                                    <h3>قراردادها</h3>
                                </div>
                                <center><img class="kt-widget__img kt-hidden-" width="36px" src="/dashboard/assets/media/index/docs.png" alt="image"></center>
                            </div>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-xl-4 col-lg-6 col-md-6">
                <a style="cursor: pointer;" href="">
                    <div class="kt-portlet">
                        <div class="kt-portlet__body">
                            <div class="kt-widget__files">
                                <div class="kt-widget__media mb-5">
                                    <h3>پروفایل کاربری</h3>
                                </div>
                                <center><img class="kt-widget__img kt-hidden-" width="36px" src="/dashboard/assets/media/index/docs.png" alt="image"></center>
                            </div>
                        </div>
                    </div>
                </a>
            </div>


                <div class="col-xl-4 col-lg-6 col-md-6">
                    <a style="cursor: pointer;" href="">
                        <div class="kt-portlet">
                            <div class="kt-portlet__body">
                                <div class="kt-widget__files">
                                    <div class="kt-widget__media mb-5">
                                        <h3>بارگذاری مدارک</h3>
                                    </div>
                                    <center><img class="kt-widget__img kt-hidden-" width="36px" src="/dashboard/assets/media/index/docs.png" alt="image"></center>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


            <div class="col-xl-4 col-lg-6 col-md-6">
                <a target="_blank" style="cursor: pointer;" href="{{ route('list') }}">
                    <div class="kt-portlet">
                        <div class="kt-portlet__body">
                            <div class="kt-widget__files">
                                <div class="kt-widget__media mb-5">
                                    <h3>آخرین آگهی ها</h3>
                                </div>
                                <center><img class="kt-widget__img kt-hidden-" width="40px" src="/dashboard/assets/media/index/pngwave.png" alt="image"></center>
                            </div>
                        </div>
                    </div>
                </a>
            </div>





        </div>




    </div>
    <!-- end:: Content -->
    </div>
    </div>

@stop
