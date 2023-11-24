@extends('layouts.main')
@section('content')
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
                        <h6 class="sec-title__tagline sec-title__tagline--center">
                            Nay Min Thar Empire Co.,Ltd
                        </h6>
                        <center>
                            <h3 class="sec-title__title">
                                @if (session('key') == 'jp')
                                    私たちの目標
                                @else
                                    Our Objectives
                                @endif
                            </h3>
                        </center>
                        <br>
                        <p class="animate__animated animate__bounce animate__backInUp"
                            style="text-align: justify; font-size: 16px; color: black;">
                            @if (session('key') == 'jp')
                                私たちの主な目的は、ミャンマーの熟練した労働力と世界のビジネス環境との間のギャップを埋めることです。高度なスキルを持つ人材を調達して配置することで、国内の失業問題と積極的に闘いながら、さまざまな業界の雇用ニーズを満たすことを目指しています。
                            @else
                                Our central objective is to bridge the gap between Myanmar's skilled workforce and the
                                global business landscape. By sourcing and deploying highly skilled individuals, we aim to
                                fulfill the employment needs of various industries while actively combating unemployment
                                challenges within our country.
                            @endif
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="reason">
        <div class="bf_cc_box">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="bf_cc">
                            <div class="bf_cc_box">

                                <div class="bf_cc_item s_item">
                                    <p class="bf_cc_tit">
                                        @if (session('key') == 'jp')
                                            私たちのビジョン
                                        @else
                                            Our Vision
                                        @endif
                                    </p>
                                    <p class="bf_cc_txt">
                                        @if (session('key') == 'jp')
                                            私たちのビジョンは、一度に 1
                                            つのキャリアで、個人の世界的な可能性を解き放つ触媒となることです。私たちは、職業上の成功の伝統的な障壁を打ち破り、個人を多様な国際的な機会に導き、グローバル化した労働力の複雑さの中でうまく乗り切るだけでなく成功できるように支援することを目指しています。
                                        @else
                                            Our vision is to serve as the catalyst for unlocking the global potential of
                                            individuals, one career at a time. We aspire to break down the traditional
                                            barriers of professional success, guiding individuals towards diverse
                                            international opportunities and empowering them to not just navigate but thrive
                                            in the complexities of a globalized workforce.
                                        @endif
                                    </p>
                                    <figure>
                                        <img class=" ls-is-cached lazyloaded" src="{{ asset('data/vision.png') }}"
                                            data-src="{{ asset('data/vision.png') }}" alt="">
                                    </figure>
                                </div>

                                <div class="bf_cc_item s_item">
                                    <p class="bf_cc_tit">
                                        @if (session('key') == 'jp')
                                            我々の使命
                                        @else
                                            Our Mission
                                        @endif
                                    </p>
                                    <p class="bf_cc_txt">
                                        @if (session('key') == 'jp')
                                            私たちの使命は、熟練した専門家を海外の雇用機会に結び付けながら、彼らの成功を確実にするための包括的なサポートとトレーニングを提供することです。私たちは、異文化交流を促進し、個人の成長を促進し、より相互に結びついた世界に貢献することを信じています。
                                        @else
                                            Our mission is to connect skilled professionals with overseas employment
                                            opportunities while providing comprehensive support and training to ensure their
                                            success. We believe in facilitating cross-cultural exchanges, fostering personal
                                            growth, and contributing to a more interconnected world.
                                        @endif
                                    </p>
                                    <figure>
                                        <img class=" ls-is-cached lazyloaded" src="{{ asset('data/mission.png') }}"
                                            data-src="{{ asset('data/mission.png') }}" alt="">
                                    </figure>
                                </div>

                                <div class="bf_cc_item s_item">
                                    <p class="bf_cc_tit">
                                        @if (session('key') == 'jp')
                                            私たちの価値
                                        @else
                                            Our Value
                                        @endif
                                    </p>


                                    <ul class="usp-list">
                                        <li>
                                            @if (session('key') == 'jp')
                                                誠実さ
                                            @else
                                                INTEGRITY
                                            @endif
                                        </li>
                                        <li>
                                            @if (session('key') == 'jp')
                                                優秀
                                            @else
                                                EXCELLENCE
                                            @endif
                                        </li>
                                        <li>
                                            @if (session('key') == 'jp')
                                                エンパワーメント
                                            @else
                                                EMPOWERMENT
                                            @endif
                                        </li>
                                        <li>

                                            @if (session('key') == 'jp')
                                                信頼
                                            @else
                                                TRUST
                                            @endif
                                        </li>
                                        <li>
                                            @if (session('key') == 'jp')
                                                コラボレーション
                                            @else
                                                COLLABORATION
                                            @endif
                                        </li>
                                        <li>
                                            @if (session('key') == 'jp')
                                                応答性
                                            @else
                                                RESPONSIVENESS
                                            @endif
                                        </li>
                                        <br><br>
                                    </ul>

                                    <figure>
                                        <img class=" ls-is-cached lazyloaded" src="{{ asset('data/CoreValues.png') }}"
                                            data-src="{{ asset('data/CoreValues.png') }}" alt="">
                                    </figure>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
