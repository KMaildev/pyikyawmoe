@extends('layouts.main')
@section('content')
    <section class="page-header @@extraClassName">
        <div class="page-header__bg" style="background-image: url({{ asset('data/team_banner.jpg') }});"></div>
        <div class="container">
            <h2 class="page-header__title">
                Creative Team Member
            </h2>
            <ul class="cleenhearts-breadcrumb list-unstyled">
                <li><i class="icon-home"></i> <a href="{{ route('home') }}">Home</a></li>
                <li><span>Team</span></li>
            </ul>
        </div>
    </section>



    <section class="volunteer-page section-space">
        <div class="container">
            <div class="volunteer-page__carousel cleenhearts-owl__carousel cleenhearts-owl__carousel--basic-nav owl-carousel owl-theme"
                data-owl-options='{
    "items": 1,
    "margin": 20,
    "loop": false,
    "smartSpeed": 700,
    "nav": false,
    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
    "dots": true,
    "autoplay": false,
    "responsive": {
        "0": {
            "items": 1,
            "margin": 20
        },
        "768": {
            "items": 2,
            "margin": 30
        },
        "992": {
            "items": 3,
            "margin": 30
        }
    }
}'>

                @foreach ($teams as $team)
                    <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="volunteer-card @@extraClassName">
                            <div class="volunteer-card__image">
                                <img src="{{ $team->photo }}" alt="#"
                                    style="width: 100%; height: 300px; background-size: top; object-fit: contain;">
                                <div class="volunteer-card__social">
                                    <span class="icon-share"></span>
                                    <div class="volunteer-card__social__list">
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
                                    </div>
                                </div>
                            </div>
                            <div class="volunteer-card__content"
                                style="background-image: url({{ asset('assets/images/backgrounds/volunteer-bg-1-1.png') }});">
                                <h3 class="volunteer-card__name">
                                    <a href="javascript::void(0)">
                                        {{ $team->name ?? '' }}
                                    </a>
                                </h3>
                                <h6 class="volunteer-card__designation">
                                    {{ $team->position ?? '' }}
                                </h6>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>



    <section class="donations-two donations-carousel  section-space">
        <div class="donations-two__bg"
            style="background-image: url({{ asset('assets/images/backgrounds/donation-bg-2-2.png') }});">
        </div>
        <div class="container">
            <div class="sec-title">
                <h6 class="sec-title__tagline sec-title__tagline--center">Team</h6>
                <h3 class="sec-title__title">Team <span class='sec-title__title__inner'>Gallery</span></h3>
            </div>
        </div>
        <div class="container-fluid">
            <div class="donations-two__carousel cleenhearts-owl__carousel cleenhearts-owl__carousel--basic-nav owl-theme owl-carousel"
                data-owl-options='{
        "items": 3,
        "margin": 30,
        "smartSpeed": 700,
        "loop":true,
        "stagePadding": 370,
        "autoplay": 6000,
        "nav":true,
        "dots":false,
        "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
        "responsive":{
            "0":{
                "items": 1,
                "stagePadding": 0,
                "margin": 20
            },
            "530":{
                "items": 1,
                "stagePadding": 100,
                "margin": 30
            },
            "768":{
                "items": 2,
                "stagePadding": 50,
                "margin": 30
            },
            "992":{
                "items": 2,
                "stagePadding": 110,
                "margin": 30
            },
            "1200":{
                "items": 2,
                "stagePadding": 200,
                "margin": 30
            },
            "1400":{
                "items": 3,
                "stagePadding": 130,
                "margin": 30
            },
            "1600":{
                "items": 3,
                "stagePadding": 260,
                "margin": 30
            },
            "1830":{
                "items": 3,
                "stagePadding": 371,
                "margin": 30
            }
        }
        }'>
                <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="donation-card @@extraClassName">
                        <div class="donation-card__bg"
                            style="background-image: url('assets/images/backgrounds/donation-bg-1-1.png');">
                        </div>
                        <a href="javascript::void(0)" class="donation-card__image">
                            <img src="{{ asset('data/company/1/1.jpg') }}" alt="Nay Min Thar Co.,Ltd">
                            <div class="donation-card__category">
                                Nay Min Thar Co.,Ltd
                            </div>
                        </a>
                    </div>
                </div>

                <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="donation-card @@extraClassName">
                        <div class="donation-card__bg"
                            style="background-image: url('assets/images/backgrounds/donation-bg-1-1.png');">
                        </div>
                        <a href="javascript::void(0)" class="donation-card__image">
                            <img src="{{ asset('data/company/1/2.jpg') }}" alt="Nay Min Thar Co.,Ltd">
                            <div class="donation-card__category">
                                Nay Min Thar Co.,Ltd
                            </div>
                        </a>
                    </div>
                </div>

                <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="donation-card @@extraClassName">
                        <div class="donation-card__bg"
                            style="background-image: url('assets/images/backgrounds/donation-bg-1-1.png');">
                        </div>
                        <a href="javascript::void(0)" class="donation-card__image">
                            <img src="{{ asset('data/company/1/3.jpg') }}" alt="Nay Min Thar Co.,Ltd">
                            <div class="donation-card__category">
                                Nay Min Thar Co.,Ltd
                            </div>
                        </a>
                    </div>
                </div>

                <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="donation-card @@extraClassName">
                        <div class="donation-card__bg"
                            style="background-image: url('assets/images/backgrounds/donation-bg-1-1.png');">
                        </div>
                        <a href="javascript::void(0)" class="donation-card__image">
                            <img src="{{ asset('data/company/photo/111.jpg') }}" alt="Nay Min Thar Co.,Ltd">
                            <div class="donation-card__category">
                                Nay Min Thar Co.,Ltd
                            </div>
                        </a>
                    </div>
                </div>

                <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="donation-card @@extraClassName">
                        <div class="donation-card__bg"
                            style="background-image: url('assets/images/backgrounds/donation-bg-1-1.png');">
                        </div>
                        <a href="javascript::void(0)" class="donation-card__image">
                            <img src="{{ asset('data/company/photo/222.jpg') }}" alt="Nay Min Thar Co.,Ltd">
                            <div class="donation-card__category">
                                Nay Min Thar Co.,Ltd
                            </div>
                        </a>
                    </div>
                </div>


                <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="donation-card @@extraClassName">
                        <div class="donation-card__bg"
                            style="background-image: url('assets/images/backgrounds/donation-bg-1-1.png');">
                        </div>
                        <a href="javascript::void(0)" class="donation-card__image">
                            <img src="{{ asset('data/company/photo/333.jpg') }}" alt="Nay Min Thar Co.,Ltd">
                            <div class="donation-card__category">
                                Nay Min Thar Co.,Ltd
                            </div>
                        </a>
                    </div>
                </div>

                <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="donation-card @@extraClassName">
                        <div class="donation-card__bg"
                            style="background-image: url('assets/images/backgrounds/donation-bg-1-1.png');">
                        </div>
                        <a href="javascript::void(0)" class="donation-card__image">
                            <img src="{{ asset('data/company/photo/99.jpg') }}" alt="Nay Min Thar Co.,Ltd">
                            <div class="donation-card__category">
                                Nay Min Thar Co.,Ltd
                            </div>
                        </a>
                    </div>
                </div>

                <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="donation-card @@extraClassName">
                        <div class="donation-card__bg"
                            style="background-image: url('assets/images/backgrounds/donation-bg-1-1.png');">
                        </div>
                        <a href="javascript::void(0)" class="donation-card__image">
                            <img src="{{ asset('data/company/photo/10.jpg') }}" alt="Nay Min Thar Co.,Ltd">
                            <div class="donation-card__category">
                                Nay Min Thar Co.,Ltd
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="donations-two__shapes">
            <div class="donations-two__shape donations-two__shape--one"></div>
            <div class="donations-two__shape donations-two__shape--two"></div>
        </div>
    </section>
@endsection
