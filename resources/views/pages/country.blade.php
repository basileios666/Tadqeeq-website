@extends('layouts.app')
@section('title', 'تقييم شركة AvaTrade')
@section('style')
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
@endsection

@section('wrapper')
    <div class="page-wrapper">
        <div class="mb-5">
            <a href="/" class="header-links nav-nav-map me-3" href="">
                الرئيسية
                /<span>
                    <a>شركات التداول بالسعودية</a>
                </span>
            </a>
        </div>
        <div class="page-content">

            <div>
                <a class="header-links me-3" href="">
                    <img src="assets/images/icons/target.svg" alt="" />
                    منهجية أهداف الاستثمار
                </a>
                <a class="header-links" href="">
                    <img src="assets/images/icons/Vector.svg" alt="" />
                    الكشف عن المعلن
                </a>
            </div>

            <h1 class="Hero-h1 my-5">أفضل شركات التداول المرخصة في السعودية</h1>
            <div class="row my-5">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <a class="header-links d-flex me-3" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                            fill="none">
                            <path
                                d="M3.85 15.1C4.7 14.45 5.65 13.9375 6.7 13.5625C7.75 13.1875 8.85 13 10 13C11.15 13 12.25 13.1875 13.3 13.5625C14.35 13.9375 15.3 14.45 16.15 15.1C16.7333 14.4167 17.1875 13.6417 17.5125 12.775C17.8375 11.9083 18 10.9833 18 10C18 7.78333 17.2208 5.89583 15.6625 4.3375C14.1042 2.77917 12.2167 2 10 2C7.78333 2 5.89583 2.77917 4.3375 4.3375C2.77917 5.89583 2 7.78333 2 10C2 10.9833 2.1625 11.9083 2.4875 12.775C2.8125 13.6417 3.26667 14.4167 3.85 15.1ZM10 11C9.01667 11 8.1875 10.6625 7.5125 9.9875C6.8375 9.3125 6.5 8.48333 6.5 7.5C6.5 6.51667 6.8375 5.6875 7.5125 5.0125C8.1875 4.3375 9.01667 4 10 4C10.9833 4 11.8125 4.3375 12.4875 5.0125C13.1625 5.6875 13.5 6.51667 13.5 7.5C13.5 8.48333 13.1625 9.3125 12.4875 9.9875C11.8125 10.6625 10.9833 11 10 11ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20ZM10 18C10.8833 18 11.7167 17.8708 12.5 17.6125C13.2833 17.3542 14 16.9833 14.65 16.5C14 16.0167 13.2833 15.6458 12.5 15.3875C11.7167 15.1292 10.8833 15 10 15C9.11667 15 8.28333 15.1292 7.5 15.3875C6.71667 15.6458 6 16.0167 5.35 16.5C6 16.9833 6.71667 17.3542 7.5 17.6125C8.28333 17.8708 9.11667 18 10 18ZM10 9C10.4333 9 10.7917 8.85833 11.075 8.575C11.3583 8.29167 11.5 7.93333 11.5 7.5C11.5 7.06667 11.3583 6.70833 11.075 6.425C10.7917 6.14167 10.4333 6 10 6C9.56667 6 9.20833 6.14167 8.925 6.425C8.64167 6.70833 8.5 7.06667 8.5 7.5C8.5 7.93333 8.64167 8.29167 8.925 8.575C9.20833 8.85833 9.56667 9 10 9Z"
                                fill="#EF582C" />
                        </svg>
                        <p class="ms-2">المؤلف: <span class="text-danger">Basil Abualoush</span></p>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <a class="header-links d-flex me-3" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20"
                            fill="none">
                            <path
                                d="M7.6 15.05L14.65 8L13.25 6.6L7.6 12.25L4.75 9.4L3.35 10.8L7.6 15.05ZM2 20C1.45 20 0.979167 19.8042 0.5875 19.4125C0.195833 19.0208 0 18.55 0 18V4C0 3.45 0.195833 2.97917 0.5875 2.5875C0.979167 2.19583 1.45 2 2 2H6.2C6.41667 1.4 6.77917 0.916667 7.2875 0.55C7.79583 0.183333 8.36667 0 9 0C9.63333 0 10.2042 0.183333 10.7125 0.55C11.2208 0.916667 11.5833 1.4 11.8 2H16C16.55 2 17.0208 2.19583 17.4125 2.5875C17.8042 2.97917 18 3.45 18 4V18C18 18.55 17.8042 19.0208 17.4125 19.4125C17.0208 19.8042 16.55 20 16 20H2ZM2 18H16V4H2V18ZM9 3.25C9.21667 3.25 9.39583 3.17917 9.5375 3.0375C9.67917 2.89583 9.75 2.71667 9.75 2.5C9.75 2.28333 9.67917 2.10417 9.5375 1.9625C9.39583 1.82083 9.21667 1.75 9 1.75C8.78333 1.75 8.60417 1.82083 8.4625 1.9625C8.32083 2.10417 8.25 2.28333 8.25 2.5C8.25 2.71667 8.32083 2.89583 8.4625 3.0375C8.60417 3.17917 8.78333 3.25 9 3.25Z"
                                fill="#EF582C" />
                        </svg>
                        <p class="ms-2">نشرت: <span class="text-danger">8/11/2021</span></p>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <a class="header-links d-flex me-3" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                            fill="none">
                            <path
                                d="M10 15C10.2833 15 10.5208 14.9042 10.7125 14.7125C10.9042 14.5208 11 14.2833 11 14C11 13.7167 10.9042 13.4792 10.7125 13.2875C10.5208 13.0958 10.2833 13 10 13C9.71667 13 9.47917 13.0958 9.2875 13.2875C9.09583 13.4792 9 13.7167 9 14C9 14.2833 9.09583 14.5208 9.2875 14.7125C9.47917 14.9042 9.71667 15 10 15ZM9 11H11V5H9V11ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20ZM10 18C12.2333 18 14.125 17.225 15.675 15.675C17.225 14.125 18 12.2333 18 10C18 7.76667 17.225 5.875 15.675 4.325C14.125 2.775 12.2333 2 10 2C7.76667 2 5.875 2.775 4.325 4.325C2.775 5.875 2 7.76667 2 10C2 12.2333 2.775 14.125 4.325 15.675C5.875 17.225 7.76667 18 10 18Z"
                                fill="#EF582C" />
                        </svg>
                        <p class="ms-2">تم التحديث: <span class="text-danger">8/11/2023</span></p>
                    </a>
                </div>
            </div>

            <div class="row">
                <h5 class="col-12 mb-5">هل تبحث عن الشركات التداول الموثوقة في السعودية؟ إذا كانت الإجابة نعم، فأنت في
                    المكان
                    الصحيح! في هذا
                    المقال، سنكشف لك عن أفضل شركات التداول المرخصة في السعودية، ونقدم لك جميع التفاصيل التي تحتاج إليها
                    لاتخاذ قرار استثماري موثوق ومدروس. سواء كنت مبتدئًا في عالم التداول أو مستثمرًا محترفًا، ستجد هنا قائمة
                    شاملة تضم أبرز الشركات المالية التي تتمتع بسمعة ممتازة وتقدم خدمات ذات جودة عالية. استعد لاستكشاف عالم
                    الاستثمار والتداول بثقة وأمان في المملكة العربية السعودية.
                </h5>
            </div>



            <div class="row Adaptive-design">
                <h1 class="mt-5">وسطاء فوركس المميزون </h1>
                <div class="Adaptive table-responsive my-5">
                    <table class="table mb-0">
                        <tbody>
                            <tr class="border-bottom border-dark">
                                <th scope="row">1</th>
                                <td class="border-bottom border-dark">
                                    <img src="{{ asset('assets/images/avatars/avatar-1.png') }}" width="25"
                                        height="25" class="rounded-circle me-2" alt="">
                                    RoboForex
                                </td>
                                <td class="d-flex">
                                    <p>درجة الامان: <span class="text-success">مرتفعة</span></p>
                                    <div class="ms-2">
                                        <span class="material-symbols-outlined checked">stars</span>
                                        <span class="material-symbols-outlined checked">stars</span>
                                        <span class="material-symbols-outlined checked">stars</span>
                                        <span class="material-symbols-outlined">stars</span>
                                        <span class="material-symbols-outlined">stars</span>
                                    </div>
                                </td>

                                <td class="border-bottom border-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13"
                                        viewBox="0 0 14 13" fill="none">
                                        <path
                                            d="M4.83636 13L3.62727 11.019L1.33636 10.5238L1.55909 8.23333L0 6.5L1.55909 4.76667L1.33636 2.47619L3.62727 1.98095L4.83636 0L7 0.897619L9.16364 0L10.3727 1.98095L12.6636 2.47619L12.4409 4.76667L14 6.5L12.4409 8.23333L12.6636 10.5238L10.3727 11.019L9.16364 13L7 12.1024L4.83636 13ZM5.37727 11.4214L7 10.7405L8.65455 11.4214L9.54545 9.93572L11.2955 9.53333L11.1364 7.8L12.3136 6.5L11.1364 5.16905L11.2955 3.43571L9.54545 3.06429L8.62273 1.57857L7 2.25952L5.34545 1.57857L4.45455 3.06429L2.70455 3.43571L2.86364 5.16905L1.68636 6.5L2.86364 7.8L2.70455 9.56429L4.45455 9.93572L5.37727 11.4214ZM7 9.59524C7.1803 9.59524 7.33144 9.53591 7.45341 9.41726C7.57538 9.29861 7.63636 9.15159 7.63636 8.97619C7.63636 8.80079 7.57538 8.65377 7.45341 8.53512C7.33144 8.41647 7.1803 8.35714 7 8.35714C6.8197 8.35714 6.66856 8.41647 6.54659 8.53512C6.42462 8.65377 6.36364 8.80079 6.36364 8.97619C6.36364 9.15159 6.42462 9.29861 6.54659 9.41726C6.66856 9.53591 6.8197 9.59524 7 9.59524ZM6.36364 7.11905H7.63636V3.40476H6.36364V7.11905Z"
                                            fill="#EF582C" />
                                    </svg>
                                    10$
                                </td>
                                <td class="border-bottom border-dark"><a class="btn btn-success shadow px-5 py-0">ابدأ
                                        الان</a></td>
                            </tr>
                            <tr class="border-bottom border-dark">
                                <th scope="row">1</th>
                                <td class="border-bottom border-dark">
                                    <img src="{{ asset('assets/images/avatars/avatar-1.png') }}" width="25"
                                        height="25" class="rounded-circle me-2" alt="">
                                    RoboForex
                                </td>
                                <td class="d-flex">
                                    <p>درجة الامان: <span class="text-success">مرتفعة</span></p>
                                    <div class="ms-2">
                                        <span class="material-symbols-outlined checked">stars</span>
                                        <span class="material-symbols-outlined checked">stars</span>
                                        <span class="material-symbols-outlined checked">stars</span>
                                        <span class="material-symbols-outlined">stars</span>
                                        <span class="material-symbols-outlined">stars</span>
                                    </div>
                                </td>

                                <td class="border-bottom border-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13"
                                        viewBox="0 0 14 13" fill="none">
                                        <path
                                            d="M4.83636 13L3.62727 11.019L1.33636 10.5238L1.55909 8.23333L0 6.5L1.55909 4.76667L1.33636 2.47619L3.62727 1.98095L4.83636 0L7 0.897619L9.16364 0L10.3727 1.98095L12.6636 2.47619L12.4409 4.76667L14 6.5L12.4409 8.23333L12.6636 10.5238L10.3727 11.019L9.16364 13L7 12.1024L4.83636 13ZM5.37727 11.4214L7 10.7405L8.65455 11.4214L9.54545 9.93572L11.2955 9.53333L11.1364 7.8L12.3136 6.5L11.1364 5.16905L11.2955 3.43571L9.54545 3.06429L8.62273 1.57857L7 2.25952L5.34545 1.57857L4.45455 3.06429L2.70455 3.43571L2.86364 5.16905L1.68636 6.5L2.86364 7.8L2.70455 9.56429L4.45455 9.93572L5.37727 11.4214ZM7 9.59524C7.1803 9.59524 7.33144 9.53591 7.45341 9.41726C7.57538 9.29861 7.63636 9.15159 7.63636 8.97619C7.63636 8.80079 7.57538 8.65377 7.45341 8.53512C7.33144 8.41647 7.1803 8.35714 7 8.35714C6.8197 8.35714 6.66856 8.41647 6.54659 8.53512C6.42462 8.65377 6.36364 8.80079 6.36364 8.97619C6.36364 9.15159 6.42462 9.29861 6.54659 9.41726C6.66856 9.53591 6.8197 9.59524 7 9.59524ZM6.36364 7.11905H7.63636V3.40476H6.36364V7.11905Z"
                                            fill="#EF582C" />
                                    </svg>
                                    10$
                                </td>
                                <td class="border-bottom border-dark"><a class="btn btn-success shadow px-5 py-0">ابدأ
                                        الان</a></td>
                            </tr>
                            <tr class="border-bottom border-dark">
                                <th scope="row">1</th>
                                <td class="border-bottom border-dark">
                                    <img src="{{ asset('assets/images/avatars/avatar-1.png') }}" width="25"
                                        height="25" class="rounded-circle me-2" alt="">
                                    RoboForex
                                </td>
                                <td class="d-flex">
                                    <p>درجة الامان: <span class="text-success">مرتفعة</span></p>
                                    <div class="ms-2">
                                        <span class="material-symbols-outlined checked">stars</span>
                                        <span class="material-symbols-outlined checked">stars</span>
                                        <span class="material-symbols-outlined checked">stars</span>
                                        <span class="material-symbols-outlined">stars</span>
                                        <span class="material-symbols-outlined">stars</span>
                                    </div>
                                </td>

                                <td class="border-bottom border-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13"
                                        viewBox="0 0 14 13" fill="none">
                                        <path
                                            d="M4.83636 13L3.62727 11.019L1.33636 10.5238L1.55909 8.23333L0 6.5L1.55909 4.76667L1.33636 2.47619L3.62727 1.98095L4.83636 0L7 0.897619L9.16364 0L10.3727 1.98095L12.6636 2.47619L12.4409 4.76667L14 6.5L12.4409 8.23333L12.6636 10.5238L10.3727 11.019L9.16364 13L7 12.1024L4.83636 13ZM5.37727 11.4214L7 10.7405L8.65455 11.4214L9.54545 9.93572L11.2955 9.53333L11.1364 7.8L12.3136 6.5L11.1364 5.16905L11.2955 3.43571L9.54545 3.06429L8.62273 1.57857L7 2.25952L5.34545 1.57857L4.45455 3.06429L2.70455 3.43571L2.86364 5.16905L1.68636 6.5L2.86364 7.8L2.70455 9.56429L4.45455 9.93572L5.37727 11.4214ZM7 9.59524C7.1803 9.59524 7.33144 9.53591 7.45341 9.41726C7.57538 9.29861 7.63636 9.15159 7.63636 8.97619C7.63636 8.80079 7.57538 8.65377 7.45341 8.53512C7.33144 8.41647 7.1803 8.35714 7 8.35714C6.8197 8.35714 6.66856 8.41647 6.54659 8.53512C6.42462 8.65377 6.36364 8.80079 6.36364 8.97619C6.36364 9.15159 6.42462 9.29861 6.54659 9.41726C6.66856 9.53591 6.8197 9.59524 7 9.59524ZM6.36364 7.11905H7.63636V3.40476H6.36364V7.11905Z"
                                            fill="#EF582C" />
                                    </svg>
                                    10$
                                </td>
                                <td class="border-bottom border-dark"><a class="btn btn-success shadow px-5 py-0">ابدأ
                                        الان</a></td>
                            </tr>
                            <tr class="border-bottom border-dark">
                                <th scope="row">1</th>
                                <td class="border-bottom border-dark">
                                    <img src="{{ asset('assets/images/avatars/avatar-1.png') }}" width="25"
                                        height="25" class="rounded-circle me-2" alt="">
                                    RoboForex
                                </td>
                                <td class="d-flex">
                                    <p>درجة الامان: <span class="text-success">مرتفعة</span></p>
                                    <div class="ms-2">
                                        <span class="material-symbols-outlined checked">stars</span>
                                        <span class="material-symbols-outlined checked">stars</span>
                                        <span class="material-symbols-outlined checked">stars</span>
                                        <span class="material-symbols-outlined">stars</span>
                                        <span class="material-symbols-outlined">stars</span>
                                    </div>
                                </td>

                                <td class="border-bottom border-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13"
                                        viewBox="0 0 14 13" fill="none">
                                        <path
                                            d="M4.83636 13L3.62727 11.019L1.33636 10.5238L1.55909 8.23333L0 6.5L1.55909 4.76667L1.33636 2.47619L3.62727 1.98095L4.83636 0L7 0.897619L9.16364 0L10.3727 1.98095L12.6636 2.47619L12.4409 4.76667L14 6.5L12.4409 8.23333L12.6636 10.5238L10.3727 11.019L9.16364 13L7 12.1024L4.83636 13ZM5.37727 11.4214L7 10.7405L8.65455 11.4214L9.54545 9.93572L11.2955 9.53333L11.1364 7.8L12.3136 6.5L11.1364 5.16905L11.2955 3.43571L9.54545 3.06429L8.62273 1.57857L7 2.25952L5.34545 1.57857L4.45455 3.06429L2.70455 3.43571L2.86364 5.16905L1.68636 6.5L2.86364 7.8L2.70455 9.56429L4.45455 9.93572L5.37727 11.4214ZM7 9.59524C7.1803 9.59524 7.33144 9.53591 7.45341 9.41726C7.57538 9.29861 7.63636 9.15159 7.63636 8.97619C7.63636 8.80079 7.57538 8.65377 7.45341 8.53512C7.33144 8.41647 7.1803 8.35714 7 8.35714C6.8197 8.35714 6.66856 8.41647 6.54659 8.53512C6.42462 8.65377 6.36364 8.80079 6.36364 8.97619C6.36364 9.15159 6.42462 9.29861 6.54659 9.41726C6.66856 9.53591 6.8197 9.59524 7 9.59524ZM6.36364 7.11905H7.63636V3.40476H6.36364V7.11905Z"
                                            fill="#EF582C" />
                                    </svg>
                                    10$
                                </td>
                                <td class="border-bottom border-dark"><a class="btn btn-success shadow px-5 py-0">ابدأ
                                        الان</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>




            <div class="row Adaptive-design-d my-4">
                <h1>وسطاء فوركس المميزون </h1>
                <div class="card col-12 my-5 p-0">
                    <div class="row">
                        <div class="col-6 p-5">
                            <img src="{{ asset('assets/images/compaines-logos/AvaTrade-Logo 1.png') }}" width="150"
                                height="75" class="rounded" alt="">
                        </div>
                        <div class="col-6 text-center my-2">
                            <h6>RoboForex</h6>
                            <p>درجة الامان: <span class="text-success">مرتفعة</span></p>
                            <div>
                                <span class="material-symbols-outlined checked">stars</span>
                                <span class="material-symbols-outlined checked">stars</span>
                                <span class="material-symbols-outlined checked">stars</span>
                                <span class="material-symbols-outlined">stars</span>
                                <span class="material-symbols-outlined">stars</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13"
                                    viewBox="0 0 14 13" fill="none">
                                    <path
                                        d="M4.83636 13L3.62727 11.019L1.33636 10.5238L1.55909 8.23333L0 6.5L1.55909 4.76667L1.33636 2.47619L3.62727 1.98095L4.83636 0L7 0.897619L9.16364 0L10.3727 1.98095L12.6636 2.47619L12.4409 4.76667L14 6.5L12.4409 8.23333L12.6636 10.5238L10.3727 11.019L9.16364 13L7 12.1024L4.83636 13ZM5.37727 11.4214L7 10.7405L8.65455 11.4214L9.54545 9.93572L11.2955 9.53333L11.1364 7.8L12.3136 6.5L11.1364 5.16905L11.2955 3.43571L9.54545 3.06429L8.62273 1.57857L7 2.25952L5.34545 1.57857L4.45455 3.06429L2.70455 3.43571L2.86364 5.16905L1.68636 6.5L2.86364 7.8L2.70455 9.56429L4.45455 9.93572L5.37727 11.4214ZM7 9.59524C7.1803 9.59524 7.33144 9.53591 7.45341 9.41726C7.57538 9.29861 7.63636 9.15159 7.63636 8.97619C7.63636 8.80079 7.57538 8.65377 7.45341 8.53512C7.33144 8.41647 7.1803 8.35714 7 8.35714C6.8197 8.35714 6.66856 8.41647 6.54659 8.53512C6.42462 8.65377 6.36364 8.80079 6.36364 8.97619C6.36364 9.15159 6.42462 9.29861 6.54659 9.41726C6.66856 9.53591 6.8197 9.59524 7 9.59524ZM6.36364 7.11905H7.63636V3.40476H6.36364V7.11905Z"
                                        fill="#EF582C" />
                                </svg>
                                10$
                                <div class="my-2">
                                    <a class="btn btn-success shadow px-5 py-0">ابدأ الان</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-12 my-5 p-0">
                    <div class="row">
                        <div class="col-6 p-5">
                            <img src="{{ asset('assets/images/compaines-logos/AvaTrade-Logo 1.png') }}" width="150"
                                height="75" class="rounded" alt="">
                        </div>
                        <div class="col-6 text-center my-2">
                            <h6>RoboForex</h6>
                            <p>درجة الامان: <span class="text-success">مرتفعة</span></p>
                            <div>
                                <span class="material-symbols-outlined checked">stars</span>
                                <span class="material-symbols-outlined checked">stars</span>
                                <span class="material-symbols-outlined checked">stars</span>
                                <span class="material-symbols-outlined">stars</span>
                                <span class="material-symbols-outlined">stars</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13"
                                    viewBox="0 0 14 13" fill="none">
                                    <path
                                        d="M4.83636 13L3.62727 11.019L1.33636 10.5238L1.55909 8.23333L0 6.5L1.55909 4.76667L1.33636 2.47619L3.62727 1.98095L4.83636 0L7 0.897619L9.16364 0L10.3727 1.98095L12.6636 2.47619L12.4409 4.76667L14 6.5L12.4409 8.23333L12.6636 10.5238L10.3727 11.019L9.16364 13L7 12.1024L4.83636 13ZM5.37727 11.4214L7 10.7405L8.65455 11.4214L9.54545 9.93572L11.2955 9.53333L11.1364 7.8L12.3136 6.5L11.1364 5.16905L11.2955 3.43571L9.54545 3.06429L8.62273 1.57857L7 2.25952L5.34545 1.57857L4.45455 3.06429L2.70455 3.43571L2.86364 5.16905L1.68636 6.5L2.86364 7.8L2.70455 9.56429L4.45455 9.93572L5.37727 11.4214ZM7 9.59524C7.1803 9.59524 7.33144 9.53591 7.45341 9.41726C7.57538 9.29861 7.63636 9.15159 7.63636 8.97619C7.63636 8.80079 7.57538 8.65377 7.45341 8.53512C7.33144 8.41647 7.1803 8.35714 7 8.35714C6.8197 8.35714 6.66856 8.41647 6.54659 8.53512C6.42462 8.65377 6.36364 8.80079 6.36364 8.97619C6.36364 9.15159 6.42462 9.29861 6.54659 9.41726C6.66856 9.53591 6.8197 9.59524 7 9.59524ZM6.36364 7.11905H7.63636V3.40476H6.36364V7.11905Z"
                                        fill="#EF582C" />
                                </svg>
                                10$
                                <div class="my-2">
                                    <a class="btn btn-success shadow px-5 py-0">ابدأ الان</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-12 my-5 p-0">
                    <div class="row">
                        <div class="col-6 p-5">
                            <img src="{{ asset('assets/images/compaines-logos/AvaTrade-Logo 1.png') }}" width="150"
                                height="75" class="rounded" alt="">
                        </div>
                        <div class="col-6 text-center my-2">
                            <h6>RoboForex</h6>
                            <p>درجة الامان: <span class="text-success">مرتفعة</span></p>
                            <div>
                                <span class="material-symbols-outlined checked">stars</span>
                                <span class="material-symbols-outlined checked">stars</span>
                                <span class="material-symbols-outlined checked">stars</span>
                                <span class="material-symbols-outlined">stars</span>
                                <span class="material-symbols-outlined">stars</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13"
                                    viewBox="0 0 14 13" fill="none">
                                    <path
                                        d="M4.83636 13L3.62727 11.019L1.33636 10.5238L1.55909 8.23333L0 6.5L1.55909 4.76667L1.33636 2.47619L3.62727 1.98095L4.83636 0L7 0.897619L9.16364 0L10.3727 1.98095L12.6636 2.47619L12.4409 4.76667L14 6.5L12.4409 8.23333L12.6636 10.5238L10.3727 11.019L9.16364 13L7 12.1024L4.83636 13ZM5.37727 11.4214L7 10.7405L8.65455 11.4214L9.54545 9.93572L11.2955 9.53333L11.1364 7.8L12.3136 6.5L11.1364 5.16905L11.2955 3.43571L9.54545 3.06429L8.62273 1.57857L7 2.25952L5.34545 1.57857L4.45455 3.06429L2.70455 3.43571L2.86364 5.16905L1.68636 6.5L2.86364 7.8L2.70455 9.56429L4.45455 9.93572L5.37727 11.4214ZM7 9.59524C7.1803 9.59524 7.33144 9.53591 7.45341 9.41726C7.57538 9.29861 7.63636 9.15159 7.63636 8.97619C7.63636 8.80079 7.57538 8.65377 7.45341 8.53512C7.33144 8.41647 7.1803 8.35714 7 8.35714C6.8197 8.35714 6.66856 8.41647 6.54659 8.53512C6.42462 8.65377 6.36364 8.80079 6.36364 8.97619C6.36364 9.15159 6.42462 9.29861 6.54659 9.41726C6.66856 9.53591 6.8197 9.59524 7 9.59524ZM6.36364 7.11905H7.63636V3.40476H6.36364V7.11905Z"
                                        fill="#EF582C" />
                                </svg>
                                10$
                                <div class="my-2">
                                    <a class="btn btn-success shadow px-5 py-0">ابدأ الان</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



















        <div class="row">
            <div class="card-body">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button shadow border-1" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                جدول المحتويات
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h6>التداول في السعودية: الفرق بين السوق المحلي والسوق العالمي</h6>
                                <ul>
                                    <li>ايجابيات وسلبيات شركات التداول السعودية</li>
                                    <li>السوق السعودي </li>
                                    <li>سوق التداول العالمي</li>
                                </ul>
                                <br>
                                <h6>أفضل شركات التداول المرخصة في السعودية لعام 2023</h6>
                                <br>
                                <h6>شركات الوساطة المالية في السعودية</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="label my-5">
                <h2 class="text-wrapper">ماهي افضل شركات التداول المرخصة في السعودية 2023؟</h2>
            </div>
            <div class="label">
                <p class="ASIC-DFSA-ADGM-FCA">
                    <span class="text-wrapper">توجد العديد من شركات التداول الموثوقة في السعودية، ولكن قبل عرض تلك
                        الشركات، دعونا نتعرف على أمر هام وهو:<br /></span>
                    <span class="span"><br />هل يُعتبر تداول الفوركس قانونيًا في السعودية؟<br /><br /></span>
                    <span class="text-wrapper">إجابة هذا السؤال تكمن في عدم وجود قانون في المملكة العربية السعودية يمنع
                        تداول الفوركس. وأحد الدلائل الكبيرة
                        على ذلك هو وجود شركات تداول الفوركس العالمية على أراضي السعودية. ومع ذلك، لا تقوم المملكة
                        العربية السعودية
                        بتنظيم عملية تداول الفوركس او تداول الذهب والعملات الاجنبيه بصورة عقود مقابل الفورقات بنفسها، بل
                        تتم هذه
                        العملية من قبل هيئات رقابية عربية ودولية مرموقة. على سبيل المثال، تتولى الهيئات التالية عملية
                        التنظيم:<br /><br />هيئة
                        الأوراق المالية الأسترالية ASIC.<br />سلطة دبي للخدمات المالية DFSA.<br />سوق أبوظبي العالمي
                        ADGM.<br />هيئة
                        السلوك المالي في المملكة المتحدة FCA.<br />هيئة الأوراق المالية والبورصات القبرصية
                        CySEC.<br />هيئة الأوراق
                        المالية الأردنية JSC<br /><br /><br />يتم تصنيف الهيئات السابق ذكرها على أنها من أفضل هيئات
                        رقابية في سوق
                        التداول والإستثمار في العالم</span>
                </p>
            </div>
        </div>



        <div class="row">
            <div class="label my-5">
                <h2 class="text-wrapper">التداول في السعودية: الفرق بين السوق المحلي والسوق العالمي</h2>
            </div>
            <div class="label">
                <div class="flexcontainer">
                    <p class="text">
                        <span class="text-wrapper">يعرف عن المستثمرين في المملكة العربية السعودية عن اهتمامهم الكبير في
                            سوق تداول الأسهم بشكل عام ويميل جزء
                            كبير أيضاً الى تداول الفوركس والعملات الأجنبية، رغم وجود الكثير من التحذيرات من الجهات
                            الخاصة حول تداول
                            الفوركس في المملكة إلا أن بعض الشركات المرخص لها تقدم هذه الخدمات بطريقة صحيحة، مما جعل موقع
                            يقين مكاناً
                            مخصصاً لعرض هذه الشركات بطريقة سهلة.<br /></span>
                    </p>
                    <p class="text">
                        <span class="text-wrapper">عند الحديث عن تداول الفوركس في السعودية يصعب إيجاد وسيط تداول محلي
                            مرخص لتقديم هذه الخدمة، وان وجد، تكون
                            الخدمة عالية التكاليف من حيث العمولات المفروضة في حساب التداول من جهة، وبناء نموذج ربحي من
                            جهة أخرى.<br /></span>
                    </p>
                    <p class="text">
                        <span class="text-wrapper">يعرف عن التداول في الفوركس وعقود الفروقات أنه مخصص لمن يبحث عن تحقيق
                            أرباح سريعة، من خلال المضاربة اليومية،
                            ولذلك يكون الهامش الربحي لا يتعدى 10% يومياً، وعند فرض عمولات عالية على التداول في هذا
                            النظام، يقل الهامش
                            الربحي مما جعل المستثمرين في السوق السعودي بالتوجه الى شركات عالمية تقدم نفس الخدمات،
                            وأحياناً أفضل، لتقليل
                            التكاليف وزيادة الربحية.</span>
                    </p>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="label my-5">
                <h2 class="text-wrapper">ما هي شركات التداول الموثوقة في السعودية؟</h2>
            </div>
            <div class="label">
                <p class="exness-evest">
                    نأتي الآن إلى موضوعنا الأكثر أهمية وهو شركات التداول الموثوقة في المملكة العربية السعودية. سنذكر هنا
                    أربع شركات
                    تداول قوية وتتمتع بسمعة طيبة في المملكة العربية السعودية، وهي:<br /><br /><br />شركة
                    Exness<br /><br />شركة
                    Evest<br /><br />شركة Accuindex<br /><br />شركة Avatrade
                </p>
            </div>
        </div>

        <div class="row">
            <div class="label my-5">
                <h2 class="text-wrapper">هل جميع شركات التداول الموثوقة في السعودية؟</h2>
            </div>
            <div class="label">
                <p class="text-wrapper">
                    من المؤكد أنه ليست كل الشركات التي تعمل في سوق التداول داخل المملكه العربيه السعوديه هي شركات موثوقه
                    حيث توجد
                    الكثير من الشركات النصابة التي تقوم بالنصب على العملاء وربما يخطر ببالك سؤال الآن هو:
                </p>
                <div class="flexcontainer">
                    <p class="text">
                        <span class="text-wrapper">للتأكد من تراخيص شركات التداول في المملكة العربية السعودية، ستحتاج
                            إلى القيام بالأمور التالية:<br /></span>
                    </p>
                    <p class="text">
                        <span class="text-wrapper">تصفح موقع الشركة للحصول على رقم الترخيص واسم الجهة الرقابية المرخصة
                            منها.<br /></span>
                    </p>
                    <p class="text">
                        <span class="text-wrapper">التوجه إلى الموقع الرسمي للجهة الرقابية والبحث عن اسم الشركة أو رقم
                            الترخيص الذي حصلت عليه منها.<br /></span>
                    </p>
                    <p class="text">
                        <span class="text-wrapper">من المهم أيضًا التأكد من أن سجل الشركة خالٍ من المشاكل والتجاوزات
                            لدى الهيئات الرقابية المعتمدة.&#34;</span>
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="label my-5">
                <h2 class="text-wrapper">هل يوجد شركات مرخصة من هيئة سوق المال السعودية لتداول الفوركس؟</h2>
            </div>
            <div class="label">
                <p class="text-wrapper">
                    ذكرنا في البداية أن تداول الفوركس او تداول العملات الرقمية لا يتم تنظيمه من قبل أي هيئة داخل المملكة
                    العربية
                    السعودية، وإنما يتم ذلك من قبل هيئات عربية مثل الهيئة الموجودة في دولة الإمارات العربية المتحدة، أو
                    هيئة دولية
                    مثل هيئة الخدمات المالية في المملكة المتحدة. وبناءً على ذلك، لا يوجد أي شركات للفوركس مرخصة من قبل
                    هيئة السوق
                    المال السعودية.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="label my-5">
                <h2 class="text-wrapper">ما هي افضل شركة في قائمة شركات التداول الموثوقة في السعودية؟</h2>
            </div>
            <div class="label">
                <p class="text-wrapper">
                    على الرغم من أن جميع الشركات التي ذكرناها في الأعلى هي شركات موثوقة وتتمتع بتراخيص قوية، بالإضافة
                    إلى سمعة جيدة،
                    إلا أننا إذا أردنا اختيار أفضل شركة من قائمة تلك الشركات، فإننا نرجح شركة Exness. تتميز هذه الشركة
                    بثقة عالية
                    لدى المتداولين في المملكة العربية السعودية، كما أن لديها مكاتب في المملكة، بالإضافة إلى تراخيصها
                    الدولية
                    الموثوقة.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="label my-5">
                <h2 class="text-wrapper">شركات التداول النصابة في المملكة العربية السعودية</h2>
            </div>
            <div class="label">
                <div class="flexcontainer">
                    <p class="text">
                        <span class="text-wrapper">وبعد انتهاء حديثنا عن أفضل شركات التداول الموثوقة في السعودية، لا
                            يمكن إغفال الأمر دون التحذير من شركات
                            التداول النصابة داخل المملكة العربية السعودية.<br /></span>
                    </p>
                    <p class="text">
                        <span class="text-wrapper">ونذكرك، عزيزي القارئ، أننا نعمل على توفير قائمة محدثة بشكل دوري
                            وفقًا لإصدارات الهيئات الرقابية وكذلك وفقًا
                            لشكاوى النصب التي تتعلق بتلك الشركات. يمكنك الاطلاع عليها في موقع ضمان. كما أود أن أذكرك أنك
                            تستطيع أيضًا
                            الإبلاغ عن أي من الشركات التي ترى أنها نصابة، وسنقوم بفحص الأمر، وإذا ثبت ذلك، سنقوم بعمل
                            تحذير حتى لا يقع
                            أحد ضحية لها مرة أخرى.</span>
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="inline-company my-5" id="inline-company">
                <header class="inline-company__header text-center my-4">
                    <div class="inline-company-img col-12"><img loading="lazy" width="50%" height="50%"
                            src="https://yaaqen.com/img/Evest-logo.svg" alt="شركة ايفست Evest"
                            class="company-img mx-auto" title="شركة ايفست Evest"></div>
                    <h3 class="my-5">شركة ايفست Evest</h3>
                    <hr>
                </header>
                <div class="inline-company__content">
                    <div class="inline-company__body">
                        <p>تعتبر شركة ايفست من شركات التداول التي تقدم خدماتها في منطقة الشرق الأوسط ودول الخليج مع
                            اهتمام كبير في تقديم خدمات تداول الأسهم بحسابات مميزة خالية من العمولات والروافع المالية عند
                            طلب ذلك تفعيل ذلك للمتداول المتمرس بجانب تقديم ادوات مالية عديدة بجانب الأسهم مثل العملات
                            الرقمية، العملات الأجنبية وتداول المعادن الثمينة.</p>
                    </div>
                    <div class="inline-company__features d-flex my-5">
                        <div class="inline-company__item">
                            <h4>الميزات</h4>
                            <ul class="feature-list pros">
                                <li>حسابات بنكية محلية في السعودية</li>
                                <li>مدراء حسابات ودورات تدريبية</li>
                                <li>أكاديمية تداول متقدمة جداً</li>
                            </ul>
                        </div>
                        <div class="inline-company__item ms-5">
                            <h4>العيوب</h4>
                            <ul class="feature-list cons">
                                <li>ترخيص دولي فقط</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <footer class="inline-company__footer my-5">
                    <p class="byline"><svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22 11.3432V12.2632C21.9988 14.4197 21.3005 16.5179 20.0093 18.2451C18.7182 19.9722 16.9033 21.2357 14.8354 21.8471C12.7674 22.4586 10.5573 22.3851 8.53447 21.6378C6.51168 20.8905 4.78465 19.5093 3.61096 17.7003C2.43727 15.8913 1.87979 13.7513 2.02168 11.5996C2.16356 9.44781 2.99721 7.39957 4.39828 5.76032C5.79935 4.12107 7.69279 2.97863 9.79619 2.50339C11.8996 2.02816 14.1003 2.24558 16.07 3.12325"
                                stroke="#0AA435" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path d="M22 4.26324L12 14.2732L9 11.2732" stroke="#0AA435" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg><span>سجل الآن عبر يقين وطالب ببونص يصل الى 20% على الايداع الأول</span></p>
                    <p class="inline-company__cta"><a href="javascript:void(0);"
                            onclick="if (!window.__cfRLUnblockHandlers) return false; showPopup(`ايفست Evest`)"
                            rel="nofollow" class="font-weight-bold">فتح حساب مع ايفست Evest</a></p>
                </footer>
            </div>
            <div class="inline-company my-5" id="inline-company">
                <header class="inline-company__header text-center my-4">
                    <div class="inline-company-img col-12"><img loading="lazy" width="50%" height="50%"
                            src="https://yaaqen.com/img/AvaTrade-Logo.svg" alt="شركة ايفست Evest"
                            class="company-img mx-auto" title="شركة ايفست Evest"></div>
                    <h3 class="my-5">شركة ايفست Evest</h3>
                    <hr>
                </header>
                <div class="inline-company__content">
                    <div class="inline-company__body">
                        <p>تعتبر شركة ايفست من شركات التداول التي تقدم خدماتها في منطقة الشرق الأوسط ودول الخليج مع
                            اهتمام كبير في تقديم خدمات تداول الأسهم بحسابات مميزة خالية من العمولات والروافع المالية عند
                            طلب ذلك تفعيل ذلك للمتداول المتمرس بجانب تقديم ادوات مالية عديدة بجانب الأسهم مثل العملات
                            الرقمية، العملات الأجنبية وتداول المعادن الثمينة.</p>
                    </div>
                    <div class="inline-company__features d-flex my-5">
                        <div class="inline-company__item">
                            <h4>الميزات</h4>
                            <ul class="feature-list pros">
                                <li>حسابات بنكية محلية في السعودية</li>
                                <li>مدراء حسابات ودورات تدريبية</li>
                                <li>أكاديمية تداول متقدمة جداً</li>
                            </ul>
                        </div>
                        <div class="inline-company__item ms-5">
                            <h4>العيوب</h4>
                            <ul class="feature-list cons">
                                <li>ترخيص دولي فقط</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <footer class="inline-company__footer my-5">
                    <p class="byline"><svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22 11.3432V12.2632C21.9988 14.4197 21.3005 16.5179 20.0093 18.2451C18.7182 19.9722 16.9033 21.2357 14.8354 21.8471C12.7674 22.4586 10.5573 22.3851 8.53447 21.6378C6.51168 20.8905 4.78465 19.5093 3.61096 17.7003C2.43727 15.8913 1.87979 13.7513 2.02168 11.5996C2.16356 9.44781 2.99721 7.39957 4.39828 5.76032C5.79935 4.12107 7.69279 2.97863 9.79619 2.50339C11.8996 2.02816 14.1003 2.24558 16.07 3.12325"
                                stroke="#0AA435" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path d="M22 4.26324L12 14.2732L9 11.2732" stroke="#0AA435" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg><span>سجل الآن عبر يقين وطالب ببونص يصل الى 20% على الايداع الأول</span></p>
                    <p class="inline-company__cta"><a href="javascript:void(0);"
                            onclick="if (!window.__cfRLUnblockHandlers) return false; showPopup(`ايفست Evest`)"
                            rel="nofollow" class="font-weight-bold">فتح حساب مع ايفست Evest</a></p>
                </footer>
            </div>
        </div>

        <div class="row">
            <h1 class="Hero-h1 my-5">الاسئلة الاكثر تكرارا</h1>
            <div>
                <div class="accordion" id="accordionExample">

                    <div class="accordion-item my-4">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                لماذا من الضروري أن يكون لديك وسيط؟
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>هناك حاجة إلى وسطاء لأن أسواق الأوراق المالية لن تقبل إلا الطلبات من
                                    أعضاء
                                    البورصة - حيث يقوم الوسطاء بترتيب المعاملات بين المشتري والبائع. إنهم
                                    يحصلون على
                                    عمولة بعد تنفيذ الصفقة (على الرغم من أنهم يختارون في بعض الأحيان تخفيض
                                    أو حتى
                                    إلغاء الرسوم لبعض منتجات التداول).</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item my-4">
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
                                    reptilian!? I wish! It's a nickel. Bender! Ship! Stop bickering or I'm
                                    going
                                    to come back there and change your opinions manually!</p>
                                <p><strong>Example: </strong>Okay, I like a challenge. Is that a cooking
                                    show?
                                    No argument here.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item my-4">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                كيف تختار الوسيط؟
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>As I have explained in my book 'Earth in the Balance', and the much more
                                    popular 'Harry Potter and the Balance of Earth', we need to defend our
                                    planet against pollution. Also dark wizards. Fry, you can't just sit
                                    here in
                                    the dark listening to classical music.</p>
                                <p><strong>Example: </strong>Actually, that's still true. Well, let's just
                                    dump
                                    it in the sewer and say we delivered it.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('script')
    <script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/js/index.js"></script>
@endsection
