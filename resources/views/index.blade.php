@extends('layouts.app')
@section('title', 'الصفحة الرئيسية')
@section('style')
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
@endsection


@section('wrapper')
    <div class="popup p-1">
        <div class="conentBox p-4">
            <button id="close" type="button" class="btn-close m-1 me-auto float-end" aria-label="Close"></button>
            <h3><span class="text-success">انتظر</span>, هل أمسكت<br>عرض الجمعة السوداء الخاص بك؟</h3>
            <p class="my-3">احصل على خصم 30% على جميع خطط الخادم الافتراضي الخاص مدى الحياة + وصول مجاني إلى HowToTrade
                وTrackaTrader</p>
            <a href="" class="btn btn-outline-success my-3">احصل على العرض الان</a>
        </div>
    </div>

    <div class="page-wrapper">
        <div class="page-content">

            <div class="mt-2">
                <a class="header-links me-3" href="">
                    <img src="assets/images/icons/target.svg" alt="" />
                    منهجية أهداف الاستثمار

                </a>
                <a class="header-links" href="">
                    <img src="assets/images/icons/Vector.svg" alt="" />
                    الكشف عن المعلن
                </a>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center my-5">
                        <div class="my-5">
                            <h1 class="Hero-h1 mb-0">أفضل شركات التداول المرخصة عالمياً بين يديك</h1>
                            <p class="Hero-p my-3">اختر بنفسك وابدأ التداول مع شركات مرخصة وموثوقة وتجنب التداول مع الشركات
                                الغير معروفة</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->

            <div class="row">
                <h1 class="Hero-h1 mb-5">شركات التداول</h1>
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
                                    <a href="/#" style="font-size:small;" class="btn buttons  text-white my-1">فتح
                                        حساب</a>
                                    <a href="/company" style="font-size:small;" class="btn buttons  text-white my-2">ملف
                                        الشركة</a>
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
                                        <img src="assets/images/compaines-logos/Layer 1.png" alt="" />
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
                                        <img src="assets/images/compaines-logos/review-5-xtb-yaaqen.png" alt="" />
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
                                        <img src="assets/images/compaines-logos/Evest-logo.png" alt="" />
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

                <div class="float-end text-end mb-5 mt-3">
                    <a href="/ratings" class="btn more-buttons text-white ms-3">المزيد<i
                            class='bx bx-chevron-left ms-4'></i></a>
                </div>
            </div>
            <!--end row-->

            <div class="row">
                <h1 class="Hero-h1 mb-5">احدث مقالات التداول</h1>

                <div class="d-flex col-lg-4 col-md-6 col-sm-12 my-4">
                    <div class="card gradiant w-100 h-100">
                        <div class="card-body text-dark">
                            <a href="#">
                                <h5 class="card-title articles-font-styls text-dark mt-3">أفضل كتب تداول الفوركس لعام 2023
                                </h5>
                            </a>
                            <p class="card-text">
                                <span class="material-symbols-outlined">calendar_month</span>
                                <span class="date-articles articles-font-styls-date">2023-10-27</span>
                                <a href="#"><span class="float-end">
                                        <i class="fadeIn animated bx bx-arrow-back bx-arrow-back-articles"></i>
                                    </span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex col-lg-4 col-md-6 col-sm-12 my-4">
                    <div class="card gradiant w-100 h-100">
                        <div class="card-body text-dark">
                            <a href="#">
                                <h5 class="card-title articles-font-styls text-dark mt-3">ما هو تداول عقود الفروقات عبر
                                    الإنترنت؟</h5>
                            </a>
                            <p class="card-text">
                                <span class="material-symbols-outlined">calendar_month</span>
                                <span class="date-articles articles-font-styls-date">2023-10-27</span>
                                <a href="#"><span class="float-end">
                                        <i class="fadeIn animated bx bx-arrow-back bx-arrow-back-articles"></i>
                                    </span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex col-lg-4 col-md-6 col-sm-12 my-4">
                    <div class="card gradiant w-100 h-100">
                        <div class="card-body text-dark">
                            <a href="#">
                                <h5 class="card-title articles-font-styls text-dark mt-3">تداول عقود الفروقات على السلع: كل
                                    ماتريد معرفته</h5>
                            </a>
                            <p class="card-text">
                                <span class="material-symbols-outlined">calendar_month</span>
                                <span class="date-articles articles-font-styls-date">2023-10-27</span>
                                <a href="#"><span class="float-end">
                                        <i class="fadeIn animated bx bx-arrow-back bx-arrow-back-articles"></i>
                                    </span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex col-lg-4 col-md-6 col-sm-12 my-4">
                    <div class="card gradiant w-100 h-100">
                        <div class="card-body text-dark">
                            <a href="#">
                                <h5 class="card-title articles-font-styls text-dark mt-3">أفضل كتب تداول الفوركس لعام 2023
                                </h5>
                            </a>
                            <p class="card-text">
                                <span class="material-symbols-outlined">calendar_month</span>
                                <span class="date-articles articles-font-styls-date">2023-10-27</span>
                                <a href="#"><span class="float-end">
                                        <i class="fadeIn animated bx bx-arrow-back bx-arrow-back-articles"></i>
                                    </span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex col-lg-4 col-md-6 col-sm-12 my-4">
                    <div class="card gradiant w-100 h-100">
                        <div class="card-body text-dark">
                            <a href="#">
                                <h5 class="card-title articles-font-styls text-dark mt-3">ما هو تداول عقود الفروقات عبر
                                    الإنترنت؟</h5>
                            </a>
                            <p class="card-text">
                                <span class="material-symbols-outlined">calendar_month</span>
                                <span class="date-articles articles-font-styls-date">2023-10-27</span>
                                <a href="#"><span class="float-end">
                                        <i class="fadeIn animated bx bx-arrow-back bx-arrow-back-articles"></i>
                                    </span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex col-lg-4 col-md-6 col-sm-12 my-4">
                    <div class="card gradiant w-100 h-100">
                        <div class="card-body text-dark">
                            <a href="#">
                                <h5 class="card-title articles-font-styls text-dark mt-3">تداول عقود الفروقات على السلع: كل
                                    ماتريد معرفته</h5>
                            </a>
                            <p class="card-text">
                                <span class="material-symbols-outlined">calendar_month</span>
                                <span class="date-articles articles-font-styls-date">2023-10-27</span>
                                <a href="#"><span class="float-end">
                                        <i class="fadeIn animated bx bx-arrow-back bx-arrow-back-articles"></i>
                                    </span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="float-end text-end my-2">
                    <a href="/articles" class="btn more-buttons text-white ms-3">المزيد<i
                            class='bx bx-chevron-left ms-4'></i></a>
                </div>
            </div>
            <!--end row-->

            <div class="row">
                <h1 class="Hero-h1 mt-5 mb-3">كيف يتم تصنيف الوسطاء؟</h1>
                <p>يتم تصنيف الوسطاء من قبل فريق من الخبراء بناءً على عناصر مشتركة مثل أرقام <br> الأصول والرسوم واللوائح
                    والخصائص التقنية</p>

                <div class="d-flex col-lg-3 col-md-4 col-sm-12 my-4">
                    <div class="card brokers-card bg-white w-100">
                        <img src="assets/images/brokers-section-icons-home/Layer_1.png"
                            class="card-img-top mx-auto brokers-section-icons-home mt-3" alt="icon">
                        <div class="card-body text-center brokers-section-icons-p text-dark mt-4">
                            منصة بسيطة وبديهية
                        </div>
                    </div>
                </div>
                <div class="d-flex col-lg-3 col-md-4 col-sm-12 my-4">
                    <div class="card brokers-card bg-white w-100">
                        <img src="assets/images/brokers-section-icons-home/cashback_9722140 1.png"
                            class="card-img-top mx-auto brokers-section-icons-home mt-3" alt="icon">
                        <div class="card-body text-center brokers-section-icons-p text-dark mt-4">
                            0 عمولات
                        </div>
                    </div>
                </div>
                <div class="d-flex col-lg-3 col-md-4 col-sm-12 my-4">
                    <div class="card brokers-card bg-white w-100">
                        <img src="assets/images/brokers-section-icons-home/Icon.png"
                            class="card-img-top mx-auto brokers-section-icons-home mt-3" alt="icon">
                        <div class="card-body text-center brokers-section-icons-p text-dark mt-4">
                            الوسطاء المنظمون
                        </div>
                    </div>
                </div>
                <div class="d-flex col-lg-3 col-md-4 col-sm-12 my-4">
                    <div class="card brokers-card bg-white w-100">
                        <img src="assets/images/brokers-section-icons-home/Group.png"
                            class="card-img-top mx-auto brokers-section-icons-home mt-3" alt="icon">
                        <div class="card-body text-center brokers-section-icons-p text-dark mt-4">
                            سحوبات سهلة وسريعة
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->

            <div class="row">
                <h1 class="Hero-h1 my-5">الاسئلة الاكثر تكرارا</h1>

                <div class="card">
                    <div class="card-body">
                        <div class="accordion" id="accordionExample">

                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        لماذا من الضروري أن يكون لديك وسيط؟
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>هناك حاجة إلى وسطاء لأن أسواق الأوراق المالية لن تقبل إلا الطلبات من أعضاء
                                            البورصة - حيث يقوم الوسطاء بترتيب المعاملات بين المشتري والبائع. إنهم يحصلون على
                                            عمولة بعد تنفيذ الصفقة (على الرغم من أنهم يختارون في بعض الأحيان تخفيض أو حتى
                                            إلغاء الرسوم لبعض منتجات التداول).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        ما الذي تبحث عنه في الوسيط؟
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>That's so cute. Can we have Bender Burgers again? Is the Space Pope
                                            reptilian!? I wish! It's a nickel. Bender! Ship! Stop bickering or I'm going
                                            to come back there and change your opinions manually!</p>
                                        <p><strong>Example: </strong>Okay, I like a challenge. Is that a cooking show?
                                            No argument here.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        كيف تختار الوسيط؟
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>As I have explained in my book 'Earth in the Balance', and the much more
                                            popular 'Harry Potter and the Balance of Earth', we need to defend our
                                            planet against pollution. Also dark wizards. Fry, you can't just sit here in
                                            the dark listening to classical music.</p>
                                        <p><strong>Example: </strong>Actually, that's still true. Well, let's just dump
                                            it in the sewer and say we delivered it.</p>
                                    </div>
                                </div>
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
    <script src="assets/js/app.js"></script>
@endsection
