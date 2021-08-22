@extends('dashboard.layouts.master', ['title' => 'لیست قیمت گذاری'])
@section('content')
    <style>
        .kt-timeline-v2__item-time {
            font-size: 12px !important;
            padding-top: 5px !important;
            font-family: BYekan !important;
        }

        table.dataTable thead th {
            white-space: nowrap!important;
        }
        table.dataTable tbody td {
            white-space: nowrap!important;
        }
        .dataTables_scroll{
            direction: rtl!important;
        }


    </style>


    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">داشبورد </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc iranyekan">لیست قیمت گذاری</span>
            </div>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div style="" class="kt-container  kt-grid__item kt-grid__item--fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="kt-portlet kt-portlet--tabs">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                جدول قیمت گذاری
                            </h3>
                        </div>
                        <div style="margin-top: 15px" class="kt-portlet__head-toolbar">

                            <div class="kt-portlet__head-toolbar-wrapper">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-brand btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-plus"></i> ابزار ها و خروجی ها
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                                <span class="kt-nav__section-text">انواع خروجی ها</span>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_print">
                                                    <i class="kt-nav__link-icon la la-print"></i>
                                                    <span class="kt-nav__link-text">چاپ</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_copy">
                                                    <i class="kt-nav__link-icon la la-copy"></i>
                                                    <span class="kt-nav__link-text">کپی</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_excel">
                                                    <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                    <span class="kt-nav__link-text">اکسل</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_csv">
                                                    <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                    <span class="kt-nav__link-text">CSV</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_pdf">
                                                    <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                    <span class="kt-nav__link-text">PDF</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table style="font-family: iranyekan; width: 100%; direction: rtl!important;" class="table table-striped table-bordered table-hover table-checkable display nowrap" id="m_table_2">
                                        <thead style="font-family: BYekan">
                                        <tr>
                                            <th title="Field #2" data-field="2">ردیف</th>
                                            <th title="Field #2" data-field="2">شناسه یکتا</th>
                                            <th title="Field #2" data-field="2">شماره طبقه بندی</th>
                                            <th title="Field #4" data-field="4">دسته بندی</th>
                                            <th title="Field #4" data-field="4">عنوان</th>
                                            <th title="Field #4" data-field="4">شرح</th>
                                            <th title="Field #7" data-field="7">مقدار موجودی</th>
                                            <th title="Field #3" data-field="3">واحد سنجش</th>
                                            <th title="Field #10" data-field="10">تاریخ خرید</th>
                                            <th title="Field #11" data-field="11">مدت زمان به سال </th>
                                            <th title="Field #12" data-field="31">وضعیت کالا</th>
                                            <th title="Field #12" data-field="27">قیمت خرید واحد به ریال</th>
                                            <th title="Field #12" data-field="29">قیمت خرید به ارز رایج در زمان خرید</th>
                                            <th title="Field #12" data-field="30">ارزش دفتری مطابق دفاتر مالی</th>
                                            <th title="Field #12" data-field="31">نام پروژه سفارش دهنده</th>
                                            <th title="Field #12" data-field="31">نام سازنده</th>
                                            <th title="Field #12" data-field="31">پارت نامبر</th>
                                            <th title="Field #12" data-field="31">تاریخ ساخت</th>
                                            <th title="Field #12" data-field="31">شماره سریال</th>
                                            {{--// new--}}
                                            <th title="Field #12" data-field="31">ارزش روز کالا</th>
                                            <th title="Field #12" data-field="31">شماره کمیسیون معاملات</th>
                                            <th title="Field #12" data-field="31">تاریخ کمیسیون معاملات</th>
                                            <th title="Field #12" data-field="31">قیمت پیشنهایی پایه</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td style="font-family: BYekan">1</td>
                                            <td style="font-family: BYekan; direction: ltr">EL-31-2912</td>
                                            <td style="font-family: BYekan; direction: ltr">67 00 46 010 1</td>
                                            <td style="font-family: BYekan">الکتریکی و مخابرات</td>
                                            <td style="font-family: BYekan">دیزل ژنراتور</td>
                                            <td style="font-family: BYekan">دیزل ژنراتور Cummins</td>
                                            <td style="font-family: BYekan">۳</td>
                                            <td style="font-family: BYekan">دستگاه</td>
                                            <td style="font-family: BYekan">۱۳۹۸/۱۱/۰۵</td>
                                            <td style="font-family: BYekan">۱ سال</td>
                                            <td style="font-family: BYekan">نو</td>
                                            <td style="font-family: BYekan">۵,۰۰۰,۰۰۰,۰۰۰ ریال</td>
                                            <td style="font-family: BYekan">۳۸,۰۰۰ دلار</td>
                                            <td style="font-family: BYekan">۴,۸۰۰,۰۰۰,۰۰۰ ریال</td>
                                            <td style="font-family: BYekan">فروزان</td>
                                            <td style="font-family: BYekan">Cummins</td>
                                            <td style="font-family: BYekan">VTA2810G5</td>
                                            <td style="font-family: BYekan">2017/05/03</td>
                                            <td style="font-family: BYekan">SN938173819912301</td>
                                            <td style="font-family: BYekan">6,000,000,000 ریال</td>
                                            <td style="font-family: BYekan">۱۲۵</td>
                                            <td style="font-family: BYekan">۱۳۹۹/۰۳/۰۶</td>
                                            <td style="font-family: BYekan">5,800,000,000 ریال</td>
                                        </tr>



                                        <tr>
                                            <td style="font-family: BYekan">2</td>
                                            <td style="font-family: BYekan; direction: ltr">MA-11-2311</td>
                                            <td style="font-family: BYekan; direction: ltr">81 11 13 193 8</td>
                                            <td style="font-family: BYekan">تاسیسات و ماشین آلات</td>
                                            <td style="font-family: BYekan">جرثقیل</td>
                                            <td style="font-family: BYekan">Turmerehkran</td>
                                            <td style="font-family: BYekan">۶</td>
                                            <td style="font-family: BYekan">دستگاه</td>
                                            <td style="font-family: BYekan">۱۳۷۱/۰۳/۱۰</td>
                                            <td style="font-family: BYekan">۲۸ سال</td>
                                            <td style="font-family: BYekan">کارکرده</td>
                                            <td style="font-family: BYekan">۷۱۰,۰۰۰,۰۰۰ ریال</td>
                                            <td style="font-family: BYekan">۱۴۰,۰۰۰ دلار</td>
                                            <td style="font-family: BYekan">۱ ریال</td>
                                            <td style="font-family: BYekan">یارد خرمشهر</td>
                                            <td style="font-family: BYekan">Liebherr</td>
                                            <td style="font-family: BYekan">100 EL 6</td>
                                            <td style="font-family: BYekan">1991/01/10</td>
                                            <td style="font-family: BYekan">SN918273381920333</td>
                                            <td style="font-family: BYekan">7,000,000,000 ریال</td>
                                            <td style="font-family: BYekan">۱۲۵</td>
                                            <td style="font-family: BYekan">۱۳۹۹/۰۳/۰۶</td>
                                            <td style="font-family: BYekan">6,800,000,000 ریال</td>
                                        </tr>


                                        <tr>
                                            <td style="font-family: BYekan">3</td>
                                            <td style="font-family: BYekan; direction: ltr">COM-02-1411</td>
                                            <td style="font-family: BYekan; direction: ltr">11 39 91 133 0</td>
                                            <td style="font-family: BYekan">وسائل الکتریکی ؛مخابرات و کامپیوتر</td>
                                            <td style="font-family: BYekan">مانیتور </td>
                                            <td style="font-family: BYekan">CRT ۱۷ اینچ</td>
                                            <td style="font-family: BYekan">۲۵</td>
                                            <td style="font-family: BYekan">دستگاه</td>
                                            <td style="font-family: BYekan">۱۳۸۴/۱۰/۰۱</td>
                                            <td style="font-family: BYekan">۱۵ سال</td>
                                            <td style="font-family: BYekan">کارکرده</td>
                                            <td style="font-family: BYekan">۱,۲۰۰,۰۰۰ ریال</td>
                                            <td style="font-family: BYekan">-</td>
                                            <td style="font-family: BYekan">۱ ریال</td>
                                            <td style="font-family: BYekan">دفتر پروژه</td>
                                            <td style="font-family: BYekan">LG</td>
                                            <td style="font-family: BYekan">199 MD 0</td>
                                            <td style="font-family: BYekan">۱۳۸۴/۰۸/۱۱</td>
                                            <td style="font-family: BYekan">SN918273381920333</td>
                                            <td style="font-family: BYekan">1,000,000 ریال</td>
                                            <td style="font-family: BYekan">۱۲۵</td>
                                            <td style="font-family: BYekan">۱۳۹۹/۰۳/۰۶</td>
                                            <td style="font-family: BYekan">900,000 ریال</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>





    </div>
    <!-- end:: Content -->
    </div>
    </div>



@stop

@section('footerScripts')

    <script src="/dashboard/assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
    <script>
        var DatatablesExtensionButtons = {
            init: function () {




                var t;
                t = $("#m_table_2").DataTable({
                        "searching": true, scrollY: "50vh", scrollX: true,

                        buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
                    }
                ),
                    $("#export_print").on("click", function (e) {
                            e.preventDefault(), t.button(0).trigger()
                        }
                    ),
                    $("#export_copy").on("click", function (e) {
                            e.preventDefault(), t.button(1).trigger()
                        }
                    ),
                    $("#export_excel").on("click", function (e) {
                            e.preventDefault(), t.button(2).trigger()
                        }
                    ),
                    $("#export_csv").on("click", function (e) {
                            e.preventDefault(), t.button(3).trigger()
                        }
                    ),
                    $("#export_pdf").on("click", function (e) {
                            e.preventDefault(), t.button(4).trigger()
                        }
                    )







                var v;
                v = $("#m_table_3").DataTable({
                        "searching": true,
                        scrollY: "50vh", scrollX: true,

                        buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
                    }
                ),
                    $("#export_print").on("click", function (e) {
                            e.preventDefault(), v.button(0).trigger()
                        }
                    ),
                    $("#export_copy").on("click", function (e) {
                            e.preventDefault(), v.button(1).trigger()
                        }
                    ),
                    $("#export_excel").on("click", function (e) {
                            e.preventDefault(), v.button(2).trigger()
                        }
                    ),
                    $("#export_csv").on("click", function (e) {
                            e.preventDefault(), v.button(3).trigger()
                        }
                    ),
                    $("#export_pdf").on("click", function (e) {
                            e.preventDefault(), v.button(4).trigger()
                        }
                    )




            }
        };



        jQuery(document).ready(function () {
                DatatablesExtensionButtons.init()
            }
        );

    </script>
@stop