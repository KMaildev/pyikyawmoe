@extends('layouts.main')
@section('title', 'Jobs')
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
                                人材サービス
                            @else
                                Manpower Services
                            @endif
                        </h2>
                    </div>


                    @foreach ($jobs as $job)
                        <div class="col-xl-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                            <div class="donation-information">
                                <div class="donation-information__bg"
                                    style='background-image: url({{ $job->photo ?? '' }})'>
                                </div>
                                <div class="donation-information__content">
                                    <h3 class="donation-information__title">
                                        {{ $job->title ?? '' }}
                                    </h3>
                                    <p class="donation-information__text">
                                        Job in {{ $job->country->country ?? '' }}
                                    </p>
                                    <ul class="donation-information__list">
                                        <li>
                                            <i class="fas fa-check"></i>
                                            <span>
                                                Job Offer
                                            </span>
                                        </li>
                                        <li>
                                            <i class="fas fa-check"></i>
                                            <span>
                                                2023
                                            </span>
                                        </li>
                                    </ul>
                                    <a href="{{ route('cv.index') }}" class="cleenhearts-btn cleenhearts-btn--border">
                                        <div class="cleenhearts-btn__icon-box">
                                            <div class="cleenhearts-btn__icon-box__inner"><span
                                                    class="icon-duble-arrow"></span></div>
                                        </div>
                                        <span class="cleenhearts-btn__text">
                                            Apply now
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>


    <section class="reason">
        <div class="bf_cc_box">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">

                        @if (session('key') == 'jp')
                            人材サービス
                            <div class="bf_cc_item l_item">
                                <p class="bf_cc_tit">各種能力テスト</p>
                                <p class="bf_cc_txt">
                                    株式会社ネミンタールでは、事前研修としてキャッテルCFIT知能検査、クレペリン検査、四則演算、シール貼り検査を実施しています。この能力検査では、言語だけでなく、計算能力や集中力、手先の器用さなどの知能のレベルを数値で見ることができます。選考の参考資料として受け入れ企業に提示します。
                                </p>
                                <div class="test_box">
                                    <div>
                                        <p class="test_tit">キャッテルCFIT知能検査</p>
                                        <p class="test_txt">
                                            キャッテルCFIT知能検査は、言語・生活環境・学習環境による影響をほとんど受けず、その人の純粋知能を測定するための検査です。この検査は、将来的な成長などの潜在能力診断において、高い信頼性･妥当性を持つ知能検査として評価されており、世界で進路指導や企業の作用試験などで利用されています。
                                        </p>
                                    </div>
                                    <div>
                                        <p class="test_tit">クレペリン検査</p>
                                        <p class="test_txt">1桁の数字の足し算を繰り返し行い、処理速度と正確性によって、その人の性格や行動力などの特性を見ることができます。</p>
                                    </div>
                                    <div>
                                        <p class="test_tit">四則演算</p>
                                        <p class="test_txt">足し算、引き算、掛け算、割り算、かっこの付いた計算を行い、基礎的な計算能力を測定します。</p>
                                    </div>
                                    <div>
                                        <p class="test_tit">シール貼り検査</p>
                                        <p class="test_txt">大小それぞれのシールを制限時間内にどれだけ綺麗に枠内に貼れるかを検査し、集中力や手先の器用さを測定します。</p>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="bf_cc_item l_item">
                                <p class="bf_cc_tit">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Various ability tests</font>
                                    </font>
                                </p>
                                <p class="bf_cc_txt">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">At Nay Min Thar Empire Co.,Ltd, we conduct the
                                            Cattell CFIT
                                            intelligence test, Kraepelin test, four arithmetic operations, and sticker
                                            pasting test as part of our preliminary training. </font>
                                        <font style="vertical-align: inherit;">With these ability tests, you can see
                                            numerically the level of intelligence, not just language, such as calculation
                                            ability, concentration, and manual dexterity. </font>
                                        <font style="vertical-align: inherit;">We present this to accepting companies as
                                            reference data in the selection process.</font>
                                    </font>
                                </p>
                                <div class="test_box">
                                    <div>
                                        <p class="test_tit">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Cattell CFIT Intelligence Test</font>
                                            </font>
                                        </p>
                                        <p class="test_txt">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">The Cattell CFIT Intelligence Test is
                                                    a test that measures a person's pure intelligence, which is largely
                                                    unaffected by language, living environment, and learning environment.
                                                </font>
                                                <font style="vertical-align: inherit;">This test has been evaluated as a
                                                    highly reliable and valid intelligence test for diagnosing potential
                                                    abilities such as future growth, and is used for career guidance and
                                                    corporate performance tests around the world.</font>
                                            </font>
                                        </p>
                                    </div>
                                    <div>
                                        <p class="test_tit">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Kraepelin test</font>
                                            </font>
                                        </p>
                                        <p class="test_txt">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">By repeatedly adding single-digit
                                                    numbers, it is possible to see characteristics such as a person's
                                                    personality and behavioral abilities based on the processing speed and
                                                    accuracy.</font>
                                            </font>
                                        </p>
                                    </div>
                                    <div>
                                        <p class="test_tit">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Four arithmetic operations</font>
                                            </font>
                                        </p>
                                        <p class="test_txt">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Addition, subtraction,
                                                    multiplication, division, and calculations with parentheses are
                                                    performed to measure basic numeracy skills.</font>
                                            </font>
                                        </p>
                                    </div>
                                    <div>
                                        <p class="test_tit">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Seal pasting inspection</font>
                                            </font>
                                        </p>
                                        <p class="test_txt">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Students will be tested to see how
                                                    neatly they can place stickers of different sizes within the frame
                                                    within the time limit, and their concentration and manual dexterity will
                                                    be measured.</font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="product-page section-space-bottom" hidden>
        <div class="container">
            <div class="row gutter-y-40 justify-content-center">
                <div class="col-md-12">
                    <div class="sec-title">
                        <h6 class="sec-title__tagline sec-title__tagline--center">
                            Manpower Services
                        </h6>
                        <center>
                            <h3 class="sec-title__title">
                                Available
                                <span class='sec-title__title__inner'>
                                    job in
                                    {{ $country->country ?? '' }}
                                </span>
                            </h3>
                        </center>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="row gutter-y-30">
                        @foreach ($jobs as $job)
                            <div class="col-xl-3 col-lg-4 col-sm-6 ">
                                <div class="product-item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                                    <a href="javascript::void(0)" class="product-item__img">
                                        <img data-enlargeable="" src="{{ $job->photo }}" alt=""
                                            style="width: 100%; height: 200px; background-size: center; object-fit: cover;"
                                            class="img-enlargeable">
                                    </a>
                                    <div class="product-item__content">
                                        <div class="cleenhearts-ratings justify-content-center">
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                        </div>

                                        <h4 class="product-item__title">
                                            <a href="javascript::void(0)">
                                                {{ $job->title ?? '' }}
                                            </a>
                                        </h4>

                                        <div class="product-item__price">
                                            <span>
                                                Job
                                            </span>
                                            <span>
                                                in
                                            </span>
                                            <span>
                                                {{ $job->country->country ?? '' }}
                                            </span>
                                        </div>

                                        <a href="{{ route('cv.index') }}"
                                            class="cleenhearts-btn cleenhearts-btn--border product-item__link">
                                            <div class="cleenhearts-btn__icon-box">
                                                <div class="cleenhearts-btn__icon-box__inner">
                                                    <span class="fa fa-file"></span>
                                                </div>
                                            </div>
                                            <span class="cleenhearts-btn__text">
                                                Apply Now
                                            </span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
