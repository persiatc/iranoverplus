@extends('website/master')

@section('content')

    <style>
        a{
            font-family: byekan!important;
        }
    </style>

    <div class="page-header" style="background: url(assets/img/oil1.jpg);">
        <div class="container">
            <div class="row overplus-rtl">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">سوالات متداول</h2>
                        <ol class="breadcrumb">
                            <li><a href="/">صفحه اصلی /</a></li>
                            <li class="current">سوالات متداول</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="faq section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head-faq text-center">
                        <h2 class="section-title">سوالات متداول پیرامون سامانه</h2>
                    </div>

                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        1.	چگونه ميتوانم در مزايده ها شرکت کنم؟
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    <p> با عضويت در سايت و تکميل اطلاعات و در ادامه با خريد پاکت و پرکردن اوراق شرکت در مزايده و نهايتاً پرداخت 5درصد مبلغ پايه تجهیزات مي توان در مزايده شرکت نمود. </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                        2.	شرايط شخص شرکت کننده در مزايده بايد به چه صورت باشد؟
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        شخص بايد فاقد هرگونه ممنوعيت قانوني جهت شرکت در مزايده باشد.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                        3.	نحوه تحويل پاکت پس از تکميل اوراق و مدارک مربوطه؟
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        متقاضيان محترم شرکت در مزايده مي توانند پس از تکميل اوراق شرکت در مزايده و واريز 5 درصد سپرده شرکت در مزايده پاکت هاي خود را تا پايان زمان مشخص شده جهت تحويل پاکات به آدرس دفتر مرکزي شرکت تحويل نمايند
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                        4.	نحوه اطلاع از برنده شدن يا نشدن در مزايده از لحاظ قيمت پيشنهادي چگونه است ؟
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        متقاضيان مي توانند با حضور در مراسم بازگشايي پاکات و يا تماس با تلفن ۰۲۱۸۷۷۰۰۱۱۲ از برنده شدن يا نشدن خود مطلع شوند.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                        5.	عودت 5% سپرده شرکت در مزايده نفرات سوم به بعد چگونه و حداکثر تا چه مدت به طول مي انجامد؟
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        سپرده نفرات سوم به بعد ظرف مدت 5 روز کاري به حساب اعلامي در اوراق شرکت در مزايده(به نام متقاضي خريد) عودت مي گردد.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                                        6.	درصورت ابلاغ برنده شدن جهت واريز الباقي مبلغ و ساير هزينه هاي مربوطه به متقاضي خريد و عدم ايفاي تعهدات توسط ايشان در زمان مقرر چه اتفاقي خواهد افتاد؟
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        در اينصورت 5% سپرده واريزي شرکت در مزايده متقاضي خريد به نفع فروشنده ضبط مي گردد و تجهیزات به ساير نفرات شرکت کننده در مزايده بعنوان برنده اعلام خواهند شد.
                                    </p>
                                </div>
                            </div>
                        </div>



                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                                        7.	مراحل پس از واريز مبالغ ابلاغ شده چيست؟
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse7" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        تحويل فيش هاي واريزي به شرکت و نهايتاً پس از طي شدن روال اداري انعقاد قرارداد با متقاضي خريد.
                                    </p>
                                </div>
                            </div>
                        </div>



                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
                                        8.	آیا امکان ابطال پارتی بعد از واریز وجه مزایده توسط مزایده گر وجود دارد؟
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse8" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        خیر. این امکان وجود ندارد .
                                    </p>
                                </div>
                            </div>
                        </div>



                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
                                        9.	چه شماره حساب هایی باید در سامانه معرفی شود؟
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse9" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        نوع حساب درآمدی بابت هزینه شرکت در مزایده و واریز وجه مزایده - نوع حساب دریافت وجوه سپرده بابت ودیعه _ نوح حساب رد وجوه سپرده بابت عودت ودیعه و عودت وجه مزایده
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
                                        10.	آیا وارد کردن شماره حساب واریز ودیعه الزامیست ؟
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse10" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        در صورتی که روش دریافت ودیعه از نوع الکترونیکی و فیش نقدی باشد،وارد کردن شماره حساب واریز ودیعه الزامیست،در غیر اینصورت خیر.
                                    </p>
                                </div>
                            </div>
                        </div>




                    </div>

                </div>
            </div>
        </div>
    </div>





@endsection
