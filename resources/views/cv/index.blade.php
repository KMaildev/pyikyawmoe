@extends('layouts.main')
@section('content')
    <section class="donars-one donars-one--home section-space"
        style="background-image: url({{ asset('assets/images/backgrounds/donors-bg.png') }});">
        <div class="container-fluid">
            <div class="sec-title">


                @if (session('key') == 'jp')
                    <h6 class="sec-title__tagline sec-title__tagline--center">
                        履歴書を提出する
                    </h6>
                    <h3 class="sec-title__title">
                        <span class='sec-title__title__inner'>
                            仕事に応募する
                        </span>
                    </h3>
                @else
                    <h6 class="sec-title__tagline sec-title__tagline--center">
                        Submit Cv
                    </h6>
                    <h3 class="sec-title__title">
                        Apply
                        <span class='sec-title__title__inner'>
                            For
                        </span>
                        Your Job
                    </h3>
                @endif

            </div>


            <div class="container contact-us-container animate__animated animate__bounce animate__fadeInDown">
                <div class="row">

                    <div class="col-lg-8" style="background-color: #e7f0e7; padding: 30px; border-radius: 5% 0% 0% 5%;">
                        <h2 class="text-black">
                            @if (session('key') == 'jp')
                                今すぐお申し込みください
                            @else
                                Apply Now
                            @endif
                        </h2>

                        @if (session('key') == 'jp')
                            <p class="p-b-3" style="font-size: 15px; text-align: justify; color: black;">
                                希望の求人に応募するには、募集要項を読むことをお勧めします
                                注意してください。ご自身にその資格があると思われた場合は、以下のフォームに記入してください。
                                「今すぐ適用」をクリックします。
                            </p>
                        @else
                            <p class="p-b-3" style="font-size: 15px; text-align: justify; color: black;">
                                To apply for the desired job, we recommend reading the job requirements
                                carefuly then if you found yourself qualified for it, simply fill in the below form and
                                click APPLY NOW.
                            </p>
                        @endif

                        <form autocomplete="off" method="POST" action="{{ route('cv.store') }}"
                            enctype="multipart/form-data" id="create-form" autocomplete="off">
                            @csrf

                            <style>
                                input[type=text] {
                                    width: 100%;
                                    padding: 12px 20px;
                                    margin: 8px 0;
                                    box-sizing: border-box;
                                    border: 1px solid black;
                                    -webkit-transition: 0.5s;
                                    transition: 0.5s;
                                    outline: none;
                                }

                                input[type=text]:focus {
                                    border: 1px solid black;
                                }
                            </style>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="text-black" style="color: black;">
                                        @if (session('key') == 'jp')
                                            名前
                                        @else
                                            Name*
                                        @endif
                                    </label>
                                    <input type="text" name="name" class="form-control " value="">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="text-black" style="color: black;">
                                        @if (session('key') == 'jp')
                                            電話
                                        @else
                                            Phone
                                        @endif
                                    </label>
                                    <input type="text" name="phone" class="form-control " value="">
                                </div>
                            </div>

                            <div class="col-lg-12 py-3">
                                <div class="form-group">
                                    <label class="text-black" style="color: black;">
                                        @if (session('key') == 'jp')
                                            追記
                                        @else
                                            Additional Note
                                        @endif
                                    </label>
                                    <input type="text" name="additional_note" class="form-control " value="">
                                </div>
                            </div>

                            <div class="col-lg-12 py-3">
                                <div class="form-group">
                                    <label for="img" style="color: black;">
                                        @if (session('key') == 'jp')
                                            アップロードする履歴書を選択してください
                                        @else
                                            Select your CV to upload
                                        @endif
                                    </label>
                                    <br>
                                    <input type="file" name="attachment_file" accept=".doc, .docx, .pdf"
                                        class="form-control-file">
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="cleenhearts-btn @@extraClassNameBtn">
                                    <span class="cleenhearts-btn__icon-box">
                                        <span class="cleenhearts-btn__icon-box__inner"><span
                                                class="icon-duble-arrow"></span></span>
                                    </span>
                                    <span class="cleenhearts-btn__text">
                                        Apply Now
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-4 contact-info"
                        style="background-color: white; padding: 30px; border-radius: 0% 5% 5% 0%;">
                        <h2 class="text-black">
                            @if (session('key') == 'jp')
                                求人応募
                            @else
                                Job Application
                            @endif
                        </h2>


                        @if (session('key') == 'jp')
                            <p class="p-b-3" style="font-size: 15px; text-align: justify;">
                                人材紹介会社を選ぶ際には、考慮すべき要素がいくつかあります。ここ
                                は 当社を選んでいただける理由:
                            </p>
                        @else
                            <p class="p-b-3" style="font-size: 15px; text-align: justify;">
                                When it comes to choosing an employment agency, there are several factors to consider. Here
                                are some reasons why you may choose us:
                            </p>
                        @endif

                        <div class="right-content-about">

                            @if (session('key') == 'jp')
                                <p style="text-align: justify; font-size: 15px;">
                                    専門知識と経験:
                                    当社には、採用と人材獲得を専門とする経験豊富な専門家チームがいます。当社の専門知識により、さまざまな業界や雇用市場の複雑さを理解し、お客様の組織に最適な候補者を見つけることができます。
                                </p>
                            @else
                                <p style="text-align: justify; font-size: 15px;">
                                    <span style="color: black; font-weight: bold">
                                        Expertise and Experience:
                                    </span> We have a team of experienced professionals who specialize in
                                    recruitment and talent acquisition. Our expertise allows us to understand the
                                    intricacies of various industries and job markets, enabling us to find the best
                                    candidates for your organization.
                                </p>
                            @endif


                            @if (session('key') == 'jp')
                                <p style="text-align: justify; font-size: 15px;">
                                    時間とコストの節約:
                                    採用と採用には時間と費用がかかる場合があります。人材紹介会社として、候補者の発掘から一次選考、面接までのプロセスをすべて代行します。これにより、貴重な時間とリソースが節約され、他の中核的なビジネス活動に有効活用できるようになります。
                                </p>
                            @else
                                <p style="text-align: justify; font-size: 15px;">
                                    <span style="color: black; font-weight: bold">
                                        Time and Cost Savings:
                                    </span>
                                    Recruiting and hiring can be time-consuming and expensive. As an
                                    employment agency, we handle the entire process for you, from sourcing candidates to
                                    conducting initial screenings and interviews. This saves you valuable time and resources
                                    that can be better utilized for other core business activities.
                                </p>
                            @endif

                            @if (session('key') == 'jp')
                                <p style="text-align: justify; font-size: 15px;">
                                    広範なネットワーク:
                                    評判の高い海外人材紹介会社は、多くの場合、海外の雇用主と仕事の機会に関する広範なネットワークを持っており、候補者に適したポジションを見つけられる可能性が高くなります。
                                </p>
                            @else
                                <p style="text-align: justify; font-size: 15px;">
                                    <span style="color: black; font-weight: bold">
                                        Extensive Network:
                                    </span>
                                    A reputable overseas employment agency often has a broad network of
                                    international employers and job opportunities, increasing the chances of finding
                                    suitable
                                    positions for candidates.
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreCv', '#create-form') !!}
@endsection
