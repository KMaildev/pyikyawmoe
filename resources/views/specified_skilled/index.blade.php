@extends('layouts.main')
@section('content')
    <section class="page-header @@extraClassName">
        <div class="page-header__bg" style="background-image: url({{ asset('data/photo/Our_School_and_Office/1.jpg') }});">
        </div>
        <div class="container">
            <h2 class="page-header__title">
                @if (session('key') == 'jp')
                    特定技能外国人
                @else
                    Specified Skilled Worker
                @endif
            </h2>
        </div>
    </section>



    <section class="reason">
        <div class="bf_cc_box">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">

                        <dl class="usp-list">
                            <dt>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        @if (session('key') == 'jp')
                                            査証（ビザ）と「在留資格」
                                        @else
                                            "Visa" and "Status of Residence"
                                        @endif
                                    </font>
                                </font>
                            </dt>

                            @if (session('key') == 'jp')
                                <p style="color: black;">
                                    「査証」（ビザ）とは、日本に入国しようとする外国人が所持する旅券（パスポート）が真正であり、かつ日本への入国に有効であることを外務省・在外公館が確認するもので、それぞれ定められた条件の下で、当該の外国人の本邦への入国（滞在）が適当であることについての「推薦」という性質を持ちます。したがって、「査証」は、上陸審査を通過すればその役割も終わります。<br>
                                    これに対して、「在留資格」とは、外国人が日本で行うことができる活動等を類型化したもので、法務省（出入国在留管理庁）が外国人に対する上陸審査・許可の際に付与する資格です。<br>
                                    一般に、「在留資格」が誤って「ビザ」と呼ばれることがありますが、正しくは上記のとおり全く別のものであり、このページでご紹介している「特定技能」は、新しく創設された「在留資格」の一種です。
                                </p>
                            @else
                                <p style="color: black;">
                                    As a general rule, foreign national who intend to entry into Japan must acquire a "visa"
                                    at
                                    the embassy of Japan (an organization of the Ministry of Foreign Affairs, the
                                    headquarters
                                    for Japanese Government representatives serving) in a foreign country, but this does not
                                    mean that you are guaranteed entry into Japan if obtaining a visa. When you arrive in
                                    Japan,
                                    you need to undergo the necessary examination by the Immigration Services Agency of
                                    Japan at
                                    the airport and aquire a "Status of Residence" according to the activity you are trying
                                    to
                                    conduct in Japan. In light of this, acquisition of "visa" and "Status of Residence" are
                                    separate procedures that fall under the jurisdiction of different organizations. The SSW
                                    introduced on this page is a type of newly established "Status of Residence".
                                </p>
                            @endif




                            <dt>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        @if (session('key') == 'jp')
                                            「特定技能」の特徴
                                        @else
                                            Features of SSW
                                        @endif
                                    </font>
                                </font>
                            </dt>


                            @if (session('key') == 'jp')
                                <p style="color: black">
                                    「特定技能」以外にも日本国内で就労が可能な在留資格は複数ありますが、在留期間や活動内容、求められる要件等に違いがあります。「特定技能」は、在留期間が通算で上限５年までであること、受入れ機関（又は登録支援機関）による一連のサポートが義務付けられていること、受入れに際しては技能及び日本語能力を試験によって確認すること等の特徴があります。<br>
                                    なお、「技能実習」との違いについては、同制度が現場での実習を通じて日本の様々な技術を習得した後で帰国し、その技術を母国に広めるという国際貢献を目的とするのに対し、「特定技能」は、人材の確保が困難な一部の産業分野等における人手不足に対応するため、一定の専門性・技能を有する外国人材を即戦力としての労働者として受け入れるという点が挙げられます。なお、技能実習（２号）を良好に修了した方が「特定技能」に在留資格を変更するというルートも開かれています。
                                </p>
                            @else
                                <p style="color: black;">
                                    Those who can work in Japan as a SSW must be over 18 years old in a good health, have
                                    the necessary occupational skills and Japanese language ability to work immediately
                                    without receiving any particular training. Skills and Japanese proficiency will be
                                    confirmed by a unified test conducted by Japan. In principle, you can work for up to 5
                                    years in total, but you cannot bring your family. In addition, the major difference from
                                    other status of residence to work in Japan is a support system. You can receive a wide
                                    range of support for life and work from your employer while you are in Japan, from the
                                    time you arrive to leave for your home country.
                                    There is another program called "Technical Intern Training", which aims toward providing
                                    international contributions by having workers share skills and knowledge that they
                                    acquired through on-the-job training in Japan throughout their home country after
                                    returning. Those who have satisfactory completed Technical Intern Training are able to
                                    switch their status of residence to SSW in the same field without taking occupational
                                    skill exams and Japanese proficiency tests.
                                </p>
                            @endif

                        </dl>


                        <style>
                            .ginoFeature {
                                border: 4px solid #1353bb;
                                margin-left: auto;
                                margin-right: auto;
                                max-width: 700px;
                                font-size: 14px;
                            }

                            .ginoFeature>.tit {
                                text-align: center;
                                color: #fff;
                                font-size: 18px;
                                background: #1353bb;
                                padding: 0.7em 1em;
                            }

                            .ginoFeature .inner {
                                padding: 1.5em;
                            }

                            .ginoFeature strong {
                                color: #e64a19;
                            }

                            @media(max-width:768px) {
                                .ginoFeature {
                                    font-size: 3.6vw;
                                }

                                .ginoFeature>.tit {
                                    font-size: 4.7vw;
                                }
                            }
                        </style>


                        <div class="constBox">
                            @if (session('key') == 'jp')
                                <div class="ginoFeature">
                                    <h3 class="tit">特定技能1号</h3>
                                    <div class="inner">
                                        <p class="bold">
                                            <strong>　特定産業分野</strong>に属する<strong>相当程度の知識又は経験を必要とする技能</strong>を要する業務に従事する外国人向けの在留資格
                                        </p>
                                        <table class="tbl01 table">
                                            <tr>
                                                <th>在留期間</th>
                                                <td>１年、６か月又は４か月ごとの更新、<strong>通算で上限５年</strong>まで</td>
                                            </tr>
                                            <tr>
                                                <th>技能水準</th>
                                                <td>試験等で確認 <span class="note">（技能実習２号修了者は試験等免除）</span></td>
                                            </tr>
                                            <tr>
                                                <th>日本語能力水準</th>
                                                <td>生活や業務に必要な日本語能力を試験等で確認<br>
                                                    <span class="note">（技能実習２号修了者は試験等免除）</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>家族の帯同</th>
                                                <td>基本的に認めない</td>
                                            </tr>
                                        </table>
                                        <p class="alignC bold">受入れ機関又は登録支援機関による<strong>支援の対象</strong></p>
                                        <p class="note">※特定技能２号は、<strong>特定産業分野に属する熟練した技能</strong>を要する業務に従事する外国人向けの在留資格です。
                                        </p>
                                    </div>
                                </div>
                            @else
                                <div class="ginoFeature">
                                    <h3 class="tit">Specified Skilled Worker (i)</h3>
                                    <div class="inner">
                                        <p class="bold">This is a status of residence applicable to foreign nationals
                                            <strong>who work in jobs that require a considerable knowledge of or
                                                experience</strong> in <strong>Specified Industry Fields.</strong>
                                        </p>
                                        <table class="tbl01 table">
                                            <tbody>
                                                <tr>
                                                    <th>Period of Stay</th>
                                                    <td>Renewed every 1 year, 6 months or 4 months, up to 5 years in total
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Skill Standards</th>
                                                    <td>Confirmed by exams, etc. <span class="note">(those who have
                                                            completed Technical Intern Training (ii) are exempted from
                                                            exams, etc.)</span></td>
                                                </tr>
                                                <tr>
                                                    <th>Japanese Language Level</th>
                                                    <td>Proficiency in Japanese language required in daily life and at the
                                                        workplace needs to be confirmed by exams, etc.</td>
                                                </tr>
                                                <tr>
                                                    <th>Accompanied by family members</th>
                                                    <td>basically not permitted</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p class="alignC bold"><strong>Eligible for support</strong> by Accepting
                                            Organizations or Registered Support Organizations</p>
                                        <p class="note">*Specified Skilled Worker (ii) is a status of residence for
                                            foreign nationals to engage in jobs that require proficient skills in specified
                                            industry fields.</p>
                                    </div>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="support-one section-space">
        <div class="container">
            <div class="sec-title">
                <h6 class="sec-title__tagline sec-title__tagline--center">
                    @if (session('key') == 'jp')
                        12の特定産業分野と従事可能な業務
                    @else
                        Work That Can Be Conducted as a SSW
                    @endif
                </h6>
                <h3 class="">
                    @if (session('key') == 'jp')
                        <p style="color: black">
                            「特定技能」によって具体的に従事できる業務は、12の特定産業分野ごとに次のとおり定められています。
                        </p>
                    @else
                        <p style="color: black">
                            The specific work you can do as a SSW in Japan is as follows, listed for each of
                            the
                            12 industrial fields.
                        </p>
                    @endif
                </h3>
            </div>

            <div class="row gutter-y-30">

                @foreach ($s_s_w_jobs as $s_s_w_job)
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="support-card">
                            <a href="javascript::void(0)" class="support-card__image">
                                <img src="{{ $s_s_w_job->photo ?? '' }}" alt="">
                            </a>
                            <a href="javascript::void(0)" class="support-card__content">
                                <div class="support-card__content__inner">
                                    <h3 class="support-card__title" style="font-size: 16px; text-align: left;">
                                        @if (session('key') == 'jp')
                                            {{ $s_s_w_job->title_jp }}
                                        @else
                                            {{ $s_s_w_job->title_en }}
                                        @endif
                                    </h3>
                                    <p style="font-size: 10x; text-align: justify;">
                                        @if (session('key') == 'jp')
                                            {!! $s_s_w_job->description_jp !!}
                                        @else
                                            {!! $s_s_w_job->description_en !!}
                                        @endif
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="support-one__shape">
            <img src="{{ asset('assets/images/shapes/support-shape-hand-1-1.png') }}" alt="shape-hand"
                class="support-one__shape__one">
            <img src="{{ asset('assets/images/shapes/support-shape-hand-1-2.png') }}" alt="shape-hand"
                class="support-one__shape__two">
        </div>
    </div>
@endsection
