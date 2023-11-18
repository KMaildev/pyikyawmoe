<div class="topbar-one">
    <div class="container-fluid">
        <div class="topbar-one__inner">

            <ul class="list-unstyled topbar-one__info">
                <li class="topbar-one__info__item">
                    <span class="topbar-one__info__icon icon-paper-plane"></span>
                    <a href="mailto:info@pyikyawmoe.com">
                        info@pyikyawmoe.com
                    </a>
                </li>
                <li class="topbar-one__info__item">
                    <span class="topbar-one__info__icon icon-location"></span>
                    No.5/11, Room G-1 Byine Yae Owe Sin Street, Ywar Ma Quarter, Tamwe Township, Yangon, Myanmar
                </li>
            </ul>

            <div class="topbar-one__right">
                <div class="social-link topbar-one__social">
                    <a href="https://facebook.com/">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                        <span class="sr-only">Facebook</span>
                    </a>
                    <a href="https://twitter.com/">
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                        <span class="sr-only">Twitter</span>
                    </a>
                    <a href="https://linkedin.com/" aria-hidden="true">
                        <i class="fab fa-linkedin-in"></i>
                        <span class="sr-only">Linkedin</span>
                    </a>
                    <a href="https://youtube.com/" aria-hidden="true">
                        <i class="fab fa-youtube"></i>
                        <span class="sr-only">Youtube</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<header class="main-header sticky-header sticky-header--normal" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
    <div class="container-fluid">
        <div class="main-header__inner">
            <div class="main-header__logo">

                <a href="{{ route('home') }}">
                    <img src="{{ asset('data/logo.png') }}" alt="Pyi Kyaw Moe Co.,Ltd" width="159">
                </a>
                <button type="button" class="main-header__sidebar-btn sidebar-btn__toggler">
                    <span class="icon-grid"></span>
                </button>
            </div>

            <div class="main-header__right">
                <nav class="main-header__nav main-menu">
                    <ul class="main-menu__list">

                        <li class="{{ Route::is('home') ? 'active' : '' }}">
                            <a href="{{ route('home') }}" style="font-size: 15px;">
                                Home
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="javascript::void(0)" style="font-size: 15px;">
                                About Us
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('about.index') }}">
                                        Our Company
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('ceo_message') }}">
                                        President's Message
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('team') }}">
                                        Professional Team
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="dropdown">
                            <a href="#" style="font-size: 15px;">
                                Manpower Services
                            </a>
                            <ul>
                                @foreach ($countries as $country)
                                    <li>
                                        <a href="{{ route('job.show', $country->id) }}">
                                            {{ $country->country ?? '' }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" style="font-size: 15px;">
                                Gallery & Activities
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
                                Application Form
                            </a>
                            <ul>

                                <li>
                                    <a href="{{ route('cv.index') }}">
                                        Apply for job
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('employer.index') }}">
                                        Employers Form
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="{{ Route::is('contact.index') ? 'active' : '' }}">
                            <a href="{{ route('contact.index') }}" style="font-size: 15px;">
                                Contact Us
                            </a>
                        </li>

                    </ul>
                </nav>

                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="main-header__cart">
                </div>

                <a href="donate.html" class="cleenhearts-btn main-header__btn">
                    <div class="cleenhearts-btn__icon-box">
                        <div class="cleenhearts-btn__icon-box__inner"><span class="icon-donate"></span></div>
                    </div>
                    <span class="cleenhearts-btn__text">
                        Send Mail
                    </span>
                </a>
            </div>
        </div>
    </div>
</header>
