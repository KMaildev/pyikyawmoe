@extends('layouts.main')
@section('title', 'Jobs')
@section('content')
    <section class="product-page section-space-bottom">
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
