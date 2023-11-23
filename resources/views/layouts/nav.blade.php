<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <a href="/"><img src="{{ asset('assets/images/logo-img.png') }}" class="logo-icon ms-5"
                    alt="logo icon"></a>
        </div>
        <div class="toggle-icon ms-auto mt-2"><span class="material-symbols-outlined text-orange font-18">cancel</span>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ url('/') }}">
                <div class="parent-icon">
                    <span class="material-symbols-outlined nav-icons">
                        house
                    </span>
                </div>
                <div class="menu-title mt-1">الصفحة الرئيسية</div>
            </a>
        </li>
        <li>
            <a href="{{ url('/ratings') }}">
                <div class="parent-icon">
                    <span class="material-symbols-outlined nav-icons">
                        stars
                    </span>
                </div>
                <div class="menu-title mx-4 mt-1">تقييم الشركات</div>
            </a>
        </li>
        <li>
            <a href="{{ url('/articles') }}">
                <div class="parent-icon"> <span class="material-symbols-outlined nav-icons">
                        account_balance
                    </span>
                </div>
                <div class="menu-title mx-4 mt-1">المقالات</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"> <span class="material-symbols-outlined nav-icons">
                        linked_services
                    </span>
                </div>
                <div class="menu-title mx-4 mt-1">الشركات حسب الدولة</div>
            </a>
            <ul>
                <li>
                    <a href="{{ url('/country') }}">
                        <div class="parent-icon"><i class='bx bx-caret-left'></i>
                            السعودية
                    </a>
                </li>
                <li>
                    <a href="{{ url('#') }}"><i class='bx bx-caret-left'></i>
                        الاردن
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <span class="material-symbols-outlined nav-icons">
                        description
                    </span>
                </div>
                <div class="menu-title me-5 mt-1">خدماتنا</div>
            </a>
            <ul>
                <li> <a href="{{ url('/FraudulentCompanies') }}">
                        <div class="parent-icon">
                            <i class='bx bx-caret-left'></i>
                            الشركات النصابة
                    </a>
                </li>
                <li> <a href="{{ url('/report') }}">
                        <div class="parent-icon">
                            <i class='bx bx-caret-left'></i>
                            ابلاغ عن شركة نصابة
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
