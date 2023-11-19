<footer class="main-footer background-white2">
    <div class="main-footer__top">
        <div class="container">
            <div class="row gutter-y-30">

                <div class="col-md-12 col-xl-3 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="footer-widget footer-widget--about">
                        <a href="{{ route('home') }}" class="footer-widget__logo">
                            <img src="{{ asset('data/logo.png') }}" width="159" alt="Cleenhearts HTML Template">
                        </a>
                        <p class="footer-widget__about-text">
                            PYI KYAW MOE CO.,LTD
                            <br>
                            Overseas Employment Agency
                        </p>
                    </div>
                </div>


                <div class="col-xl-3 col-md-5 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                    <div class="footer-widget footer-widget--contact">
                        <h2 class="footer-widget__title">Get in touch!</h2>
                        <ul class="list-unstyled footer-widget__info">
                            <li>
                                <span class="icon-location"></span>
                                <address>
                                    No.5/11, Room G-1 Byine Yae Owe Sin Street, Ywar Ma Quarter, Tamwe Township, Yangon,
                                    Myanmar
                                </address>
                            </li>

                            <li>
                                <span class="icon-phone"></span>
                                <a href="tel:09 791 468 884">
                                    09 791 468 884, 09 982 567 521
                                </a>
                            </li>

                            <li>
                                <span class="icon-envelope"></span>
                                <a href="mailto:pyikyawmoe6@gmail.com">
                                    pyikyawmoe6@gmail.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                    <div class="footer-widget footer-widget--links">
                        <h2 class="footer-widget__title">Quick Links</h2><!-- /.footer-widget__title -->
                        <ul class="list-unstyled footer-widget__links">
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

                            <li class="{{ Route::is('contact.index') ? 'active' : '' }}">
                                <a href="{{ route('contact.index') }}" style="font-size: 15px;">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-xl-3 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                    <div class="footer-widget footer-widget--gallery">
                        <h2 class="footer-widget__title">Our Gallery</h2>
                        <div class="footer-widget__gallery">

                            <a href="javascript::void(0)" class="footer-widget__gallery__link">
                                <img src="{{ asset('data/footer/1.jpg') }}" alt="footer-widget-gallery">
                                <span class="footer-widget__gallery__icon icon-plus"></span>
                            </a>

                            <a href="javascript::void(0)" class="footer-widget__gallery__link">
                                <img src="{{ asset('data/footer/2.jpg') }}" alt="footer-widget-gallery">
                                <span class="footer-widget__gallery__icon icon-plus"></span>
                            </a>

                            <a href="javascript::void(0)" class="footer-widget__gallery__link">
                                <img src="{{ asset('data/footer/3.jpg') }}" alt="footer-widget-gallery">
                                <span class="footer-widget__gallery__icon icon-plus"></span>
                            </a>

                            <a href="javascript::void(0)" class="footer-widget__gallery__link">
                                <img src="{{ asset('data/footer/4.jpg') }}" alt="footer-widget-gallery">
                                <span class="footer-widget__gallery__icon icon-plus"></span>
                            </a>

                            <a href="javascript::void(0)" class="footer-widget__gallery__link">
                                <img src="{{ asset('data/footer/5.jpg') }}" alt="footer-widget-gallery">
                                <span class="footer-widget__gallery__icon icon-plus"></span>
                            </a>

                            <a href="javascript::void(0)" class="footer-widget__gallery__link">
                                <img src="{{ asset('data/footer/6.jpg') }}" alt="footer-widget-gallery">
                                <span class="footer-widget__gallery__icon icon-plus"></span>
                            </a>

                            <a href="javascript::void(0)" class="footer-widget__gallery__link">
                                <img src="{{ asset('data/footer/7.jpg') }}" alt="footer-widget-gallery">
                                <span class="footer-widget__gallery__icon icon-plus"></span>
                            </a>

                            <a href="javascript::void(0)" class="footer-widget__gallery__link">
                                <img src="{{ asset('data/footer/8.jpg') }}" alt="footer-widget-gallery">
                                <span class="footer-widget__gallery__icon icon-plus"></span>
                            </a>

                            <a href="javascript::void(0)" class="footer-widget__gallery__link">
                                <img src="{{ asset('data/footer/9.jpg') }}" alt="footer-widget-gallery">
                                <span class="footer-widget__gallery__icon icon-plus"></span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="main-footer__top__shape-box">
            <img src="{{ asset('assets/images/shapes/footer-shape-hand-1-1.png') }}" alt="hand"
                class="main-footer__top__shape-one">
            <img src="{{ asset('assets/images/shapes/footer-shape-hand-1-2.png') }}" alt="hand"
                class="main-footer__top__shape-two">
        </div>

    </div>
    <div class="main-footer__bottom">
        <div class="main-footer__bottom__bg"
            style="background: url('assets/images/backgrounds/footer-bottom-bg-1-2.png');"></div>
        <div class="container">
            <div class="main-footer__bottom__inner">
                <p class="main-footer__copyright">
                    &copy; Copyright <span class="dynamic-year"></span> PYI KYAW MOE COMPANY LIMITED. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
