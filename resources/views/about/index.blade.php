@extends('layouts.main')
@section('content')
    <section class="testimonials-two section-space">
        <div class="container">
            <div class="testimonials-two__top">
                <div class="row gutter-y-30 align-items-center">
                    <div class="col-lg-4">
                        <div class="sec-title">
                            @if (session('key') == 'jp')
                                <h6 class="sec-title__tagline @@extraClassName">
                                    Nay Min Thar Co.,Ltd
                                </h6>
                                <h3 class="sec-title__title">
                                    私たちの目的
                                </h3>
                            @else
                                <h6 class="sec-title__tagline @@extraClassName">
                                    Nay Min Thar Co.,Ltd
                                </h6>
                                <h3 class="sec-title__title">
                                    Our Purpose
                                </h3>
                            @endif
                        </div>
                    </div>

                    <div class="col-lg-8 wow fadeInRight" data-wow-duration="1500ms">
                        @if (session('key') == 'jp')
                            <p class="testimonials-two__text">
                                私たちの主な目的は、世界中、特にタイにさまざまなカテゴリーのミャンマー人材を提供することです。当社はミャンマーの熟練労働者、準熟練労働者、一般労働者、技術労働者、専門職および未熟練労働者を供給します。現在、私たちはさまざまな国のさまざまなクライアントと取引しており、マレーシア、日本、タイ、シンガポールに苦情なく供給することに成功しています。
                            </p>
                        @else
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
                        @endif

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
                                Company Limited
                            </span>
                        </h3>
                    </div>

                    @if (session('key') == 'jp')
                        <p class="inspiring-one__text" style="text-align: justify; font-size: 16px; color: black;">
                            NAY MIN TAR EMPIRE MYANMAR は、2023 年 10 月 6 日に海外雇用庁ライセンスを取得しました。
                            私たちは、人材とグローバルな機会との間のギャップを埋めることに専念しています。卓越性を重視し、国際的な雇用市場での成功に向けて個人を支援することに重点を置く当社は、海外でのやりがいのあるキャリアへの旅において、信頼できるパートナーとしての役割を果たします。
                        </p>
                    @else
                        <p class="inspiring-one__text" style="text-align: justify; font-size: 16px; color: black;">
                            NAY MIN THAR EMPIRE MYANMAR obtained the Overseas Employment Agency license on October 6, 2023.
                            We are dedicated to bridging the gap between talent and global opportunities. With commitment to
                            excellence and a focus on empowering individuals for success in the international job market, we
                            stand as a reliable partner on your journey to a rewarding career abroad.
                        </p>
                    @endif

                </div>

                <div class="col-xl-6">
                    <div class="inspiring-one__image">
                        <div class="-one__image__inner -one__image__inner--one wow fadeInRight" data-wow-duration="1500ms"
                            data-wow-delay="00ms">
                            <center>
                                <img src="{{ asset('data/company/15BatchofIRISGroupPhoto.jpg') }}" alt="inspiring"
                                    style="width: 90%; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px; border: 3px solid #4D8BF9; padding: 10px; border-radius: 50px 15px;">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="inspiring-one__shapes">
            <div class="inspiring-one__shape inspiring-one__shape--one"></div>
            <div class="inspiring-one__shape inspiring-one__shape--two"></div>
        </div>
    </section>


    {{-- Team  --}}
    <section class="volunteer-page section-space">
        <div class="container">
            <div class="team-one__top">
                <div class="row gutter-y-30 align-items-center">
                    <div class="col-xxl-8 col-lg-7">
                        <div class="sec-title">
                            <h6 class="sec-title__tagline @@extraClassName">
                                @if (session('key') == 'jp')
                                    私たちの専門家チーム
                                @else
                                    Our expert team
                                @endif
                            </h6>
                            <h3 class="sec-title__title">
                                Meet Our
                                <span class="sec-title__title__inner">
                                    Team Members
                                </span>
                            </h3>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-5 wow fadeInRight" data-wow-duration="1500ms">
                        <p class="team-one__text">
                            @if (session('key') == 'jp')
                                私たちは、企業が強力な企業の社会的責任を策定できるよう支援します。
                                助成金交付と従業員エンゲージメント戦略。
                            @else
                                We help companies develop powerful corporate social responsibility,
                                grantmaking, and employee engagement strategies.
                            @endif
                        </p>
                    </div>
                </div>
            </div>

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

    {{-- Team  --}}
    <section class="team-one section-space" hidden>
        <div class="container">
            <div class="team-one__top">
                <div class="row gutter-y-30 align-items-center">
                    <div class="col-xxl-8 col-lg-7">
                        <div class="sec-title">
                            <h6 class="sec-title__tagline @@extraClassName">
                                @if (session('key') == 'jp')
                                    私たちの専門家チーム
                                @else
                                    Our expert team
                                @endif
                            </h6>
                            <h3 class="sec-title__title">
                                Meet Our
                                <span class="sec-title__title__inner">
                                    Team Members
                                </span>
                            </h3>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-5 wow fadeInRight" data-wow-duration="1500ms">
                        <p class="team-one__text">
                            @if (session('key') == 'jp')
                                私たちは、企業が強力な企業の社会的責任を策定できるよう支援します。
                                助成金交付と従業員エンゲージメント戦略。
                            @else
                                We help companies develop powerful corporate social responsibility,
                                grantmaking, and employee engagement strategies.
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            <div class="team-one__carousel cleenhearts-owl__carousel cleenhearts-owl__carousel--with-shadow cleenhearts-owl__carousel--basic-nav owl-theme owl-carousel"
                data-owl-options='{
        "items": 3,
        "margin": 30,
        "smartSpeed": 700,
        "loop":true,
        "autoplay": 6000,
        "nav":true,
        "dots":false,
        "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
        "responsive":{
            "0":{
                "items": 1,
                "margin": 20
            },
            "575":{
                "items": 1,
                "margin": 30
            },
            "768":{
                "items": 2,
                "margin": 30
            },
            "992":{
                "items": 3,
                "margin": 30
            },
            "1200":{
                "items": 3,
                "margin": 30
            }
        }
        }'>
                @foreach ($teams as $team)
                    <div class="item">
                        <div class="team-single">
                            <div class="team-single__image">
                                <img src="{{ $team->photo }}" alt="Harry P. Finch"
                                    style="width: 100%; height: 300px; background-size: top; object-fit: contain;">
                                <div class="team-single__content">
                                    <ul class="team-single__social person-social">
                                        <li>
                                            <a href="https://facebook.com/"><span class="icon-facebook"></span></a>
                                        </li>
                                        <li>
                                            <a href="ttps://twitter.com"><span class="icon-twitter"></span></a>
                                        </li>
                                        <li>
                                            <a href="https://linkedin.com/"><span class="icon-linkedin"></span></a>
                                        </li>
                                        <li>
                                            <a href="https://youtube.com/"><span class="icon-youtube"></span></a>
                                        </li>
                                    </ul>
                                    <div class="team-single__content__inner">
                                        <h4 class="team-single__name">
                                            {{ $team->name ?? '' }}
                                        </h4>
                                        <p class="team-single__designation">
                                            {{ $team->position ?? '' }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>






    <section class="reason">
        <div class="bf_cc_box">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">

                        <div class="bf_cc_item l_item">
                            <p class="bf_cc_tit">
                                @if (session('key') == 'jp')
                                    旅に参加しましょう
                                @else
                                    Join Us on the Journey
                                @endif
                            </p>
                            <p class="bf_cc_txt">
                                @if (session('key') == 'jp')
                                    あなたが新たな視野を求める熟練した専門家であっても、優れた人材を探している企業であっても、当社はあらゆる段階からあなたを導きます。
                                    一緒に、エキサイティングな機会と異文化体験に満ちた未来を築きましょう。
                                @else
                                    Whether you are a skilled professional seeking new horizons or a company looking
                                    for exceptional talent, our company is here to guide you every step of the way.
                                    Together, let’s build a future filled with exciting opportunities and
                                    cross-cultural experiences.
                                @endif
                            </p>
                            <div class="test_box">

                                <style>
                                    .table {
                                        border-collapse: collapse;
                                        border: 1px solid black;
                                        width: 100%;
                                    }

                                    th,
                                    td {
                                        border: 1px solid black;
                                    }
                                </style>

                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <td scope="row" width="30%"
                                                style="background-color: #E2F2FF; color: black;">
                                                Name of the Company
                                            </td>
                                            <td>
                                                Nay Min Thar Empire Co.,Ltd
                                            </td>
                                        </tr>

                                        <tr>
                                            <td scope="row" style="background-color: #b8c6d1; color: black;">
                                                Registration Authorizes
                                            </td>
                                            <td>
                                                Registration No 136724754 (in 2023 )
                                                Ministry of Labour Govt. License No : 335/2023
                                            </td>
                                        </tr>

                                        <tr>
                                            <td scope="row" style="background-color: #E2F2FF; color: black;">
                                                Managing Director
                                            </td>
                                            <td>
                                                Miss. Zin Mar Soe
                                            </td>
                                        </tr>

                                        <tr>
                                            <td scope="row" style="background-color: #b8c6d1; color: black;">
                                                Phone
                                            </td>
                                            <td>
                                                +959-967 576 591
                                            </td>
                                        </tr>

                                        <tr>
                                            <td scope="row" style="background-color: #E2F2FF; color: black;">
                                                Business Address
                                            </td>
                                            <td>
                                                No. 179/B, Sein Ya Ti Street, Yadanar Kyun Ave, North Okkalapa Township,
                                                Yangon Region, Myanmar. Postal Code : 11031
                                            </td>
                                        </tr>

                                        <tr>
                                            <td scope="row" style="background-color: #b8c6d1; color: black;">
                                                Email
                                            </td>
                                            <td>
                                                info@naymintharmyanmar.com,
                                                Nayminthar.em@gmail.com
                                            </td>
                                        </tr>

                                        <tr>
                                            <td scope="row" width="20%"
                                                style="background-color: #E2F2FF; color: black;">
                                                Website
                                            </td>
                                            <td>
                                                www.naymintharmyanmar.com
                                            </td>
                                        </tr>

                                        <tr>
                                            <td scope="row" style="background-color: #b8c6d1; color: black;">
                                                Social Media
                                            </td>
                                            <td>
                                                https://www.facebook.com/profile.php?id=61552233717178
                                            </td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="gove_oya">
        <div class="gove_back" style="background: #005BFA;">
            <div class="gove_box1">
                <p class="gove_ce">
                    Nay Min Thar Empire Co.,Ltd
                    <br>
                    @if (session('key') == 'jp')
                        ミャンマー政府認定の送出機関です。
                    @else
                        Certified by the Myanmar government.
                    @endif
                </p>
            </div>
            <div class="gove_box2">
                <noscript>
                    <img src="{{ asset('data/company/1.png') }}" alt="Nay Min Thar Empire Co.,Ltd">
                </noscript>
                <img class="lazyloaded" src="{{ asset('data/company/1.png') }}"
                    data-src="{{ asset('data/company/1.png') }}" alt="Nay Min Thar Empire Co.,Ltd">
            </div>
        </div>
    </section>
@endsection
