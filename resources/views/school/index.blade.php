@extends('layouts.main')
@section('content')
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


    <section class="product-page section-space-bottom" style="padding-top: 0px">
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
                            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen=""></iframe>
                    </div>

                    <div class="col-md-6">
                        <iframe loading="lazy" width="560" height="400" src="{{ asset('data/video/3.mp4') }}"
                            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen=""></iframe>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="inspiring-one section-space"
        style="background-image: url({{ asset('assets/images/backgrounds/inspiring-bg-1-1.png') }});">
        <div class="container">
            <div class="row gutter-y-50">
                <div class="col-xl-12">

                    <div class="sec-title">
                        <h6 class="sec-title__tagline @@extraClassName">
                            Japanese School
                        </h6>
                        <h3 class="sec-title__title">
                            YA HCU KHAM の意味
                        </h3>
                    </div>

                    <p class="inspiring-one__text" style="text-align: justify; font-size: 16px; color: black;">
                        Ya Hcu Kham 日本語学校名前についてご説明いたします。
                        Ya Hcu Khamという意味はミャンマーのシャン民族の方言であり、ミャンマー語で翻訳すると天秤という意味になります。
                        ミャンマーごで天秤とは物を量るものだけではなく他にもいい意味があり、それは (平等、公平、平等な権利) などそれぞれの意味があります。日本語にも天秤という言葉は平等という意味も有るでしょうか。
                    </p>
                </div>
            </div>
        </div>
        <div class="inspiring-one__shapes">
            <div class="inspiring-one__shape inspiring-one__shape--one"></div>
            <div class="inspiring-one__shape inspiring-one__shape--two"></div>
        </div>
    </section>


    <section class="about-one about-one--home section-space">
        <div class="about-one__bg">
            <div class="about-one__bg__border"></div>
            <div class="about-one__bg__inner"
                style="background-image: url({{ asset('assets/images/shapes/about-shape-1-1.png') }});">
            </div>
        </div>

        <div class="container">
            <div class="row gutter-y-50">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="about-one__left">
                        <div class="about-one__image">
                            <img src="{{ asset('data/school/2.jpg') }}" alt="about" class="about-one__image__one">
                            <div class="about-one__video" style="background-image: url({{ asset('data/school/1.png') }});">
                            </div>

                            <div class="about-one__profile volunteer-profile">
                                <div class="volunteer-profile__inner">
                                    <img src="{{ asset('data/school_logo1.jpg') }}" alt="School"
                                        class="volunteer-profile__image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="about-one__content">
                        <div class="sec-title">
                            <h3 class="sec-title__title" style="font-size: 29px;">
                                YA HCU KHAM 日本語の　学校に　なる　社長の　目的
                            </h3>
                        </div>
                        <div class="about-one__text-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <p class="about-one__text">
                                (2019)年に（Ya Hcu Kham日本語学校)が建てられました。その夢を叶ったの
                                (2008～2011)までミャンマー人の中で通訳者としてした時、確かに日本人はミャンマー人に示された優しさを尊重し、シンガポールに住んでいた時日本へ訪ねて来て、私は完全な安全を提供する日本の法律と、Konica
                                Minotla会社で日本人と規制について学んだので、仕事不足と賃金格差に交渉して、ミャンマーの人々を助けたいという願望で (Ya Hcu Kham日本語学校) ができました。
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <img src="assets/images/shapes/about-shape-1-2.png" alt="cleenhearts" class="about-one__hand">
    </section>


    <section class="help-people"
        style="background-image: url({{ asset('assets/images/backgrounds/help-people-bg-1.png') }});">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="volunteer-details__info">
                        <div class="volunteer-details__info__top">
                            <div class="volunteer-details__info__left">
                                <h3 class="volunteer-details__name" style="color: white;">
                                    YA HCU KHAM 日本語の　学校に　の　校長
                                </h3>
                            </div>
                        </div>
                        <p class="volunteer-details__text" style="color: white">
                            私の学校では日本語が出来るようになるテーマは“自分を救うために日本語を学ぶ”です。日本語が出来れば日本の文化や、習慣や規則とルールなどを勉強が出来て早めに日本の生活になれれば日本で働いて一番幸せになるのが自分です。
                        </p>
                    </div>
                </div>


                <div class="col-lg-3 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <div class="volunteer-details__image">
                        <img src="{{ asset('data/school/3.png') }}" alt="Velma P. Hawkins"
                            style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #B17F22; padding: 10px; border-radius: 50px 15px;">
                    </div>
                </div>

            </div>
        </div>
        <div class="help-people__shape">
            <img src="{{ asset('assets/images/shapes/help-people-shape-1.png') }}" alt="help-people"
                class="help-people__shape__one">
        </div>
    </section>



    <style>
        .om_area {
            background-image: linear-gradient(45deg, #fbffbb, #d1fbff);
            background-color: #fffdf4;
            background-image: linear-gradient(#e7f7ff 1px, transparent 0), linear-gradient(90deg, #e7f7ff 1px, transparent 0);
            background-size: 15px 15px;
            padding: 4rem 0;
        }

        .blog-card {
            background-color: #fff;
            margin: 1rem;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .title_area {
            font-size: 1.5rem;
            background-color: #0578b7;
            border-radius: 30px;
            color: #FFF;
            padding: 0.5rem 2rem;
            margin-bottom: 1.5rem;
            display: inline-block;
            font-weight: bold;
        }
    </style>

    <section class="blog-page section-space om_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec-title">
                        @if (session('key') == 'jp')
                            <center>
                                <h3 class="sec-title__title">
                                    YA HCU KHAM 学校の　組織
                                </h3>
                            </center>
                        @else
                            <center>
                                <h3 class="sec-title__title">
                                    YA HCU KHAM 学校の　組織
                                </h3>
                            </center>
                        @endif
                    </div>
                </div>

                <div class="col-md-12">
                    <center>
                        <img src="{{ asset('data/school/org.png') }}" alt=""
                            style="width: 90%; border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    </center>
                </div>


            </div>
        </div>
    </section>


    <section class="why-choose-one section-space">
        <div class="container">
            <div class="row gutter-y-50">
                <div class="col-lg-6">
                    <div class="why-choose-one__image">
                        <div class="why-choose-one__image__inner">
                            <img class="wow fadeInUp" data-wow-delay="100ms"
                                src="{{ asset('data/photo/class_activities/2.jpg') }}" alt="why-choose-one"
                                style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                            <img class="wow fadeInUp" data-wow-delay="300ms"
                                src="{{ asset('data/photo/class_activities/6.jpg') }}" alt="why-choose-one"
                                style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                        </div>
                        <div class="why-choose-one__image__inner">
                            <img class="wow fadeInUp" data-wow-delay="200ms"
                                src="{{ asset('data/photo/class_activities/7.jpg') }}" alt="why-choose-one"
                                style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                            <img class="wow fadeInUp" data-wow-delay="200ms"
                                src="{{ asset('data/photo/class_activities/16.jpg') }}" alt="why-choose-one"
                                style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                        </div>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="why-choose-one__content">
                        <div class="sec-title">
                            <h3 class="sec-title__title">
                                YA HCU KHAM の教え方
                            </h3>
                        </div>
                        <div class="cleenhearts-accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms"
                            data-grp-name="cleenhearts-accordion">

                            <div class="accordion @@extraClassName">
                                <div class="accordion-title">
                                    <h4>
                                        01. みんなの日本語　N5・N4
                                        <span class="accordion-title__icon"></span>
                                    </h4>
                                </div>
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>
                                            全てのレベルで試験が４回あって、合格者に証明書を与えます。
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion ">
                                <div class="accordion-title">
                                    <h4>
                                        02. 日本の習慣と規則
                                        <span class="accordion-title__icon"></span>
                                    </h4>
                                </div>
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>
                                            N5とN4を　毎日2時間で6ヶ月トレーニング中日本の習慣規則の義務的な教育
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion @@extraClassName">
                                <div class="accordion-title">
                                    <h4>
                                        03. ゴミの出し方
                                        <span class="accordion-title__icon"></span>
                                    </h4>
                                </div>
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>
                                            燃えるゴミ、燃えないゴミと缶とびんも分けて捨てるようにしています。
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion @@extraClassName">
                                <div class="accordion-title">
                                    <h4>
                                        04. 体操
                                        <span class="accordion-title__icon"></span>
                                    </h4>
                                </div>
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>
                                            毎週金曜日の朝に僚の学生と体操することです。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="why-choose-one__hand">
            <img src="{{ asset('assets/images/shapes/why-choose-shape-1-1.png') }}" alt="cleenhearts"
                class="why-choose-one__hand__one">
            <img src="{{ asset('assets/images/shapes/about-shape-1-2.png') }}" alt="cleenhearts"
                class="why-choose-one__hand__two">
        </div>
    </section>




    <section class="blog-page section-space om_area">
        <div class="container">
            <div class="row d-flex justify-content-center">

                @foreach ($school_galleries as $activity)
                    <div class="col-md-9">
                        <center>
                            <h2 class="title_area">
                                @if (session('key') == 'jp')
                                    {{ $activity->title_jp ?? '' }}
                                @else
                                    {{ $activity->title_en ?? '' }}
                                @endif
                            </h2>
                            <p>
                                @if (session('key') == 'jp')
                                    {{ $activity->description_jp ?? '' }}
                                @else
                                    {{ $activity->description_en ?? '' }}
                                @endif
                            </p>
                        </center>
                    </div>

                    @php
                        $images = explode(',', $activity->gallery);
                    @endphp
                    @foreach ($images as $image)
                        <div class="col-md-6 col-lg-4">
                            <div style="padding: 5px;" class="blog-card wow fadeInUp" data-wow-duration='1500ms'
                                data-wow-delay='000ms'>
                                <img data-enlargeable="" src="{{ $image }}" alt=""
                                    style="width: 100%; height: 200px; background-size: center; object-fit: cover;"
                                    class="img-enlargeable">
                                <p style="text-align: center; color: black;">
                                    {{ $activity->title ?? '' }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                    <div style="padding-top: 30px;"></div>
                @endforeach


            </div>
        </div>
    </section>
@endsection
