@extends('layouts.app')
@section('title', 'تقييم الشركات')
@section('style')
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
@endsection

@section('wrapper')
    <div class="page-wrapper">
        <div class="page-content">
       

            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center my-5">
                        <div class="my-5">
                            <h1 class="Hero-h1 mb-0">تقييم شركات التداول</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-12">
                    <div class="card radius-15 w-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 text-center mt-3">
                                    <div class="d-flex-column">
                                        <img src="assets/images/compaines-logos/AvaTrade-Logo 1.png" alt="" />
                                        <div class="my-2">
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined">stars</span>
                                        </div>
                                        <p class="mb-0 font-13 "><span class="text-success mx-2">4/5</span>عدد التقييمات: 26
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-right line-cards  mt-4">

                                    <div class="d-flex mt-3">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">FCA, CYSEC, CNMV, KNF, DFSA</p>
                                    </div>
                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">ايداع نقدي سريع وسهل</p>
                                    </div>

                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">خوارزميات تداول متقدمة</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-center">
                                    <p class="me-5 mt-3">درجة الامان: <span>مرتفعة</span>

                                    <div class="progress blue mb-5">

                                        <span class="progress-left"><span class="progress-bar"></span></span>

                                        <span class="progress-right"><span class="progress-bar"></span></span>

                                        <div class="progress-value">90%</div>

                                    </div>

                                    </p>
                                    <a style="font-size:small;" class="btn buttons  text-white my-1">فتح حساب</a>
                                    <a style="font-size:small;" class="btn buttons  text-white my-2">ملف الشركة</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer mt-1">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">mobile_friendly</span>
                                    <p class="cards-footer-content">تطبيق الهاتف المحمول</p>
                                </div>

                                <div class="col-lg-4 col-md-3 col-sm-12 d-flex mt-1 mx-4">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">account_balance_wallet</span>
                                    <p class="cards-footer-content">الحد الادنى للايداع: 25 دولارا</p>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">bar_chart_4_bars</span>
                                    <p class="cards-footer-content">عدد الأصول: 3700+</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card radius-15 w-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 text-center mt-3">
                                    <div class="d-flex-column">
                                        <img src="assets/images/compaines-logos/AvaTrade-Logo 1.png" alt="" />
                                        <div class="my-2">
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined">stars</span>
                                        </div>
                                        <p class="mb-0 font-13 "><span class="text-success mx-2">4/5</span>عدد التقييمات: 26
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-right line-cards  mt-4">

                                    <div class="d-flex mt-3">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">FCA, CYSEC, CNMV, KNF, DFSA</p>
                                    </div>
                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">ايداع نقدي سريع وسهل</p>
                                    </div>

                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">خوارزميات تداول متقدمة</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-center">
                                    <p class="me-5 mt-3">درجة الامان: <span>مرتفعة</span>

                                    <div class="progress blue mb-5">

                                        <span class="progress-left"><span class="progress-bar"></span></span>

                                        <span class="progress-right"><span class="progress-bar"></span></span>

                                        <div class="progress-value">90%</div>

                                    </div>

                                    </p>
                                    <a style="font-size:small;" class="btn buttons  text-white my-1">فتح حساب</a>
                                    <a style="font-size:small;" class="btn buttons  text-white my-2">ملف الشركة</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer mt-1">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">mobile_friendly</span>
                                    <p class="cards-footer-content">تطبيق الهاتف المحمول</p>
                                </div>

                                <div class="col-lg-4 col-md-3 col-sm-12 d-flex mt-1 mx-4">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">account_balance_wallet</span>
                                    <p class="cards-footer-content">الحد الادنى للايداع: 25 دولارا</p>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">bar_chart_4_bars</span>
                                    <p class="cards-footer-content">عدد الأصول: 3700+</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card radius-15 w-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 text-center mt-3">
                                    <div class="d-flex-column">
                                        <img src="assets/images/compaines-logos/AvaTrade-Logo 1.png" alt="" />
                                        <div class="my-2">
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined">stars</span>
                                        </div>
                                        <p class="mb-0 font-13 "><span class="text-success mx-2">4/5</span>عدد التقييمات:
                                            26
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-right line-cards  mt-4">

                                    <div class="d-flex mt-3">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">FCA, CYSEC, CNMV, KNF, DFSA</p>
                                    </div>
                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">ايداع نقدي سريع وسهل</p>
                                    </div>

                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">خوارزميات تداول متقدمة</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-center">
                                    <p class="me-5 mt-3">درجة الامان: <span>مرتفعة</span>

                                    <div class="progress blue mb-5">

                                        <span class="progress-left"><span class="progress-bar"></span></span>

                                        <span class="progress-right"><span class="progress-bar"></span></span>

                                        <div class="progress-value">90%</div>

                                    </div>

                                    </p>
                                    <a style="font-size:small;" class="btn buttons  text-white my-1">فتح حساب</a>
                                    <a style="font-size:small;" class="btn buttons  text-white my-2">ملف الشركة</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer mt-1">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">mobile_friendly</span>
                                    <p class="cards-footer-content">تطبيق الهاتف المحمول</p>
                                </div>

                                <div class="col-lg-4 col-md-3 col-sm-12 d-flex mt-1 mx-4">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">account_balance_wallet</span>
                                    <p class="cards-footer-content">الحد الادنى للايداع: 25 دولارا</p>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">bar_chart_4_bars</span>
                                    <p class="cards-footer-content">عدد الأصول: 3700+</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card radius-15 w-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 text-center mt-3">
                                    <div class="d-flex-column">
                                        <img src="assets/images/compaines-logos/AvaTrade-Logo 1.png" alt="" />
                                        <div class="my-2">
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined">stars</span>
                                        </div>
                                        <p class="mb-0 font-13 "><span class="text-success mx-2">4/5</span>عدد التقييمات:
                                            26
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-right line-cards  mt-4">

                                    <div class="d-flex mt-3">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">FCA, CYSEC, CNMV, KNF, DFSA</p>
                                    </div>
                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">ايداع نقدي سريع وسهل</p>
                                    </div>

                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">خوارزميات تداول متقدمة</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-center">
                                    <p class="me-5 mt-3">درجة الامان: <span>مرتفعة</span>

                                    <div class="progress blue mb-5">

                                        <span class="progress-left"><span class="progress-bar"></span></span>

                                        <span class="progress-right"><span class="progress-bar"></span></span>

                                        <div class="progress-value">90%</div>

                                    </div>

                                    </p>
                                    <a style="font-size:small;" class="btn buttons  text-white my-1">فتح حساب</a>
                                    <a style="font-size:small;" class="btn buttons  text-white my-2">ملف الشركة</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer mt-1">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">mobile_friendly</span>
                                    <p class="cards-footer-content">تطبيق الهاتف المحمول</p>
                                </div>

                                <div class="col-lg-4 col-md-3 col-sm-12 d-flex mt-1 mx-4">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">account_balance_wallet</span>
                                    <p class="cards-footer-content">الحد الادنى للايداع: 25 دولارا</p>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">bar_chart_4_bars</span>
                                    <p class="cards-footer-content">عدد الأصول: 3700+</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card radius-15 w-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 text-center mt-3">
                                    <div class="d-flex-column">
                                        <img src="assets/images/compaines-logos/AvaTrade-Logo 1.png" alt="" />
                                        <div class="my-2">
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined">stars</span>
                                        </div>
                                        <p class="mb-0 font-13 "><span class="text-success mx-2">4/5</span>عدد التقييمات:
                                            26
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-right line-cards  mt-4">

                                    <div class="d-flex mt-3">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">FCA, CYSEC, CNMV, KNF, DFSA</p>
                                    </div>
                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">ايداع نقدي سريع وسهل</p>
                                    </div>

                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">خوارزميات تداول متقدمة</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-center">
                                    <p class="me-5 mt-3">درجة الامان: <span>مرتفعة</span>

                                    <div class="progress blue mb-5">

                                        <span class="progress-left"><span class="progress-bar"></span></span>

                                        <span class="progress-right"><span class="progress-bar"></span></span>

                                        <div class="progress-value">90%</div>

                                    </div>

                                    </p>
                                    <a style="font-size:small;" class="btn buttons  text-white my-1">فتح حساب</a>
                                    <a style="font-size:small;" class="btn buttons  text-white my-2">ملف الشركة</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer mt-1">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">mobile_friendly</span>
                                    <p class="cards-footer-content">تطبيق الهاتف المحمول</p>
                                </div>

                                <div class="col-lg-4 col-md-3 col-sm-12 d-flex mt-1 mx-4">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">account_balance_wallet</span>
                                    <p class="cards-footer-content">الحد الادنى للايداع: 25 دولارا</p>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">bar_chart_4_bars</span>
                                    <p class="cards-footer-content">عدد الأصول: 3700+</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card radius-15 w-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 text-center mt-3">
                                    <div class="d-flex-column">
                                        <img src="assets/images/compaines-logos/AvaTrade-Logo 1.png" alt="" />
                                        <div class="my-2">
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined">stars</span>
                                        </div>
                                        <p class="mb-0 font-13 "><span class="text-success mx-2">4/5</span>عدد التقييمات:
                                            26
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-right line-cards  mt-4">

                                    <div class="d-flex mt-3">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">FCA, CYSEC, CNMV, KNF, DFSA</p>
                                    </div>
                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">ايداع نقدي سريع وسهل</p>
                                    </div>

                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">خوارزميات تداول متقدمة</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-center">
                                    <p class="me-5 mt-3">درجة الامان: <span>مرتفعة</span>

                                    <div class="progress blue mb-5">

                                        <span class="progress-left"><span class="progress-bar"></span></span>

                                        <span class="progress-right"><span class="progress-bar"></span></span>

                                        <div class="progress-value">90%</div>

                                    </div>

                                    </p>
                                    <a style="font-size:small;" class="btn buttons  text-white my-1">فتح حساب</a>
                                    <a style="font-size:small;" class="btn buttons  text-white my-2">ملف الشركة</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer mt-1">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">mobile_friendly</span>
                                    <p class="cards-footer-content">تطبيق الهاتف المحمول</p>
                                </div>

                                <div class="col-lg-4 col-md-3 col-sm-12 d-flex mt-1 mx-4">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">account_balance_wallet</span>
                                    <p class="cards-footer-content">الحد الادنى للايداع: 25 دولارا</p>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">bar_chart_4_bars</span>
                                    <p class="cards-footer-content">عدد الأصول: 3700+</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card radius-15 w-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 text-center mt-3">
                                    <div class="d-flex-column">
                                        <img src="assets/images/compaines-logos/AvaTrade-Logo 1.png" alt="" />
                                        <div class="my-2">
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined">stars</span>
                                        </div>
                                        <p class="mb-0 font-13 "><span class="text-success mx-2">4/5</span>عدد التقييمات:
                                            26
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-right line-cards  mt-4">

                                    <div class="d-flex mt-3">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">FCA, CYSEC, CNMV, KNF, DFSA</p>
                                    </div>
                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">ايداع نقدي سريع وسهل</p>
                                    </div>

                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">خوارزميات تداول متقدمة</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-center">
                                    <p class="me-5 mt-3">درجة الامان: <span>مرتفعة</span>

                                    <div class="progress blue mb-5">

                                        <span class="progress-left"><span class="progress-bar"></span></span>

                                        <span class="progress-right"><span class="progress-bar"></span></span>

                                        <div class="progress-value">90%</div>

                                    </div>

                                    </p>
                                    <a style="font-size:small;" class="btn buttons  text-white my-1">فتح حساب</a>
                                    <a style="font-size:small;" class="btn buttons  text-white my-2">ملف الشركة</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer mt-1">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">mobile_friendly</span>
                                    <p class="cards-footer-content">تطبيق الهاتف المحمول</p>
                                </div>

                                <div class="col-lg-4 col-md-3 col-sm-12 d-flex mt-1 mx-4">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">account_balance_wallet</span>
                                    <p class="cards-footer-content">الحد الادنى للايداع: 25 دولارا</p>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">bar_chart_4_bars</span>
                                    <p class="cards-footer-content">عدد الأصول: 3700+</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card radius-15 w-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 text-center mt-3">
                                    <div class="d-flex-column">
                                        <img src="assets/images/compaines-logos/AvaTrade-Logo 1.png" alt="" />
                                        <div class="my-2">
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined">stars</span>
                                        </div>
                                        <p class="mb-0 font-13 "><span class="text-success mx-2">4/5</span>عدد التقييمات:
                                            26
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-right line-cards  mt-4">

                                    <div class="d-flex mt-3">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">FCA, CYSEC, CNMV, KNF, DFSA</p>
                                    </div>
                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">ايداع نقدي سريع وسهل</p>
                                    </div>

                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">خوارزميات تداول متقدمة</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-center">
                                    <p class="me-5 mt-3">درجة الامان: <span>مرتفعة</span>

                                    <div class="progress blue mb-5">

                                        <span class="progress-left"><span class="progress-bar"></span></span>

                                        <span class="progress-right"><span class="progress-bar"></span></span>

                                        <div class="progress-value">90%</div>

                                    </div>

                                    </p>
                                    <a style="font-size:small;" class="btn buttons  text-white my-1">فتح حساب</a>
                                    <a style="font-size:small;" class="btn buttons  text-white my-2">ملف الشركة</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer mt-1">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">mobile_friendly</span>
                                    <p class="cards-footer-content">تطبيق الهاتف المحمول</p>
                                </div>

                                <div class="col-lg-4 col-md-3 col-sm-12 d-flex mt-1 mx-4">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">account_balance_wallet</span>
                                    <p class="cards-footer-content">الحد الادنى للايداع: 25 دولارا</p>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">bar_chart_4_bars</span>
                                    <p class="cards-footer-content">عدد الأصول: 3700+</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card radius-15 w-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 text-center mt-3">
                                    <div class="d-flex-column">
                                        <img src="assets/images/compaines-logos/AvaTrade-Logo 1.png" alt="" />
                                        <div class="my-2">
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined">stars</span>
                                        </div>
                                        <p class="mb-0 font-13 "><span class="text-success mx-2">4/5</span>عدد التقييمات: 26
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-right line-cards  mt-4">

                                    <div class="d-flex mt-3">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">FCA, CYSEC, CNMV, KNF, DFSA</p>
                                    </div>
                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">ايداع نقدي سريع وسهل</p>
                                    </div>

                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">خوارزميات تداول متقدمة</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-center">
                                    <p class="me-5 mt-3">درجة الامان: <span>مرتفعة</span>

                                    <div class="progress blue mb-5">

                                        <span class="progress-left"><span class="progress-bar"></span></span>

                                        <span class="progress-right"><span class="progress-bar"></span></span>

                                        <div class="progress-value">90%</div>

                                    </div>

                                    </p>
                                    <a style="font-size:small;" class="btn buttons  text-white my-1">فتح حساب</a>
                                    <a style="font-size:small;" class="btn buttons  text-white my-2">ملف الشركة</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer mt-1">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">mobile_friendly</span>
                                    <p class="cards-footer-content">تطبيق الهاتف المحمول</p>
                                </div>

                                <div class="col-lg-4 col-md-3 col-sm-12 d-flex mt-1 mx-4">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">account_balance_wallet</span>
                                    <p class="cards-footer-content">الحد الادنى للايداع: 25 دولارا</p>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">bar_chart_4_bars</span>
                                    <p class="cards-footer-content">عدد الأصول: 3700+</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card radius-15 w-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 text-center mt-3">
                                    <div class="d-flex-column">
                                        <img src="assets/images/compaines-logos/AvaTrade-Logo 1.png" alt="" />
                                        <div class="my-2">
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined">stars</span>
                                        </div>
                                        <p class="mb-0 font-13 "><span class="text-success mx-2">4/5</span>عدد التقييمات: 26
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-right line-cards  mt-4">

                                    <div class="d-flex mt-3">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">FCA, CYSEC, CNMV, KNF, DFSA</p>
                                    </div>
                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">ايداع نقدي سريع وسهل</p>
                                    </div>

                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">خوارزميات تداول متقدمة</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-center">
                                    <p class="me-5 mt-3">درجة الامان: <span>مرتفعة</span>

                                    <div class="progress blue mb-5">

                                        <span class="progress-left"><span class="progress-bar"></span></span>

                                        <span class="progress-right"><span class="progress-bar"></span></span>

                                        <div class="progress-value">90%</div>

                                    </div>

                                    </p>
                                    <a style="font-size:small;" class="btn buttons  text-white my-1">فتح حساب</a>
                                    <a style="font-size:small;" class="btn buttons  text-white my-2">ملف الشركة</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer mt-1">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">mobile_friendly</span>
                                    <p class="cards-footer-content">تطبيق الهاتف المحمول</p>
                                </div>

                                <div class="col-lg-4 col-md-3 col-sm-12 d-flex mt-1 mx-4">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">account_balance_wallet</span>
                                    <p class="cards-footer-content">الحد الادنى للايداع: 25 دولارا</p>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">bar_chart_4_bars</span>
                                    <p class="cards-footer-content">عدد الأصول: 3700+</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card radius-15 w-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 text-center mt-3">
                                    <div class="d-flex-column">
                                        <img src="assets/images/compaines-logos/AvaTrade-Logo 1.png" alt="" />
                                        <div class="my-2">
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined">stars</span>
                                        </div>
                                        <p class="mb-0 font-13 "><span class="text-success mx-2">4/5</span>عدد التقييمات: 26
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-right line-cards  mt-4">

                                    <div class="d-flex mt-3">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">FCA, CYSEC, CNMV, KNF, DFSA</p>
                                    </div>
                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">ايداع نقدي سريع وسهل</p>
                                    </div>

                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">خوارزميات تداول متقدمة</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-center">
                                    <p class="me-5 mt-3">درجة الامان: <span>مرتفعة</span>

                                    <div class="progress blue mb-5">

                                        <span class="progress-left"><span class="progress-bar"></span></span>

                                        <span class="progress-right"><span class="progress-bar"></span></span>

                                        <div class="progress-value">90%</div>

                                    </div>

                                    </p>
                                    <a style="font-size:small;" class="btn buttons  text-white my-1">فتح حساب</a>
                                    <a style="font-size:small;" class="btn buttons  text-white my-2">ملف الشركة</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer mt-1">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">mobile_friendly</span>
                                    <p class="cards-footer-content">تطبيق الهاتف المحمول</p>
                                </div>

                                <div class="col-lg-4 col-md-3 col-sm-12 d-flex mt-1 mx-4">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">account_balance_wallet</span>
                                    <p class="cards-footer-content">الحد الادنى للايداع: 25 دولارا</p>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">bar_chart_4_bars</span>
                                    <p class="cards-footer-content">عدد الأصول: 3700+</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card radius-15 w-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 text-center mt-3">
                                    <div class="d-flex-column">
                                        <img src="assets/images/compaines-logos/AvaTrade-Logo 1.png" alt="" />
                                        <div class="my-2">
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined">stars</span>
                                        </div>
                                        <p class="mb-0 font-13 "><span class="text-success mx-2">4/5</span>عدد التقييمات: 26
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-right line-cards  mt-4">

                                    <div class="d-flex mt-3">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">FCA, CYSEC, CNMV, KNF, DFSA</p>
                                    </div>
                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">ايداع نقدي سريع وسهل</p>
                                    </div>

                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">خوارزميات تداول متقدمة</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-center">
                                    <p class="me-5 mt-3">درجة الامان: <span>مرتفعة</span>

                                    <div class="progress blue mb-5">

                                        <span class="progress-left"><span class="progress-bar"></span></span>

                                        <span class="progress-right"><span class="progress-bar"></span></span>

                                        <div class="progress-value">90%</div>

                                    </div>

                                    </p>
                                    <a style="font-size:small;" class="btn buttons  text-white my-1">فتح حساب</a>
                                    <a style="font-size:small;" class="btn buttons  text-white my-2">ملف الشركة</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer mt-1">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">mobile_friendly</span>
                                    <p class="cards-footer-content">تطبيق الهاتف المحمول</p>
                                </div>

                                <div class="col-lg-4 col-md-3 col-sm-12 d-flex mt-1 mx-4">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">account_balance_wallet</span>
                                    <p class="cards-footer-content">الحد الادنى للايداع: 25 دولارا</p>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">bar_chart_4_bars</span>
                                    <p class="cards-footer-content">عدد الأصول: 3700+</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card radius-15 w-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 text-center mt-3">
                                    <div class="d-flex-column">
                                        <img src="assets/images/compaines-logos/AvaTrade-Logo 1.png" alt="" />
                                        <div class="my-2">
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined">stars</span>
                                        </div>
                                        <p class="mb-0 font-13 "><span class="text-success mx-2">4/5</span>عدد التقييمات: 26
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-right line-cards  mt-4">

                                    <div class="d-flex mt-3">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">FCA, CYSEC, CNMV, KNF, DFSA</p>
                                    </div>
                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">ايداع نقدي سريع وسهل</p>
                                    </div>

                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">خوارزميات تداول متقدمة</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-center">
                                    <p class="me-5 mt-3">درجة الامان: <span>مرتفعة</span>

                                    <div class="progress blue mb-5">

                                        <span class="progress-left"><span class="progress-bar"></span></span>

                                        <span class="progress-right"><span class="progress-bar"></span></span>

                                        <div class="progress-value">90%</div>

                                    </div>

                                    </p>
                                    <a style="font-size:small;" class="btn buttons  text-white my-1">فتح حساب</a>
                                    <a style="font-size:small;" class="btn buttons  text-white my-2">ملف الشركة</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer mt-1">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">mobile_friendly</span>
                                    <p class="cards-footer-content">تطبيق الهاتف المحمول</p>
                                </div>

                                <div class="col-lg-4 col-md-3 col-sm-12 d-flex mt-1 mx-4">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">account_balance_wallet</span>
                                    <p class="cards-footer-content">الحد الادنى للايداع: 25 دولارا</p>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">bar_chart_4_bars</span>
                                    <p class="cards-footer-content">عدد الأصول: 3700+</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card radius-15 w-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 text-center mt-3">
                                    <div class="d-flex-column">
                                        <img src="assets/images/compaines-logos/AvaTrade-Logo 1.png" alt="" />
                                        <div class="my-2">
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined">stars</span>
                                        </div>
                                        <p class="mb-0 font-13 "><span class="text-success mx-2">4/5</span>عدد التقييمات: 26
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-right line-cards  mt-4">

                                    <div class="d-flex mt-3">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">FCA, CYSEC, CNMV, KNF, DFSA</p>
                                    </div>
                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">ايداع نقدي سريع وسهل</p>
                                    </div>

                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">خوارزميات تداول متقدمة</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-center">
                                    <p class="me-5 mt-3">درجة الامان: <span>مرتفعة</span>

                                    <div class="progress blue mb-5">

                                        <span class="progress-left"><span class="progress-bar"></span></span>

                                        <span class="progress-right"><span class="progress-bar"></span></span>

                                        <div class="progress-value">90%</div>

                                    </div>

                                    </p>
                                    <a style="font-size:small;" class="btn buttons  text-white my-1">فتح حساب</a>
                                    <a style="font-size:small;" class="btn buttons  text-white my-2">ملف الشركة</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer mt-1">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">mobile_friendly</span>
                                    <p class="cards-footer-content">تطبيق الهاتف المحمول</p>
                                </div>

                                <div class="col-lg-4 col-md-3 col-sm-12 d-flex mt-1 mx-4">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">account_balance_wallet</span>
                                    <p class="cards-footer-content">الحد الادنى للايداع: 25 دولارا</p>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">bar_chart_4_bars</span>
                                    <p class="cards-footer-content">عدد الأصول: 3700+</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card radius-15 w-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 text-center mt-3">
                                    <div class="d-flex-column">
                                        <img src="assets/images/compaines-logos/AvaTrade-Logo 1.png" alt="" />
                                        <div class="my-2">
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined">stars</span>
                                        </div>
                                        <p class="mb-0 font-13 "><span class="text-success mx-2">4/5</span>عدد التقييمات: 26
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-right line-cards  mt-4">

                                    <div class="d-flex mt-3">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">FCA, CYSEC, CNMV, KNF, DFSA</p>
                                    </div>
                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">ايداع نقدي سريع وسهل</p>
                                    </div>

                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">خوارزميات تداول متقدمة</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-center">
                                    <p class="me-5 mt-3">درجة الامان: <span>مرتفعة</span>

                                    <div class="progress blue mb-5">

                                        <span class="progress-left"><span class="progress-bar"></span></span>

                                        <span class="progress-right"><span class="progress-bar"></span></span>

                                        <div class="progress-value">90%</div>

                                    </div>

                                    </p>
                                    <a style="font-size:small;" class="btn buttons  text-white my-1">فتح حساب</a>
                                    <a style="font-size:small;" class="btn buttons  text-white my-2">ملف الشركة</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer mt-1">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">mobile_friendly</span>
                                    <p class="cards-footer-content">تطبيق الهاتف المحمول</p>
                                </div>

                                <div class="col-lg-4 col-md-3 col-sm-12 d-flex mt-1 mx-4">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">account_balance_wallet</span>
                                    <p class="cards-footer-content">الحد الادنى للايداع: 25 دولارا</p>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">bar_chart_4_bars</span>
                                    <p class="cards-footer-content">عدد الأصول: 3700+</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card radius-15 w-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 text-center mt-3">
                                    <div class="d-flex-column">
                                        <img src="assets/images/compaines-logos/AvaTrade-Logo 1.png" alt="" />
                                        <div class="my-2">
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined checked">stars</span>
                                            <span class="material-symbols-outlined">stars</span>
                                        </div>
                                        <p class="mb-0 font-13 "><span class="text-success mx-2">4/5</span>عدد التقييمات: 26
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-right line-cards  mt-4">

                                    <div class="d-flex mt-3">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">FCA, CYSEC, CNMV, KNF, DFSA</p>
                                    </div>
                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">ايداع نقدي سريع وسهل</p>
                                    </div>

                                    <div class="d-flex">
                                        <span class="material-symbols-outlined cards-check text-success">beenhere</span>
                                        <p class="cards-check-content ms-2">خوارزميات تداول متقدمة</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 align-items-center text-center">
                                    <p class="me-5 mt-3">درجة الامان: <span>مرتفعة</span>

                                    <div class="progress blue mb-5">

                                        <span class="progress-left"><span class="progress-bar"></span></span>

                                        <span class="progress-right"><span class="progress-bar"></span></span>

                                        <div class="progress-value">90%</div>

                                    </div>

                                    </p>
                                    <a style="font-size:small;" class="btn buttons  text-white my-1">فتح حساب</a>
                                    <a style="font-size:small;" class="btn buttons  text-white my-2">ملف الشركة</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer mt-1">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">mobile_friendly</span>
                                    <p class="cards-footer-content">تطبيق الهاتف المحمول</p>
                                </div>

                                <div class="col-lg-4 col-md-3 col-sm-12 d-flex mt-1 mx-4">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">account_balance_wallet</span>
                                    <p class="cards-footer-content">الحد الادنى للايداع: 25 دولارا</p>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 d-flex mt-1">
                                    <span
                                        class="material-symbols-outlined icon-color cards-footer-icons me-2">bar_chart_4_bars</span>
                                    <p class="cards-footer-content">عدد الأصول: 3700+</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->


        </div>
    </div>
@endsection

@section('script')
    <script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/js/index.js"></script>
@endsection
