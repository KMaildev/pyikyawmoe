@extends('layouts.main')
@section('title', 'Activities')
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
                        @if (session('key') == 'jp')
                            <h6 class="sec-title__tagline sec-title__tagline--center">
                                ギャラリーとアクティビティ
                            </h6>
                            <center>
                                <h3 class="sec-title__title">
                                    フォトギャラリーをチェックしてください
                                </h3>
                            </center>
                            <br>
                            <p class="animate__animated animate__bounce animate__backInUp"
                                style="text-align: justify; font-size: 16px; color: black;">
                                私たちのギャラリーには、私たちの代理店を通じて就職に成功した個人からの活気に満ちた写真と体験談のコレクションが展示されています。これらのビジュアルは、私たちと一緒に海外就職の旅に乗り出す人々を待ち受ける、多様な労働環境、文化体験、個人的な成長の機会を描いています。賑やかな都市景観から息を呑むような自然の風景まで、私たちのギャラリーは海外で働くことの本質をとらえ、クライアントに新たな地平線を探求するインスピレーションを与えます。
                            </p>
                        @else
                            <h6 class="sec-title__tagline sec-title__tagline--center">
                                Gallery & Activities
                            </h6>
                            <center>
                                <h3 class="sec-title__title">
                                    Checkout
                                    <span class='sec-title__title__inner'>
                                        our photo
                                    </span>
                                    gallery
                                </h3>
                            </center>
                            <br>
                            <p class="animate__animated animate__bounce animate__backInUp"
                                style="text-align: justify; font-size: 16px; color: black;">
                                Our gallery showcases a vibrant collection of photographs and testimonials from individuals
                                who
                                have successfully found employment through our agency. These visuals depict diverse work
                                environments, cultural experiences, and personal growth opportunities that await those who
                                embark on their overseas employment journey with us. From bustling cityscapes to
                                breathtaking
                                natural landscapes, our gallery captures the essence of working abroad and inspires our
                                clients
                                to explore new horizons.
                            </p>
                        @endif
                    </div>
                </div>


                @foreach ($activities as $activity)
                    <div class="col-md-12 d-flex justify-content-center">
                        <h2 class="title_area">
                            {{ $activity->description ?? '' }}
                        </h2>
                    </div>

                    @php
                        $images = explode(',', $activity->images);
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
