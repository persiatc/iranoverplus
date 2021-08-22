@extends('dashboard.layouts.master', ['title' => 'لیست کالاهای مازاد'])
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

                <span class="kt-subheader__desc iranyekan">لیست کالاهای مازاد</span>
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
                                جدول کالاهای مازاد
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
                                    <table style=";" class="table table-striped table-bordered table-hover table-checkable display " id="m_table_2">
                                        <thead >
                                        <tr>
                                            <th title="Field #2" data-field="1">ردیف</th>
                                            <th title="Field #2" data-field="2">شناسه یکتا</th>
                                            <th title="Field #2" data-field="3">شماره طبقه بندی</th>
                                            <th title="Field #4" data-field="4">دسته بندی</th>
                                            <th title="Field #4" data-field="5">عنوان</th>
                                            <th title="Field #4" data-field="6">شرح</th>
                                            <th title="Field #7" data-field="7">مقدار موجودی</th>
                                            <th title="Field #3" data-field="8">واحد سنجش</th>
                                            <th title="Field #10" data-field="9">تاریخ خرید</th>
                                            <th title="Field #11" data-field="10">مدت زمان به سال </th>
                                            <th title="Field #12" data-field="11">وضعیت کالا</th>
                                            <th title="Field #12" data-field="12">قیمت خرید واحد به ریال</th>
                                            <th title="Field #12" data-field="13">قیمت خرید به ارز رایج در زمان خرید</th>
                                            <th title="Field #12" data-field="14">ارزش دفتری مطابق دفاتر مالی</th>
                                            <th title="Field #12" data-field="15">نام پروژه سفارش دهنده</th>
                                            <th title="Field #12" data-field="16">نام سازنده</th>
                                            <th title="Field #12" data-field="17">پارت نامبر</th>
                                            <th title="Field #12" data-field="18">تاریخ ساخت</th>
                                            <th title="Field #12" data-field="19">شماره سریال</th>
                                            <th title="Field #12" data-field="20">دیتا شیت</th>
                                            <th title="Field #12" data-field="21">نام انبار</th>
                                            <th title="Field #12" data-field="22">مکان انبار</th>
                                            <th title="Field #12" data-field="23">شماره انبار</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td >1</td>
                                                <td >EL-31-2912</td>
                                                <td>67 00 46 010 1</td>
                                                <td >الکتریکی و مخابرات</td>
                                                <td >دیزل ژنراتور</td>
                                                <td >دیزل ژنراتور Cummins</td>
                                                <td >۳</td>
                                                <td >دستگاه</td>
                                                <td >۱۳۹۸/۱۱/۰۵</td>
                                                <td >۱ سال</td>
                                                <td >نو</td>
                                                <td >۵,۰۰۰,۰۰۰,۰۰۰ ریال</td>
                                                <td >۳۸,۰۰۰ دلار</td>
                                                <td >۴,۸۰۰,۰۰۰,۰۰۰ ریال</td>
                                                <td >فروزان</td>
                                                <td >Cummins</td>
                                                <td >VTA2810G5</td>
                                                <td >2017/05/03</td>
                                                <td >SN938173819912301</td>
                                                <td ><i class="fa fa-file"></i></td>
                                                <td >انبار پروژه فروزان</td>
                                                <td >خرمشهر</td>
                                                <td >5</td>
                                            </tr>



                                            <tr>
                                                <td >2</td>
                                                <td >MA-11-2311</td>
                                                <td >81 11 13 193 8</td>
                                                <td >تاسیسات و ماشین آلات</td>
                                                <td >جرثقیل</td>
                                                <td >Turmerehkran</td>
                                                <td >۶</td>
                                                <td >دستگاه</td>
                                                <td >۱۳۷۱/۰۳/۱۰</td>
                                                <td >۲۸ سال</td>
                                                <td >کارکرده</td>
                                                <td >۷۱۰,۰۰۰,۰۰۰ ریال</td>
                                                <td >۱۴۰,۰۰۰ دلار</td>
                                                <td >۱ ریال</td>
                                                <td >یارد خرمشهر</td>
                                                <td >Liebherr</td>
                                                <td >100 EL 6</td>
                                                <td >1991/01/10</td>
                                                <td >SN918273381920333</td>
                                                <td ><i class="fa fa-file"></i></td>
                                                <td >یارد خرمشهر</td>
                                                <td >خرمشهر</td>
                                                <td >3</td>
                                            </tr>


                                            <tr>
                                                <td >3</td>
                                                <td >COM-02-1411</td>
                                                <td >11 39 91 133 0</td>
                                                <td >وسایل الکتریکی ؛مخابرات و کامپیوتر</td>
                                                <td >مانیتور </td>
                                                <td >CRT ۱۷ اینچ</td>
                                                <td >۲۵</td>
                                                <td >دستگاه</td>
                                                <td >۱۳۸۴/۱۰/۰۱</td>
                                                <td >۱۵ سال</td>
                                                <td >کارکرده</td>
                                                <td >۱,۲۰۰,۰۰۰ ریال</td>
                                                <td >-</td>
                                                <td >۱ ریال</td>
                                                <td >دفتر پروژه</td>
                                                <td >LG</td>
                                                <td >100 EL 6</td>
                                                <td >۱۳۸۴/۰۸/۱۱</td>
                                                <td >SN918273381920333</td>
                                                <td ><i class="fa fa-file"></i></td>
                                                <td >انبار عسلویه</td>
                                                <td >عسلویه</td>
                                                <td >1</td>
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