<style>
    .top-header {
        padding-top: 0px;
        padding-bottom: 0px;
    }

    .topbar-one__inner {
        padding-top: 1px;
        padding-bottom: 7px;
    }
</style>
<div class="topbar-two topbar-one top-header">
    <div class="container-fluid">
        <div class="topbar-one__inner">
            <div class="col-md-6">
                <h6 style="font-size: 12px; padding-left:20px;">
                    Nay Min Thar Empire Myanmar
                    Myanmar Human Resource Center
                </h6>
                <h6 style="font-size: 12px;padding-left:20px;">
                    ミャンマー人材育成日本語学校
                    <p style="font-size: 12px;">
                        Myanmar Government License No.(2/2023)
                    </p>
                </h6>

                {{-- two__logo --}}
                <div class="topbar-">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('data/logo/logo1.png') }}" alt="Cleenhearts HTML" style="width: 400px;">
                    </a>

                    <a href="{{ route('home') }}">
                        <img src="{{ asset('data/logo/logo2.png') }}" alt="Cleenhearts HTML" style="width: 80px;">
                    </a>

                    <a href="{{ route('home') }}">
                        <img src="{{ asset('data/logo/logo5.png') }}" alt="Cleenhearts HTML" style="width: 70px;">
                    </a>
                </div>
            </div>

            <div class="col-md-6 d-flex justify-content-end">
                {{-- one__right --}}
                <div class="topbar-">
                    <div class="main-header__cart" style="margin-right: 0px;">

                        <a href="" class="main-header__cart__link" style="background-color: red;">
                            <span class="btn" style="font-size: 12px; color:white;">
                                @if (session('key') == 'jp')
                                    新着情報
                                @else
                                    What's new
                                @endif
                            </span>
                        </a>

                        <a href="" class="main-header__cart__link" style="background-color: yellow;">
                            <span class="btn" style="font-size: 12px; color:black;">
                                @if (session('key') == 'jp')
                                    外国人雇用完全ガイド
                                @else
                                    foreign employment
                                @endif
                            </span>
                        </a>

                        <a href="" class="main-header__cart__link" style="background-color: blue;">
                            <span class="btn" style="font-size: 12px; color:white;">
                                @if (session('key') == 'jp')
                                    会社概要
                                @else
                                    Company Profile
                                @endif
                            </span>
                        </a>
                    </div>

                    <div class="social-link topbar-one__social">
                        <img src="{{ asset('data/header.png') }}" alt="" style="float: right; width: 100%;">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>




<header class="main-header-two main-header sticky-header sticky-header--two sticky-header--normal">
    <div class="main-header-two__bg"
        style="background-image: url({{ asset('assets/images/backgrounds/header-bg.png') }});"></div>
    <div class="container-fluid">
        <div class="main-header__inner">
            <div class="main-header-two__left">
                <div class="main-header-two__logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/logo-dark.png') }}" alt="Cleenhearts HTML" width="159">
                    </a>
                </div>
                <button type="button" class="main-header-two__sidebar-btn sidebar-btn__toggler">
                    <span class="main-header-two__sidebar-btn__line"></span>
                    <span class="main-header-two__sidebar-btn__line"></span>
                    <span class="main-header-two__sidebar-btn__line"></span>
                </button>
            </div>

            <nav class="main-header__nav  main-menu main-menu--two">
                <ul class="main-menu__list">
                    <li class="{{ Route::is('home') ? 'active' : '' }}">
                        <a href="{{ route('home') }}" style="font-size: 15px;">
                            @if (session('key') == 'jp')
                                ホームページ
                            @else
                                Home
                            @endif
                        </a>
                    </li>

                    <li class="dropdown megamenu">
                        <a href="index.html">
                            @if (session('key') == 'jp')
                                私たちについて
                            @else
                                About Us
                            @endif
                        </a>
                        <ul>
                            <li>
                                <section class="home-showcase">
                                    <div class="container">
                                        <div class="home-showcase__inner">
                                            <div class="row">

                                                <div class="col-md-3 col-lg-3">
                                                    <div class="demo-one__card">
                                                        <div class="demo-one__image">
                                                            <img src="{{ asset('data/strength.jpeg') }}" alt=""
                                                                style="height: 140px; width: 100%;">
                                                        </div>
                                                        <div class="demo-one__content">
                                                            <h3 class="demo-one__title">
                                                                <a href="{{ route('about.index') }}">
                                                                    @if (session('key') == 'jp')
                                                                        会社の強み
                                                                    @else
                                                                        Strengths of Company
                                                                    @endif
                                                                </a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-lg-3">
                                                    <div class="demo-one__card">
                                                        <div class="demo-one__image">
                                                            <img src="{{ asset('data/md.jpg') }}"
                                                                style="height: 140px; width: 100%;">
                                                        </div>
                                                        <div class="demo-one__content">
                                                            <h3 class="demo-one__title">
                                                                <a href="{{ route('ceo_message') }}">
                                                                    @if (session('key') == 'jp')
                                                                        MD'S Message
                                                                    @else
                                                                        MD'S Message
                                                                    @endif
                                                                </a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-lg-3">
                                                    <div class="demo-one__card">
                                                        <div class="demo-one__image">
                                                            <img src="{{ asset('data/vmv.png') }}"
                                                                style="height: 140px; width: 100%;">
                                                        </div>
                                                        <div class="demo-one__content">
                                                            <h3 class="demo-one__title">
                                                                <a href="#">
                                                                    @if (session('key') == 'jp')
                                                                        Vision, Mission & Value
                                                                    @else
                                                                        Vision, Mission & Value
                                                                    @endif
                                                                </a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-lg-3">
                                                    <div class="demo-one__card">
                                                        <div class="demo-one__image">
                                                            <img src="{{ asset('data/authenticity.png') }}"
                                                                alt="" style="height: 140px; width: 100%;">
                                                        </div>
                                                        <div class="demo-one__content">
                                                            <h3 class="demo-one__title">
                                                                <a href="#">
                                                                    @if (session('key') == 'jp')
                                                                        ミャンマー政府公認、労働大臣より表彰の送り出し機関
                                                                    @else
                                                                        Officially recognized by MOL
                                                                    @endif
                                                                </a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </li>
                        </ul>
                    </li>

                    <li class="{{ Route::is('school.index') ? 'active' : '' }}">
                        <a href="{{ route('school.index') }}" style="font-size: 15px;">
                            @if (session('key') == 'jp')
                                YA HCU KHAM
                            @else
                                YA HCU KHAM
                            @endif
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="#" style="font-size: 15px;">
                            @if (session('key') == 'jp')
                                研修生
                            @else
                                Trainee
                            @endif
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('specified_skilled.index') }}">
                                    @if (session('key') == 'jp')
                                        特定技能外国人
                                    @else
                                        Specified Skilled Worker
                                    @endif
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('technical_intern.index') }}" style="font-size: 15px;">
                                    @if (session('key') == 'jp')
                                        技能実習生
                                    @else
                                        Technical Intern Training
                                    @endif
                                </a>
                            </li>
                        </ul>
                    </li>



                    <li class="dropdown megamenu">
                        <a href="index.html">
                            @if (session('key') == 'jp')
                                人材サービス
                            @else
                                Manpower Services
                            @endif
                        </a>
                        <ul>
                            <li>
                                <section class="home-showcase">
                                    <div class="container">
                                        <div class="home-showcase__inner">
                                            <div class="row">
                                                @foreach ($countries as $country)
                                                    <div class="col-md-3 col-lg-3">
                                                        <div class="demo-one__card"
                                                            style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                                            <div class="demo-one__image">
                                                                <img src="{{ $country->photo ?? '' }}" alt=""
                                                                    style="height: 140px; width: 100%;">
                                                            </div>
                                                            <div class="demo-one__content">
                                                                <h3 class="demo-one__title">
                                                                    <a href="{{ route('job.show', $country->id) }}">
                                                                        {{ $country->country ?? '' }}
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </li>
                        </ul>
                    </li>



                    <li class="dropdown">
                        <a href="#" style="font-size: 15px;">
                            @if (session('key') == 'jp')
                                ギャラリーとアクティビティ
                            @else
                                Gallery & Activities
                            @endif
                        </a>
                        <ul>
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('activities.show', $category->id) }}">
                                        {{ $category->title ?? '' }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>


                    <li class="dropdown">
                        <a href="#" style="font-size: 15px;">
                            @if (session('key') == 'jp')
                                応用
                            @else
                                Application
                            @endif
                        </a>
                        <ul>

                            <li>
                                <a href="{{ route('cv.index') }}">
                                    @if (session('key') == 'jp')
                                        仕事に応募する
                                    @else
                                        Apply for job
                                    @endif
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('employer.index') }}">
                                    @if (session('key') == 'jp')
                                        雇用主フォーム
                                    @else
                                        Employers Form
                                    @endif
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="{{ Route::is('contact.index') ? 'active' : '' }}">
                        <a href="{{ route('contact.index') }}" style="font-size: 15px;">
                            @if (session('key') == 'jp')
                                接触
                            @else
                                Contact
                            @endif
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="main-header__right">
                <button type="button" class="main-header-two__sidebar-btn sidebar-btn__toggler">
                    <span class="main-header-two__sidebar-btn__line"></span>
                    <span class="main-header-two__sidebar-btn__line"></span>
                    <span class="main-header-two__sidebar-btn__line"></span>
                </button>
                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <a href="donate.html" class="cleenhearts-btn cleenhearts-btn--border-base main-header__btn">
                    <div class="cleenhearts-btn__icon-box">
                        <div class="cleenhearts-btn__icon-box__inner"><span class="icon-donate"></span></div>
                    </div>
                    <span class="cleenhearts-btn__text">donate now</span>
                </a>
            </div>
        </div>
    </div>
</header>
