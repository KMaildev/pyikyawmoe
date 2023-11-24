@extends('layouts.main')
@section('content')
    @include('layouts.slider2')

    <style>
        .article h2 {
            font-size: 1.8rem;
            border-bottom: 3px solid #CCC;
            line-height: 2.2rem;
            padding: 0.7rem 0;
            position: relative;
        }

        .article h2:after {
            width: 30%;
            height: 3px;
            position: absolute;
            bottom: -3px;
            left: 0;
            background: #0578B8;
            content: '';
        }
    </style>

    <section class="product-page section-space-bottom" style="padding-top: 0px; padding-bottom: 0px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="donations-one__row row gutter-y-30">

                    <div class="col-md-12 article">
                        <h2>
                            @if (session('key') == 'jp')
                                Video
                            @else
                                Video
                            @endif
                        </h2>
                    </div>

                    <div class="col-md-6">
                        <iframe loading="lazy" width="560" height="400" src="{{ asset('data/video/4.mp4') }}"
                            frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen=""></iframe>
                    </div>

                    <div class="col-md-6">
                        <iframe loading="lazy" width="560" height="400" src="{{ asset('data/video/3.mp4') }}"
                            frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen=""></iframe>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <style>
        .number-box {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px;

        }

        .number-box .btn-call {
            background: rgb(248, 230, 72) !important;
            color: #fff;
            font-weight: 600;
            border-radius: 5px;
            padding: 5px 10px;
        }
    </style>

    <div class="number-box">
        <a class="btn btn-call" href="javascript::void(0)" style="font-size: 35px; color: black;">
            OTIT NUMBER / 送出機関番号 MMR000426
        </a>
    </div>

    <br>

    <section class="blog-page section-space" style="padding-top: 0px;">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="sidebar">
                        <aside class="widget-area">
                            <div class="sidebar__posts-wrapper sidebar__single">
                                <h4 class="sidebar__title">
                                    <a href="{{ route('employer.index') }}">
                                        @if (session('key') == 'jp')
                                            出国・入国・配属情報
                                        @else
                                            Departure/entry/assignment information
                                        @endif
                                    </a>
                                </h4>
                                <ul class="sidebar__posts list-unstyled">
                                    @foreach ($news->where('type', 'Departure') as $departure)
                                        <li class="sidebar__posts__item">
                                            <div class="sidebar__posts__image">
                                                <img src="{{ $departure->photo }}" alt="Latest posts"
                                                    style="width: 100%; height: 100px; background-size: center; object-fit: cover;">
                                            </div>
                                            <div class="sidebar__posts__content">
                                                <p class="sidebar__posts__meta">
                                                    <a href="{{ route('news.show', $departure->id) }}">
                                                        <span class="icon-user"></span>
                                                        {{ $departure->news_date ?? '' }}
                                                    </a>
                                                </p>
                                                <h4 class="sidebar__posts__title">
                                                    <a href="{{ route('news.show', $departure->id) }}">
                                                        @if (session('key') == 'jp')
                                                            {{ $departure->title_jp ?? '' }}
                                                        @else
                                                            {{ $departure->title_en ?? '' }}
                                                        @endif
                                                    </a>
                                                </h4>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="sidebar">
                        <aside class="widget-area">
                            <div class="sidebar__posts-wrapper sidebar__single">
                                <h4 class="sidebar__title">
                                    <a href="{{ route('employer.index') }}">
                                        @if (session('key') == 'jp')
                                            新着情報・セミナー情報
                                        @else
                                            Latest information/seminar information
                                        @endif
                                    </a>
                                </h4>
                                <ul class="sidebar__posts list-unstyled">

                                    @foreach ($news->where('type', 'News') as $new)
                                        <li class="sidebar__posts__item">
                                            <div class="sidebar__posts__image">
                                                <img src="{{ $new->photo }}" alt="Latest posts"
                                                    style="width: 100%; height: 100px; background-size: center; object-fit: cover;">
                                            </div>
                                            <div class="sidebar__posts__content">
                                                <p class="sidebar__posts__meta">
                                                    <a href="{{ route('news.show', $new->id) }}">
                                                        <span class="icon-user"></span>
                                                        {{ $departure->news_date ?? '' }}
                                                    </a>
                                                </p>
                                                <h4 class="sidebar__posts__title">
                                                    <a href="{{ route('news.show', $new->id) }}">
                                                        @if (session('key') == 'jp')
                                                            {{ $new->title_jp ?? '' }}
                                                        @else
                                                            {{ $new->title_en ?? '' }}
                                                        @endif
                                                    </a>
                                                </h4>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="inspiring-one section-space"
        style="background-image: url({{ asset('assets/images/backgrounds/inspiring-bg-1-1.png') }});">
        <div class="container">
            <div class="row">
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


    <section class="gove_oya" style="margin: 180px 0 10px 0;">
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
                <img class="lazyloaded" src="{{ asset('data/company/1.png') }}"
                    data-src="{{ asset('data/company/1.png') }}" alt="Nay Min Thar Empire Co.,Ltd">
            </div>
        </div>
    </section>


    <section class="events-one section-space">
        <div class="container">
            <div class="sec-title">
                <h6 class="sec-title__tagline sec-title__tagline--center">
                    Nay Min Thar Empire Co.,Ltd
                </h6>
                <h3 class="sec-title__title">
                    Our update licenses,
                    <span class="sec-title__title__inner">
                        Approved by MOL
                    </span>
                </h3>
            </div>
            <div class="horizontal-accordion">

                <div class="events-one__card card choice">
                    <div class="card-body">
                        <div class="events-one__card__top"
                            style="background-image: url({{ asset('data/company/2.png') }});">
                            <h4 class="events-one__card__title">
                                Myanmar Overseas Employment Agencies
                            </h4>
                            <span class="events-one__card__icon icon-plus"></span>
                        </div>
                        <div class="event-card-two">
                            <a href="#" class="event-card-two__image">
                                <img src="{{ asset('data/company/2.png') }}" alt="cleenhearts"
                                    style="width: 100%; height: 330px; background-size: center; object-fit: contain;">
                            </a>
                            <div class="event-card-two__content">
                                <h4 class="event-card-two__title">
                                    <a href="">
                                        Myanmar Overseas Employment Agencies
                                        <br>
                                    </a>
                                </h4>
                                <div class="event-card-two__text">
                                    MOEAF
                                </div>
                                <div class="event-card-two__meta">
                                    <h5 class="event-card-two__meta__title">
                                        CERTIFICATE OF MEMBERSHIP
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="events-one__card card choice expand">
                    <div class="card-body">
                        <div class="events-one__card__top"
                            style="background-image: url({{ asset('data/company/3.png') }});">
                            <h4 class="events-one__card__title">
                                Overseas Employment Agency Licence
                            </h4>
                            <span class="events-one__card__icon icon-plus"></span>
                        </div>
                        <div class="event-card-two">
                            <a href="#" class="event-card-two__image">
                                <img src="{{ asset('data/company/3.png') }}" alt="cleenhearts"
                                    style="width: 100%; height: 330px; background-size: center; object-fit: contain;">
                            </a>
                            <div class="event-card-two__content">
                                <h4 class="event-card-two__title">
                                    <a href="">
                                        Overseas Employment Agency Licence
                                    </a>
                                </h4>
                                <div class="event-card-two__text">
                                    Ministry of Labour
                                </div>
                                <div class="event-card-two__meta">
                                    <h5 class="event-card-two__meta__title">
                                        Licence No. 335/2023
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="events-one__card card choice">
                    <div class="card-body">
                        <div class="events-one__card__top"
                            style="background-image: url({{ asset('data/company/4.jpg') }});">
                            <h4 class="events-one__card__title">
                                Business license
                            </h4>
                            <span class="events-one__card__icon icon-plus"></span>
                        </div>
                        <div class="event-card-two">
                            <a href="#" class="event-card-two__image">
                                <img src="{{ asset('data/company/4.jpg') }}" alt="cleenhearts"
                                    style="width: 100%; height: 330px; background-size: center; object-fit: contain;">
                            </a>
                            <div class="event-card-two__content">
                                <h4 class="event-card-two__title">
                                    <a href="">
                                        Business license
                                    </a>
                                </h4>
                                <div class="event-card-two__text">
                                    Yangon City Development Committee
                                </div>
                                <div class="event-card-two__meta">
                                    <h5 class="event-card-two__meta__title">
                                        2022/2023
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="donations-gift section-space-bottom">
        <div class="container">
            <div class="row gutter-y-30">

                <div class="donations-gift__col col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="donation-information">
                        <div class="donation-information__bg"
                            style='background-image: url({{ asset('data/contact_bg.png') }})'></div>
                        <div class="donation-information__content">
                            <h3 class="donation-information__title">
                                @if (session('key') == 'jp')
                                    連絡を取り合う
                                @else
                                    Keep in Touch
                                @endif
                            </h3>
                            <p class="donation-information__text">
                                @if (session('key') == 'jp')
                                    採用、欠員、またはその他に関するご質問がございましたら、私たちのチームがお待ちしております。
                                    すべての質問に答えるため。
                                @else
                                    If you have any queries about recruitments, vacancies, or anything else, our team is
                                    ready
                                    to response all your queries.
                                @endif
                            </p>
                            <ul class="donation-information__list">
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>
                                        Viber
                                    </span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>
                                        WhatsApp
                                    </span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>
                                        Phone call
                                    </span>
                                </li>
                            </ul>

                            <div class="donation-information__bottom">
                                <a href="{{ route('contact.index') }}" class="cleenhearts-btn cleenhearts-btn--border">
                                    <div class="cleenhearts-btn__icon-box">
                                        <div class="cleenhearts-btn__icon-box__inner"><span
                                                class="icon-duble-arrow"></span></div>
                                    </div>
                                    <span class="cleenhearts-btn__text">
                                        Contact Now
                                    </span>
                                </a>
                                <div class="volunteer-group">
                                    <a href="javascript::void(0)" class="volunteer-group__link">
                                        <img src="{{ asset('data/viber.png') }}" alt="volunteer"
                                            class="volunteer-group__image">
                                    </a>
                                    <a href="javascript::void(0)" class="volunteer-group__link">
                                        <img src="{{ asset('data/whatsapp.png') }}" alt="volunteer"
                                            class="volunteer-group__image">
                                    </a>
                                    <a href="javascript::void(0)" class="volunteer-group__link">
                                        <img src="{{ asset('data/telephone.png') }}" alt="volunteer"
                                            class="volunteer-group__image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="donations-gift__shapes">
                        <div class="donations-gift__shape donations-gift__shape--one"></div>
                    </div>
                </div>


                <div class="donations-gift__col col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="donation-information">
                        <div class="donation-information__bg"
                            style='background-image: url({{ asset('data/contact_bg.png') }})'></div>
                        <div class="donation-information__content">
                            <h3 class="donation-information__title">
                                @if (session('key') == 'jp')
                                    メールでのご相談・
                                @else
                                    Consultation via email/
                                @endif
                            </h3>
                            <p class="donation-information__text">
                                @if (session('key') == 'jp')
                                    お問合せはこちらから
                                @else
                                    Contact us from here
                                @endif
                                <br>
                            </p>
                            <ul class="donation-information__list">
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>
                                        Viber
                                    </span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>
                                        WhatsApp
                                    </span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>
                                        Phone call
                                    </span>
                                </li>
                            </ul>

                            <div class="donation-information__bottom">
                                <a href="mailto:info@naymintharmyanmar.com"
                                    class="cleenhearts-btn cleenhearts-btn--border">
                                    <div class="cleenhearts-btn__icon-box">
                                        <div class="cleenhearts-btn__icon-box__inner"><span
                                                class="icon-duble-arrow"></span></div>
                                    </div>
                                    <span class="cleenhearts-btn__text">
                                        Send Email
                                    </span>
                                </a>
                                <div class="volunteer-group">
                                    <a href="javascript::void(0)" class="volunteer-group__link">
                                        <img src="{{ asset('data/mail.png') }}" alt="volunteer"
                                            class="volunteer-group__image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="donations-gift__shapes">
                        <div class="donations-gift__shape donations-gift__shape--one"></div>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <section class="aboutus_area">
        <div class="know_area"
            style="background-image: url({{ asset('data/photo/class_activities/making_sushi_for_fun/4.jpg') }})">
            <h2>
                @if (session('key') == 'jp')
                    当社について
                @else
                    About of Our Company
                @endif
            </h2>
            <div class="know_box" id="wrapper">
                <h3>
                    <a href="{{ route('about.index') }}">
                        @if (session('key') == 'jp')
                            会社の強み
                        @else
                            Strengths of Company
                        @endif
                    </a>
                </h3>
                <h3>
                    <a href="{{ route('ceo_message') }}">
                        @if (session('key') == 'jp')
                            MD'S Message
                        @else
                            MD'S Message
                        @endif
                    </a>
                </h3>
                <h3>
                    <a href="{{ route('statement') }}">
                        @if (session('key') == 'jp')
                            Vision, Mission & Value
                        @else
                            Vision, Mission & Value
                        @endif
                    </a>
                </h3>
                <h3>
                    <a href="{{ route('team') }}">
                        @if (session('key') == 'jp')
                            私たちのチームメンバーを紹介します
                        @else
                            Meet Our Team Members
                        @endif
                    </a>
                </h3>
                <h3>
                    <a href="#">
                        @if (session('key') == 'jp')
                            会社概要
                        @else
                            Company Profile
                        @endif
                    </a>
                </h3>
                <h3>
                    <a href="{{ route('news.index') }}">
                        @if (session('key') == 'jp')
                            新着情報
                        @else
                            What's new
                        @endif
                    </a>
                </h3>
            </div>

            <h3>
                @if (session('key') == 'jp')
                    クイックリンク
                @else
                    Quick Links
                @endif
            </h3>
            <div class="flow_box" id="wrapper">
                <h4>
                    <a href="{{ route('school.index') }}" style="font-size: 15px;">
                        @if (session('key') == 'jp')
                            YA HCU KHAM
                        @else
                            YA HCU KHAM
                        @endif
                    </a>
                </h4>
                <h4>
                    <a href="{{ route('specified_skilled.index') }}">
                        @if (session('key') == 'jp')
                            特定技能外国人
                        @else
                            Specified Skilled Worker
                        @endif
                    </a>
                </h4>
                <h4>
                    <a href="{{ route('technical_intern.index') }}" style="font-size: 15px;">
                        @if (session('key') == 'jp')
                            技能実習生
                        @else
                            Technical Intern Training
                        @endif
                    </a>
                </h4>
            </div>

        </div>
    </section>















    <section class="aboutus_area">
        <div class="number_area">

            <br>

            {{-- Sending  --}}
            <div class="send_no" id="wrapper">
                <div class="send_no_l">
                    {{-- Sending  --}}
                    <p class="no_tit">
                        @if (session('key') == 'jp')
                            日本企業への総送り出し人数
                            <span class="visa_type">＜ 技能実習 ＞</span>
                        @else
                            Total number of people sent to Japanese companies
                            <span class="visa_type">
                                < Technical training>
                            </span>
                        @endif
                    </p>
                    <p class="number">
                        {{ $technical_intern_trainings->sum('total_sending') }}
                    </p>
                    <div class="no_pic">
                        <img class=" ls-is-cached lazyloaded"
                            src="https://www.myanmarunity.jp/wp-content/uploads/2020/02/send_no_pic.png"
                            data-src="https://www.myanmarunity.jp/wp-content/uploads/2020/02/send_no_pic.png"
                            alt="send_no_pic"><br>
                    </div>
                </div>



                <div class="send_no_r">
                    <p>
                        @if (session('key') == 'jp')
                            職種別実績 ＜ 技能実習 ＞
                        @else
                            Results by job type < Technical training>
                        @endif
                    </p>
                    <div class="send_no_job">
                        @foreach ($technical_intern_trainings as $technical_intern_training)
                            <div>
                                <p class="job_tit">
                                    <a href="{{ route('technical_intern.index') }}" style="font-size: 15px;">
                                        @if (session('key') == 'jp')
                                            {{ $technical_intern_training->title_jp ?? '' }}
                                        @else
                                            {{ $technical_intern_training->title_en ?? '' }}
                                        @endif
                                    </a>
                                </p>
                                <p class="number">
                                    {{ $technical_intern_training->total_sending ?? '' }}
                                    <span>
                                        @if (session('key') == 'jp')
                                            名
                                        @else
                                            Total
                                        @endif
                                    </span>
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>



            {{-- Waiting  --}}
            <div class="send_no" id="wrapper">
                <div class="send_no_l">
                    <p class="no_tit">
                        @if (session('key') == 'jp')
                            入国待ち内定者数
                            <span class="visa_type">
                                ＜ 技能実習 ＞
                            </span>
                        @else
                            Number of people waiting to enter the country
                            <span class="visa_type">
                                < Technical training>
                            </span>
                        @endif
                    </p>
                    <p class="number">
                        {{ $technical_intern_trainings->sum('total_waiting') }}
                    </p>
                    <div class="no_pic">
                        <img class=" ls-is-cached lazyloaded"
                            src="https://www.myanmarunity.jp/wp-content/uploads/2020/02/send_no_pic.png"
                            data-src="https://www.myanmarunity.jp/wp-content/uploads/2020/02/send_no_pic.png"
                            alt="send_no_pic"><br>
                    </div>
                </div>



                <div class="send_no_r">
                    <p>
                        @if (session('key') == 'jp')
                            職種別入国待ち内定者数 ＜ 技能実習 ＞
                        @else
                            Number of people waiting to enter Japan by occupation < Technical Intern Training>
                        @endif
                    </p>
                    <div class="send_no_job">
                        @foreach ($technical_intern_trainings as $technical_intern_training)
                            <div>
                                <p class="job_tit">
                                    <a href="{{ route('technical_intern.index') }}" style="font-size: 15px;">
                                        @if (session('key') == 'jp')
                                            {{ $technical_intern_training->title_jp ?? '' }}
                                        @else
                                            {{ $technical_intern_training->title_en ?? '' }}
                                        @endif
                                    </a>
                                </p>
                                <p class="number">
                                    {{ $technical_intern_training->total_waiting ?? '' }}
                                    <span>
                                        @if (session('key') == 'jp')
                                            名
                                        @else
                                            Total
                                        @endif
                                    </span>
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
