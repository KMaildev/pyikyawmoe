@extends('layouts.main')
@section('content')
    @include('layouts.slider')


    <section class="inspiring-one section-space"
        style="background-image: url({{ asset('assets/images/backgrounds/inspiring-bg-1-1.png') }});">
        <div class="container">
            <div class="row gutter-y-50">
                <div class="col-xl-6">

                    <div class="sec-title">
                        <h6 class="sec-title__tagline @@extraClassName">WHO ARE WE</h6>
                        <h3 class="sec-title__title">
                            PYI KYAW MOE
                            <span class="sec-title__title__inner">
                                COMPANY LIMITED
                            </span>
                        </h3>
                    </div>

                    <p class="inspiring-one__text" style="text-align: justify; font-size: 16px; color: black;">
                        Our company "PYI KYAW MOE COMPANY LIMITED." was established in the year 2023 for the manpower
                        supply.
                        PYI KYAW MOE COMPANY LIMITED is one of the registered licence companies in Republic of the Union of
                        Myanmar and authorized by the Ministry of the National Planning & Economic Development and Ministry
                        of
                        Labor, Employment & Social Welfare. We specialize in the supply of manpower to overseas countries.
                        <br><br>
                        "PYI KYAW MOE COMPANY LIMITED." has been in this manpower recruitment services for many years and we
                        are proud and modest to inform that we have had substantial success in the supply of labor in the
                        different business sectors.

                        <br><br>
                        We arrange enrollment for Singapore, Malaysia and Thailand.
                        And, we are fully accredited member of Myanmar Overseas Employment Agencies
                        Federation (MOEAF).
                        <br><br>
                        "PYI KYAW MOE COMPANY LIMITED." always welcome for your manpower needs and "PYI KYAW MOE COMPANY
                        LIMITEDs
                        Co.,Ltd." will provide our best services as your reliable agency.
                    </p>
                </div>

                <div class="col-xl-6">
                    <div class="inspiring-one__image">
                        <div class="-one__image__inner -one__image__inner--one wow fadeInRight" data-wow-duration="1500ms"
                            data-wow-delay="00ms">
                            <center>
                                <img src="{{ asset('data/company/dica.jpg') }}" alt="inspiring" style="width: 90%;">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="inspiring-one__shapes">
            <div class="inspiring-one__shape inspiring-one__shape--one"></div><!-- /.inspiring-one__shape__one -->
            <div class="inspiring-one__shape inspiring-one__shape--two"></div><!-- /.inspiring-one__shape__one -->
        </div>
    </section>


    <section class="testimonials-two section-space">
        <div class="container">
            <div class="testimonials-two__top">
                <div class="row gutter-y-30 align-items-center">
                    <div class="col-lg-4">
                        <div class="sec-title">
                            <h6 class="sec-title__tagline @@extraClassName">
                                PYI KYAW MOE COMPANY LIMITED
                            </h6>
                            <h3 class="sec-title__title">
                                Our Purpose
                            </h3>
                        </div>
                    </div>

                    <div class="col-lg-8 wow fadeInRight" data-wow-duration="1500ms">
                        <p class="testimonials-two__text">
                            Our main purpose is to provide different categories of
                            Myanmar Manpower around the globe and
                            especially
                            Thailand. We supply Skilled, Semi-Skilled, General Worker, Technical, Professional and
                            Unskilled Myanmar
                            Manpower. Currently, we are dealing with various clients from different countries and
                            successful in supply
                            Malaysia, Japan, Thailand, Singapore without any complaints.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="donations-two donations-carousel  section-space">
        <div class="donations-two__bg"
            style="background-image: url({{ asset('assets/images/backgrounds/donation-bg-2-2.png') }});">
        </div>
        <div class="container">
            <div class="sec-title">
                <h6 class="sec-title__tagline sec-title__tagline--center">
                    PYI KYAW MOE COMPANY LIMITED
                </h6>
                <h3 class="sec-title__title">Activities & <span class='sec-title__title__inner'>Photo</span></h3>
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
                            <img src="{{ asset('data/1.jpg') }}" alt="Pyi Kyaw Moe">
                            <div class="donation-card__category">
                                PYI KYAW MOE COMPANY LIMITED
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
                            <img src="{{ asset('data/2.jpg') }}" alt="Pyi Kyaw Moe">
                            <div class="donation-card__category">
                                PYI KYAW MOE COMPANY LIMITED
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
                            <img src="{{ asset('data/3.jpg') }}" alt="Pyi Kyaw Moe">
                            <div class="donation-card__category">
                                PYI KYAW MOE COMPANY LIMITED
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
                            <img src="{{ asset('data/4.jpg') }}" alt="Pyi Kyaw Moe">
                            <div class="donation-card__category">
                                PYI KYAW MOE COMPANY LIMITED
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
                            <img src="{{ asset('data/5.jpg') }}" alt="Pyi Kyaw Moe">
                            <div class="donation-card__category">
                                PYI KYAW MOE COMPANY LIMITED
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
                            <img src="{{ asset('data/6.jpg') }}" alt="Pyi Kyaw Moe">
                            <div class="donation-card__category">
                                PYI KYAW MOE COMPANY LIMITED
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






    <section class="donars-one donars-one--home section-space"
        style="background-image: url('assets/images/backgrounds/donors-bg.png');">
        <div class="container-fluid">
            <div class="sec-title">
                <h6 class="sec-title__tagline sec-title__tagline--center">
                    PYI KYAW MOE COMPANY LIMITED
                </h6>
                <h3 class="sec-title__title">Our <span class='sec-title__title__inner'>Sending</span> Countries</h3>
            </div>

            <div class="donars-one__row donars-one__row--top">

                @foreach ($countries as $country)
                    <div class="donars-one__country">
                        <a href="{{ route('job.show', $country->id) }}">
                            <img src="{{ $country->photo ?? '' }}" alt="usa" class="donars-one__country__flag"
                                style="width: 60px; border-radius: 10px;;">
                            <span class="donars-one__country__text">
                                {{ $country->country ?? '' }}
                            </span>
                        </a>
                    </div>
                @endforeach

            </div>

            <div class="donars-one__row donars-one__row--bottom">
                @foreach ($countries as $country)
                    <div class="donars-one__country">
                        <a href="{{ route('job.show', $country->id) }}">
                            <img src="{{ $country->photo ?? '' }}" alt="usa" class="donars-one__country__flag"
                                style="width: 60px; border-radius: 10px;;">
                            <span class="donars-one__country__text">
                                {{ $country->country ?? '' }}
                            </span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>







    <section class="blog-page section-space">
        <div class="container">
            <div class="row gutter-y-30">

                <div class="col-md-12">
                    <div class="sec-title">
                        <h6 class="sec-title__tagline sec-title__tagline--center">
                            Gallery & Activities
                        </h6>
                        <center>
                            <h3 class="sec-title__title">
                                Checkout
                                <span class='sec-title__title__inner'>
                                    our photo
                                </span>
                                gallery
                            </h3>
                        </center>
                        <br>
                        <p class="animate__animated animate__bounce animate__backInUp"
                            style="text-align: justify; font-size: 16px; color: black;">
                            Our gallery showcases a vibrant collection of photographs and testimonials from individuals who
                            have successfully found employment through our agency. These visuals depict diverse work
                            environments, cultural experiences, and personal growth opportunities that await those who
                            embark on their overseas employment journey with us. From bustling cityscapes to breathtaking
                            natural landscapes, our gallery captures the essence of working abroad and inspires our clients
                            to explore new horizons.
                        </p>
                    </div>
                </div>

                @foreach ($activities as $activity)
                    @php
                        $images = explode(',', $activity->images);
                    @endphp
                    @foreach ($images as $image)
                        <div class="col-md-6 col-lg-4">
                            <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                                <a href="javascript::void(0)" class="blog-card__image">
                                    <img data-enlargeable="" src="{{ $image }}" alt=""
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover;"
                                        class="img-enlargeable">
                                    <div class="blog-card__date">
                                        PKM
                                    </div>
                                </a>
                                <div class="blog-card__content"
                                    style="background-image: url({{ asset('assets/images/blog/blog-bg-1-1.png') }});">
                                    <h3 class="blog-card__title">
                                        <a href="javascript::void(0)">
                                            {{ $activity->title ?? '' }}
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
@endsection
