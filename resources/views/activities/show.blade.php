@extends('layouts.main')
@section('title', 'Activities')
@section('content')
    <section class="blog-page section-space">
        <div class="container">
            <div class="row gutter-y-30">

                <div class="col-md-12">
                    <div class="sec-title">
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
                            Our gallery showcases a vibrant collection of photographs and testimonials from individuals who
                            have successfully found employment through our agency. These visuals depict diverse work
                            environments, cultural experiences, and personal growth opportunities that await those who
                            embark on their overseas employment journey with us. From bustling cityscapes to breathtaking
                            natural landscapes, our gallery captures the essence of working abroad and inspires our clients
                            to explore new horizons.
                        </p>
                    </div>
                </div>

                @foreach ($activities as $activity)
                    @php
                        $images = explode(',', $activity->images);
                    @endphp
                    @foreach ($images as $image)
                        <div class="col-md-6 col-lg-4">
                            <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                                <a href="javascript::void(0)" class="blog-card__image">
                                    <img data-enlargeable="" src="{{ $image }}" alt=""
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover;"
                                        class="img-enlargeable">
                                    <div class="blog-card__date">
                                        NMT
                                    </div>
                                </a>
                                <div class="blog-card__content"
                                    style="background-image: url({{ asset('assets/images/blog/blog-bg-1-1.png') }});">
                                    <h3 class="blog-card__title">
                                        <a href="javascript::void(0)">
                                            {{ $activity->title ?? '' }}
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
@endsection
