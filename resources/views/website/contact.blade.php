@extends('website/master')

@section('content')


    <div class="page-header" style="background: url(assets/img/oil1.jpg);">
        <div class="container">
            <div class="row overplus-rtl">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">تماس باما</h2>
                        <ol class="breadcrumb">
                            <li><a href="/">صفحه اصلی /</a></li>
                            <li class="current">تماس باما</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <section id="content" class="section-padding overplus-rtl">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">

                    <form class="contact-form" data-toggle="validator">
                        <h2 class="contact-title">
                            فرم ارسال پیام
                        </h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name"
                                                   placeholder="نام و نام خانوادگی" required
                                                   data-error="لطفا نام خودرا وارد نمایید">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" placeholder="ایمیل"
                                                   required data-error="لطفا ایمیل خودرا وارد نمایید">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="msg_subject" name="subject"
                                                   placeholder="موضوع" required data-error="لطفا موضوع را مشخص نمایید">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="پیام خود را ارسال کنید" rows="7"
                                                      data-error="متن را وارد نمایید" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-common">اکنون ارسال کنید</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>



            </div>



            <div class="row">
                <div class=" mt-5 col-lg-12 col-md-12 col-xs-12">

                    <form class="contact-form" data-toggle="validator">
                        <h2 class="contact-title">
                            شکایات، انتقادات و پیشنهادات
                        </h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name"
                                                   placeholder="نام و نام خانوادگی" required
                                                   data-error="لطفا نام خودرا وارد نمایید">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" placeholder="ایمیل"
                                                   required data-error="لطفا ایمیل خودرا وارد نمایید">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="msg_subject" name="subject"
                                                   placeholder="موضوع" required data-error="لطفا موضوع را مشخص نمایید">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="پیام خود را ارسال کنید" rows="7"
                                                      data-error="متن را وارد نمایید" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-common">اکنون ارسال کنید</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>




            <div class="row mt-5">
                <div class="col-lg-12 col-md-12 col-xs-12">

                    <div class="information">
                        <h3>اطلاعات تماس</h3>
                        <div class="contact-datails">
                            <ul class="list-unstyled info">
                                <li><span>آدرس : </span>
                                    <p> تهران - خیابان کریم خان زند - خیابان خردمند شمالی نبش اعرابی سوم - پلاک ۹۴ -
                                        طبقه دوم</p></li>
                                <li><span>ایمیل : </span>
                                    <p><a href="#">Info@Overplu.scom</a></p></li>
                                <li><span>شماره تماس </span>
                                    <p><a href="#">۸۷۷۰۰۱۱۲</a></p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection
