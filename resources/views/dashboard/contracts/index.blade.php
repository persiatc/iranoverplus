@extends('dashboard.layouts.master', ['title' => 'لیست قرارداد ها'])
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










    <div class="modal fade text-left" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17">افزودن قرارداد</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form style="vertical-align:center;text-align:center" enctype="multipart/form-data" method="post" action="contracts" class="form form-horizontal form-bordered striped-rows">
                        @csrf
                        <div style="font-family:byekan" class="form-body">
                            <h4 class="form-section"><i class="ft-user"></i> شرح قرارداد</h4><br>
                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">عنوان قرارداد</label>
                                <div class="col-md-9">
                                    <input type="text" id="name" class="form-control" placeholder="عنوان قرارداد" name="onvan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="description">موضوع قرارداد</label>
                                <div class="col-md-9">
                                    <input type="text" id="description" class="form-control" placeholder="موضوع قرارداد" name="mozoo">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="contractor">نام خریدار</label>
                                <div class="col-md-9">
                                    <input type="text" id="contractor" class="form-control" placeholder="نام خریدار" name="peymankar">
                                </div>
                            </div>


                            <div class="form-group row last">
                                <label class="col-md-3 label-control" for="from">مبلغ قرارداد </label>
                                <div class="col-md-9">
                                    <input type="text" id="from" class="form-control" placeholder="مثال: ۳۰۰۰۰۰۰" name="mablagh">
                                </div>
                            </div>

                            <div class="form-group row last">
                                <label class="col-md-3 label-control" for="from">نحوه پرداخت </label>
                                <div class="col-md-9">
                                    <input type="text" id="from" class="form-control" placeholder="مثال: چک" name="pardakht">
                                </div>
                            </div>




                            <div class="form-group row last">
                                <label class="col-md-3 label-control" for="from">مدت قرارداد </label>
                                <div class="col-md-9">
                                    <input type="text" id="from" class="form-control" placeholder="مثال: یکساله" name="moddat">
                                </div>
                            </div>



                            <div class="form-group row last">
                                <label class="col-md-3 label-control" for="from">تاریخ شروع</label>
                                <div class="col-md-9">
                                    <input type="text" id="from" class="form-control" placeholder="مثال: ۱۳۹۷/۰۶/۲۱" name="from">
                                </div>
                            </div>



                            <div class="form-group row last">
                                <label class="col-md-3 label-control" for="to">تاریخ پایان</label>
                                <div class="col-md-9">
                                    <input type="text" id="to" class="form-control" placeholder="مثال: ۱۳۹۷/۱۱/۲۱" name="to">
                                </div>
                            </div>

                            <div class="form-group row last">
                                <label class="col-md-3 label-control" for="from">نوع تضمین </label>
                                <div class="col-md-9">
                                    <input type="text" id="from" class="form-control" placeholder="مثال: ضمانت بانکی" name="tazmin">
                                </div>
                            </div>

                            <div class="form-group row last">
                                <label class="col-md-3 label-control" for="from">ناظر قرارداد </label>
                                <div class="col-md-9">
                                    <input type="text" id="from" class="form-control" placeholder="مثال: شرکت ..." name="nazer">
                                </div>
                            </div>


                            <div class="form-group row last">
                                <label class="col-md-3 label-control" for="from">توضیحات</label>
                                <div class="col-md-9">
                                    <textarea name="description" rows="8"  class="form-control" cols="80"></textarea>
                                </div>
                            </div>

                            <div  class="form-group row last">
                                <label class="col-md-3 label-control" for="contractorFile">آپلود فایل قرارداد</label>
                                <div class="col-md-9">
                                    <input type="file" id="contractorFile" class="form-control" name="contractorFile">
                                </div>
                            </div>



                        </div>

                        <div style="font-family:Byekan" class="form-actions">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-check-square-o"></i> افزودن
                            </button>

                            <button type="button" class="btn btn-warning mr-1">
                                <i class="ft-x"></i> لغو
                            </button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>












    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">داشبورد </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc iranyekan">لیست قرارداد ها</span>
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
                                جدول قرارداد ها
                            </h3>

                            <button type="button" class="btn btn-success btn-sm ml-3" data-target="#addUser" data-toggle="modal" aria-expanded="false"><i class="la la-plus"></i> افزودن قرارداد </button>
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
                                            <th title="Field #2" data-field="3">عنوان قرارداد</th>
                                            <th title="Field #4" data-field="4">موضوع قرارداد</th>
                                            <th title="Field #4" data-field="5">نام خریدار</th>
                                            <th title="Field #4" data-field="6">مبلغ قرارداد</th>
                                            <th title="Field #7" data-field="7">نحوه پرداخت</th>
                                            <th title="Field #3" data-field="8">مدت قرارداد</th>
                                            <th title="Field #10" data-field="9">تاریخ شروع</th>
                                            <th title="Field #11" data-field="10">تاریخ پایان </th>
                                            <th title="Field #12" data-field="11">نوع تضمین</th>
                                            <th title="Field #12" data-field="12">ناظر قرارداد</th>
                                            <th title="Field #12" data-field="13">توضیحات</th>
                                            <th title="Field #12" data-field="14">فایل قرارداد</th>


                                        </tr>
                                        </thead>
                                        <tbody>



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