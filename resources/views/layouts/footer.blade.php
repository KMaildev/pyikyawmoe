<footer class="main-footer background-white2">
    <div class="main-footer__top">
        <div class="container">
            <div class="row gutter-y-30">

                <div class="col-md-12 col-xl-3 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="footer-widget footer-widget--about">
                        <a href="{{ route('home') }}" class="footer-widget__logo">
                            <img src="{{ asset('data/logo.jpg') }}" width="159" alt="Nay Min Thar Empire Co.,Ltd Template">
                        </a>
                        <p class="footer-widget__about-text">
                            Nay Min Thar Empire Co.,Ltd
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
                                    No. 179/B, Sein Ya Ti Street, Yadanar Kyun Ave, North Okkalapa Township, Yangon
                                    Region, Myanmar, Postal Code: 11031
                                </address>
                            </li>

                            <li>
                                <span class="icon-phone"></span>
                                <a href="tel:+959-967 576 591">
                                    +959-967 576 591
                                </a>
                            </li>

                            <li>
                                <span class="icon-envelope"></span>
                                <a href="mailto:info@naymintharmyanmar.com,">
                                    info@naymintharmyanmar.com
                                </a>
                            </li>

                            <li>
                                <span class="icon-envelope"></span>
                                <a href="mailto:naymintharem@gmail.com">
                                    naymintharem@gmail.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                    <div class="footer-widget footer-widget--links">
                        <h2 class="footer-widget__title">Quick Links</h2>
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
                        <h2 class="footer-widget__title">
                            Facebook
                        </h2>

                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous"
                            src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0&appId=210045094312905&autoLogAppEvents=1"
                            nonce="PosYNXjc"></script>

                        <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=100063909290168"
                            data-tabs="timeline" data-width="" data-height="200" data-small-header="false"
                            data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/profile.php?id=100063909290168"
                                class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/profile.php?id=100063909290168">Facebook</a>
                            </blockquote>
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
                    &copy; Copyright <span class="dynamic-year"></span> Nay Min Thar Empire Co.,Ltd. All Rights
                    Reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
