@extends('dashboard.layouts.master', ['title' => 'لیست آگهی ها'])
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

                <span class="kt-subheader__desc iranyekan">لیست آگهی ها</span>
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
                                جدول آگهی ها
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
                                            <th title="Field #2" data-field="2">شماره آگهی</th>
                                            <th title="Field #3" data-field="3">نام شرکت فروشنده</th>
                                            <th title="Field #4" data-field="4">شرح کلی تجهیزات</th>
                                            <th title="Field #7" data-field="7">گروه کالایی</th>
                                            <th title="Field #11" data-field="11">قیمت پایه (ارزش ریالی) </th>
                                            <th title="Field #12" data-field="31">محل تحویل تجهیزات (استان - شهر)</th>
                                            <th title="Field #12" data-field="27">تاریخ انتشار</th>
                                            <th title="Field #12" data-field="29">مهلت ارسال پیشنهاد</th>
                                            <th title="Field #12" data-field="29">وضعیت آگهی</th>
                                            <th title="Field #12" data-field="29">انتخاب کالاها</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>۱</td>
                                                <td>۱</td>
                                                <td>شرکت تاسیسات دریایی ایران</td>
                                                <td>۲۵ دستگاه مانیتور کارکرده</td>
                                                <td>وسایل الکتریکی ؛مخابرات و کامپیوتر	</td>
                                                <td>22,500,000 ریال	</td>
                                                <td>عسلویه</td>
                                                <td>۱۳۹۹/۰۳/۰۶</td>
                                                <td>۱۳۹۹/۰۳/۱۶</td>
                                                <td>نمایش داده شده</td>
                                                <td><i class="fa fa-plus"></i></td>
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