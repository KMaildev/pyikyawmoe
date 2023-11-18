<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PYI KYAW MOE COMPANY LIMITED (Overseas Employment Agency) - @yield('title')</title>

    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/cleenhearts-icons/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/cleenhearts.css') }}" />
</head>
<style>
    .section-space {
        padding-top: 70px;
    }
</style>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="page-wrapper">

        @include('layouts.menu')



        @yield('content')

        @include('layouts.footer')


    </div>
    <!-- /.page-wrapper -->

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="{{ asset('assets/images/logo-light.png') }}"
                        width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@cleenhearts.com">needhelp@cleenhearts.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:(406)555-0120">(406) 555-0120</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">
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
            </div><!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="cleenhearts-btn cleenhearts-btn--base">
                    <span><i class="icon-magnifying-glass"></i></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__text">back top</span>
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
    </a>

    <aside class="sidebar-one">
        <div class="sidebar-one__overlay sidebar-btn__toggler"></div><!-- /.siderbar-ovarlay -->
        <div class="sidebar-one__content">
            <span class="sidebar-one__close sidebar-btn__toggler"><i class="fa fa-times"></i></span>
            <div class="sidebar-one__logo sidebar-one__item">
                <a href="index.html" aria-label="logo image"><img src="{{ asset('assets/images/logo-light.png') }}"
                        width="155" alt="logo-dark" /></a>
            </div><!-- /.sidebar-one__logo -->
            <div class="sidebar-one__about sidebar-one__item">
                <p class="sidebar-one__about__text">Wimply dummy text of the priatype industry orem Ipsum has Maecenas
                    quis eros at ante</p>
            </div><!-- /.sidebar-one__about -->
            <div class="sidebar-one__information sidebar-one__item">
                <h4 class="sidebar-one__title">Information</h4>
                <ul class="sidebar-one__information__list">
                    <li>
                        <span class="sidebar-one__information__icon icon-location"></span>
                        <address class="sidebar-one__information__address">
                            <p class="sidebar-one__information__text">85 Ketch Harbour RoadBensalem, PA 19020</p>
                        </address>
                    </li>
                    <li>
                        <i class="sidebar-one__information__icon icon-envelope"></i>
                        <p class="sidebar-one__information__text"><a
                                href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                    </li>
                    <li>
                        <span class="sidebar-one__information__icon icon-phone"></span>
                        <p class="sidebar-one__information__text"><a href="tel:(406)555-0120">(406) 555-0120</a></p>
                    </li>
                </ul>
            </div><!-- /.sidebar-one__information -->
            <div class="sidebar-one__socila social-link sidebar-one__item">
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
            </div><!-- /sidebar-one__socila -->
            <div class="sidebar-one__newsletter sidebar-one__item">
                <label class="sidebar-one__title" for="sidebar-email">Newsletter Subscribe</label>
                <form action="#" class="sidebar-one__newsletter__inner mc-form" data-url="MAILCHIMP_FORM_URL">
                    <input type="email" name="sidebar-email" id="sidebar-email"
                        class="sidebar-one__newsletter__input" placeholder="Email Address">
                    <button type="submit" class="sidebar-one__newsletter__btn"><i class="fa fa-paper-plane"
                            aria-hidden="true"></i></button>
                </form>
                <div class="mc-form__response"></div><!-- /.mc-form__response -->
            </div><!-- /.sidebar-one__form -->
        </div><!-- /.sidebar__content -->
    </aside>
    <!-- /.sidebar-one -->

    <script src="{{ asset('assets/vendors/jquery/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/tiny-slider/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/swiper/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('assets/vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-circleType/jquery.circleType.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-lettering/jquery.lettering.min.js') }}"></script>
    <!-- template js -->
    <script src="{{ asset('assets/js/cleenhearts.js') }}"></script>
</body>

</html>
