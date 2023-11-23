<section class="slider_area">
    <div id="zoom-1"
        data-zs-src='["{{ asset('data/slider/0.jpg') }}", "{{ asset('data/slider/1.jpg') }}","{{ asset('data/slider/2.jpg') }}", "{{ asset('data/slider/3.jpg') }}"]'
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
                        <a href="#">
                            @if (session('key') == 'jp')
                                お問い合わせ・資料請求
                            @else
                                Inquiries/Request for materials
                            @endif
                        </a>
                    </div>

                    <div>
                        <a href="#">
                            @if (session('key') == 'jp')
                                技能実習生
                            @else
                                Technical Intern Trainee
                            @endif
                        </a>
                    </div>

                    <div>
                        <a href="#">
                            @if (session('key') == 'jp')
                                Vision, Mission & Value
                            @else
                                Vision, Mission & Value
                            @endif
                        </a>
                    </div>

                    <div>
                        <a href="pages/10616/index.html">
                            @if (session('key') == 'jp')
                                Ya Hcu Kham Japanese language school.
                            @else
                                Ya Hcu Kham Japanese language school.
                            @endif
                        </a>
                    </div>
                    <div>
                        <a href="pages/492/index.html">
                            @if (session('key') == 'jp')
                                School Activities
                            @else
                                School Activities
                            @endif
                        </a>
                    </div>
                    <div>
                        <a href="pages/21522/index.html">
                            @if (session('key') == 'jp')
                                ミャンマー政府公認、労働大臣より表彰の送り出し機関
                            @else
                                Officially recognized by the Myanmar government and awarded by the Minister
                                of Labor
                            @endif
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
