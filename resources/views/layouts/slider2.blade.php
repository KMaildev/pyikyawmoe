<link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/mu/css/top_new.css') }}">

<section class="slider_area">
    <div id="zoom-1"
        data-zs-src='["{{ asset('data/slider/0.jpg') }}", "{{ asset('data/slider/1.jpg') }}","{{ asset('data/slider/2.jpg') }}", "{{ asset('data/slider/3.jpg') }}", "{{ asset('data/photo/Interview_Session/12.jpg') }}"]'
        data-zs-speed="4000" data-zs-switchSpeed="400" data-zs-interval="6000" data-zs-overlay="dots"
        data-zs-bullets="false">

        <div class="inner-content2">
            <div class="mu_slogan">
                <p>
                    Nay Min Thar Empire Myanmar Co.,Ltd
                    <br>
                    Myanmar Human Resource Center
                </p>
                <p style="font-size:0.9rem;">
                    Nay Min Thar Empire Myanmar is the leading Manpower Recruiting Agency based in Myanmar, licensed and
                    authorized by
                    the Ministry of Labor, Employment and Social Security of Myanmar.
                </p>
                <div class="mu_cvbtn">
                    <div>
                        <a href="{{ route('contact.index') }}">
                            @if (session('key') == 'jp')
                                お問い合わせ・資料請求
                            @else
                                Inquiries
                            @endif
                        </a>
                    </div>

                    <div>
                        <a href="{{ route('technical_intern.index') }}" style="font-size: 15px;">
                            @if (session('key') == 'jp')
                                技能実習生
                            @else
                                Technical Intern Training
                            @endif
                        </a>
                    </div>

                    <div>
                        <a href="{{ route('specified_skilled.index') }}">
                            @if (session('key') == 'jp')
                                特定技能外国人
                            @else
                                Specified Skilled Worker
                            @endif
                        </a>
                    </div>

                    <div>
                        <a href="{{ route('statement') }}">
                            @if (session('key') == 'jp')
                                Vision, Mission & Value
                            @else
                                Vision, Mission & Value
                            @endif
                        </a>
                    </div>

                    <div>
                        <a href="{{ route('school.index') }}">
                            @if (session('key') == 'jp')
                                Ya Hcu Kham Japanese language school.
                            @else
                                Ya Hcu Kham Japanese language school.
                            @endif
                        </a>
                    </div>


                    <div>
                        <a href="{{ route('cv.index') }}">
                            @if (session('key') == 'jp')
                                仕事に応募する
                            @else
                                Apply for job
                            @endif
                        </a>
                    </div>

                    <div>
                        <a href="{{ route('employer.index') }}">
                            @if (session('key') == 'jp')
                                雇用主フォーム
                            @else
                                Employers Form
                            @endif
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
