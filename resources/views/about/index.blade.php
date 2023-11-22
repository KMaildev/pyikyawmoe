@extends('layouts.main')
@section('content')
    <section class="testimonials-two section-space">
        <div class="container">
            <div class="testimonials-two__top">
                <div class="row gutter-y-30 align-items-center">
                    <div class="col-lg-4">
                        <div class="sec-title">
                            <h6 class="sec-title__tagline @@extraClassName">
                                Nay Min Thar Co.,Ltd
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

    <section class="inspiring-one section-space"
        style="background-image: url({{ asset('assets/images/backgrounds/inspiring-bg-1-1.png') }});">
        <div class="container">
            <div class="row gutter-y-50">
                <div class="col-xl-6">

                    <div class="sec-title">
                        <h6 class="sec-title__tagline @@extraClassName">WHO ARE WE</h6>
                        <h3 class="sec-title__title">
                            Nay Min Thar Co.,Ltd
                            <span class="sec-title__title__inner">
                                COMPANY LIMITED
                            </span>
                        </h3>
                    </div>

                    <p class="inspiring-one__text" style="text-align: justify; font-size: 16px; color: black;">
                        Our company "Nay Min Thar Co.,Ltd." was established in the year 2023 for the manpower
                        supply.
                        Nay Min Thar Co.,Ltd is one of the registered licence companies in Republic of the Union of
                        Myanmar and authorized by the Ministry of the National Planning & Economic Development and Ministry
                        of
                        Labor, Employment & Social Welfare. We specialize in the supply of manpower to overseas countries.
                        <br><br>
                        "Nay Min Thar Co.,Ltd." has been in this manpower recruitment services for many years and we
                        are proud and modest to inform that we have had substantial success in the supply of labor in the
                        different business sectors.

                        <br><br>
                        We arrange enrollment for Singapore, Malaysia and Thailand.
                        And, we are fully accredited member of Myanmar Overseas Employment Agencies
                        Federation (MOEAF).
                        <br><br>
                        "Nay Min Thar Co.,Ltd." always welcome for your manpower needs and "Nay Min Thar Co.,Ltd COMPANY
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




    <section class="feature-boxes-container py-5">
        <div class="container appear-animate" data-animation-name="fadeInUpShorter">
            <div class="row">

                <div class="col-md-4">
                    <div class="feature-box px-sm-5 feature-box-simple text-center feature-box-simple1">
                        <div class="feature-box-icon">
                            <i class="icon-earphones-alt"></i>
                        </div>

                        <div class="feature-box-content p-0">
                            <h3>
                                Our Mission
                            </h3>
                            <p style="text-align: justify; color: black;">
                                Our vision is to be a leading overseas employment company, connecting talented
                                individuals with rewarding job opportunities worldwide. We aim to empower job
                                seekers and contribute to the growth and development of businesses in need of
                                skilled and dedicated professionals.
                            </p>
                            <br><br><br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-box px-sm-5 feature-box-simple text-center feature-box-simple2">
                        <div class="feature-box-icon">
                            <i class="icon-credit-card"></i>
                        </div>

                        <div class="feature-box-content p-0">
                            <h3>Our Vission</h3>
                            <p style="text-align: justify; color: black;">
                                Our mission is to provide exceptional overseas employment services by offering a
                                comprehensive range of solutions to both job seekers and employers. We strive to
                                match the right candidates with the right opportunities, fostering mutual success
                                and long-term partnerships. Through our dedication to ethical practices and
                                personalized support, we aim to make a positive impact on the lives of individuals
                                and the organizations we serve.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-box px-sm-5 feature-box-simple text-center feature-box-simple3">
                        <div class="feature-box-icon">
                            <i class="icon-action-undo"></i>
                        </div>
                        <div class="feature-box-content p-0">
                            <h3>Our Value</h3>
                            <ul class="list-icons">
                                <li style="text-align: justify; color: black;">
                                    Excellence - We strive for excellence in every aspect of our services,
                                    aiming to
                                    exceed expectations.
                                </li>
                                <li style="text-align: justify; color: black;">
                                    Respect - We value and respect the diverse backgrounds and perspectives of
                                    all
                                    individuals we work with.
                                </li>
                                <li style="text-align: justify; color: black;">
                                    Collaboration - We foster strong partnerships, working together to achieve
                                    mutual success.
                                </li>
                                <li style="text-align: justify; color: black;">
                                    Responsiveness - We are responsive to the needs of our clients, providing
                                    timely
                                    solutions and support.
                                </li>
                            </ul>
                        </div>
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
                    Nay Min Thar Co.,Ltd
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
                            <img src="{{ asset('data/1.jpg') }}" alt="Nay Min Thar Co.,Ltd">
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
                            <img src="{{ asset('data/2.jpg') }}" alt="Nay Min Thar Co.,Ltd">
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
                            <img src="{{ asset('data/3.jpg') }}" alt="Nay Min Thar Co.,Ltd">
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
                            <img src="{{ asset('data/4.jpg') }}" alt="Nay Min Thar Co.,Ltd">
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
                            <img src="{{ asset('data/5.jpg') }}" alt="Nay Min Thar Co.,Ltd">
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
                            <img src="{{ asset('data/6.jpg') }}" alt="Nay Min Thar Co.,Ltd">
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



    <section class="cmt-row bg-base-dark cmt-bg cmt-bgimage-yes bg-img1 clearfix py-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <h3 style="color:#468ECE;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                Company
                            </font>
                        </font>
                        <span style="color:#f7931E;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    Organizational Chart
                                </font>
                            </font>
                        </span>
                    </h3>

                    <div class="title-desc">
                        <p style="text-align: justify; font-size: 16px; color: black; line-height: 2.5;">
                            Our overseas employment agency consists of a skilled team dedicated to connecting talented
                            individuals with international job opportunities. We have a deep understanding of global
                            markets, immigration laws, and visa processes. Our extensive network of contacts allows us
                            to offer a wide range of employment opportunities in various sectors. We prioritize
                            transparency, ethical practices, and open communication, providing personalized guidance and
                            support to job seekers. Our commitment to excellence ensures successful placements and
                            long-term relationships with clients.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/org.jpg') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: auto; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
