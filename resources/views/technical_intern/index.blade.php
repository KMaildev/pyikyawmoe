@extends('layouts.main')
@section('content')
    <section class="page-header @@extraClassName">
        <div class="page-header__bg" style="background-image: url({{ asset('data/photo/JLPT/2.jpg') }});">
        </div>
        <div class="container">
            <h2 class="page-header__title">
                @if (session('key') == 'jp')
                    技能実習生
                @else
                    Technical Intern Training
                @endif
            </h2>
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
                            <h6 class="sec-title__tagline sec-title__tagline--center">
                                Nay Min Thar Co.,Ltd
                            </h6>
                            <center>
                                <h3 class="sec-title__title">
                                    技能実習制度とは何ですか？
                                </h3>
                            </center>
                            <br>

                            <div class="mdl__layout_Lv2 regulation__index">
                                <p>
                                    <strong>
                                        技能実習生の適正な研修及び技能実習生の保護に関する法律
                                        研修生（以下「技能実習法」）は、2016年11月28日に公布され、
                                        2017 年 11 月 1 日に発効しました。
                                    </strong>
                                </p>

                                <p>
                                    <strong>
                                        技能実習制度は入国管理局と協力して実施されました
                                        管理及び難民認定法（昭和26年法律第319号、「出入国管理等に関する法律」）
                                        法」）およびその法的根拠として関連する条例が定められていますが、最近の法的根拠と併せて、
                                        技能実習制度、技能実習法の見直し
                                        及び関連条例が制定され、規定のかなりの部分が改正されました。
                                        入管法上の規定が技能実習生の規定となる
                                        研修法。
                                    </strong>
                                </p>

                                <p>
                                    <strong>
                                        技能実習の適正な実施の観点から
                                        技能実習生の保護と技能実習制度
                                        技能実習法に基づく新たな許可制度が導入されました
                                        監理団体、技能実習の認定制度
                                        優良監理団体・優良監理団体制度の拡充
                                        研修期間と技術者の割り当てを増やすことにより、導入組織を強化する
                                        実習生たち。
                                    </strong>
                                </p>
                            </div>
                        @else
                            <h6 class="sec-title__tagline sec-title__tagline--center">
                                Nay Min Thar Co.,Ltd
                            </h6>
                            <center>
                                <h3 class="sec-title__title">
                                    What is the Technical Intern Training Program?
                                </h3>
                            </center>
                            <br>
                            <div class="mdl__layout_Lv2 regulation__index">
                                <p>
                                    <strong>
                                        The Act on Proper Technical Intern Training and Protection of Technical Intern
                                        Trainees (“Technical Intern Training Act”) was promulgated on November 28, 2016 and
                                        came into effect on November 1, 2017.
                                    </strong>
                                </p>

                                <p>
                                    <strong>
                                        The Technical Intern Training Program was implemented with the Immigration
                                        Control and Refugee Recognition Act (Act No. 319 of 1951; the “Immigration Control
                                        Act”) and related ordinances as its legal basis, but in conjunction with a recent
                                        review of the Technical Intern Training Program, the Technical Intern Training Act
                                        and related ordinances were enacted, and a significant portion of the provisions
                                        under the Immigration Control Act became provisions under the Technical Intern
                                        Training Act.
                                    </strong>
                                </p>

                                <p>
                                    <strong>
                                        From the standpoint of appropriate implementation of technical intern training
                                        and protection of technical intern trainees, the Technical Intern Training Program
                                        under the Technical Intern Training Act introduced a new system for licensing
                                        supervising organizations, a system of accreditation for technical intern training
                                        plans, and expanded the program for excellent supervising organizations and
                                        implementing organizations by increasing training periods and quotas for technical
                                        intern trainees.
                                    </strong>
                                </p>
                            </div>
                        @endif
                    </div>
                </div>



                @foreach ($technical_intern_photos as $activity)
                    <div class="col-md-12 d-flex justify-content-center">
                        <h2 class="title_area">
                            @if (session('key') == 'jp')
                                {{ $activity->title_jp ?? '' }}
                            @else
                                {{ $activity->title_en ?? '' }}
                            @endif
                        </h2>
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
