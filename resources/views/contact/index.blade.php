@extends('layouts.main')
@section('title', 'Contact Us')
@section('content')
    <section class="contact-one section-space @@extraClassName">
        <div class="container">
            <div class="sec-title">
                <center>

                    @if (session('key') == 'jp')
                        <h3 class="sec-title__title">
                            <span class="sec-title__title__inner">
                                私達にメッセージを送ります
                            </span>
                        </h3>
                    @else
                        <h3 class="sec-title__title">
                            Send Us a
                            <span class="sec-title__title__inner">
                                Message
                            </span>
                        </h3>
                    @endif
                </center>
                <br>
                @if (session('key') == 'jp')
                    <p>
                        当社のサービスについてご質問がある場合、または当社の海外に関する詳細情報が必要な場合は、
                        人材派遣会社様、お気軽にご相談ください。電話、メール、または、
                        を通して
                        弊社ウェブサイトのお問い合わせフォーム。当社のフレンドリーな専門家チームがいつでも喜んでお答えします。
                        質問
                        または質問があるかもしれません。
                    </p>
                @else
                    <p>
                        If you have any questions about our services or would like more information about our overseas
                        employment agency, please do not hesitate to get in touch. We are available by phone, email, or
                        through
                        our contact form on our website. Our friendly team of experts are always happy to answer any
                        questions
                        or queries you may have.
                    </p>
                @endif
            </div>

            <div class="col-lg-12 col-md-12 col-xs-12">
                @include('components.whatsapp')
            </div>

            <div class="row gutter-y-30">
                <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="contact-one__map">

                        <div class="google-map contact-one__google__map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.9489233656636!2d96.1849222744523!3d16.779216584007944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ecfbc9197ea7%3A0xb23bfac07abaa4ad!2sYwar%20Ma%20St%2C%20Yangon!5e0!3m2!1sen!2smm!4v1700291506885!5m2!1sen!2smm"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <div class="contact-one__info">
                            <div class="contact-one__info__item">
                                <div class="contact-one__info__icon">
                                    <span class="icon-location"></span>
                                </div>
                                <div class="contact-one__info__content">
                                    <h4 class="contact-one__info__title">Mailing Address</h4>
                                    <address class="contact-one__info__text">
                                        No.5/11, Room G-1 Byine Yae Owe Sin Street, Ywar Ma Quarter, Tamwe Township, Yangon,
                                        Myanmar
                                    </address>
                                </div>
                            </div>

                            <div class="contact-one__info__item">
                                <div class="contact-one__info__icon">
                                    <span class="icon-phone"></span>
                                </div>
                                <div class="contact-one__info__content">
                                    <h4 class="contact-one__info__title">Quick Contact</h4>
                                    <a href="tel:09 791 468 884"
                                        class="contact-one__info__text contact-one__info__text--link">
                                        09 791 468 884, 09 982 567 521
                                    </a>
                                </div>
                            </div>

                            <div class="contact-one__info__item">
                                <div class="contact-one__info__icon">
                                    <span class="icon-envelope"></span>
                                </div>

                                <div class="contact-one__info__content">
                                    <h4 class="contact-one__info__title">support email</h4>
                                    <a href="mailto:pyikyawmoe6@gmail.com"
                                        class="contact-one__info__text contact-one__info__text--link">
                                        pyikyawmoe6@gmail.com, info@pyikyawmoe.com
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                    <div class="contact-one__form">
                        <div class="contact-one__form__bg"
                            style="background-image: url({{ asset('assets/images/backgrounds/contact-bg-1-1.png') }});">
                        </div>

                        <h2 class="contact-one__title">Leave us a Message</h2>
                        <form class="contact-one__form__inner contact-form-validated form-one wow fadeInUp"
                            data-wow-duration="1500ms" method="post" action="{{ route('contact.store') }}" id="create-form"
                            autocomplete="off">
                            @csrf

                            <div class="row gutter-y-20">
                                <div class="col-12">
                                    <div class="form-one__control">
                                        <input type="text" name="name" id="name" placeholder="enter your name"
                                            class="form-one__control__input">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-one__control">
                                        <input type="text" name="email" id="email" placeholder="your email"
                                            class="form-one__control__input">
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="form-one__control">
                                        <input type="tel" name="phone" id="phone" placeholder="phone no"
                                            class="form-one__control__input">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-one__control">
                                        <input type="text" name="subject" id="phone" placeholder="Subject"
                                            class="form-one__control__input">
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="form-one__control">
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="write message . . ."
                                            class="form-one__control__input form-one__control__message"></textarea>
                                    </div><!-- /.form-one__control -->
                                </div><!-- /.col-12 -->
                                <div class="col-12">
                                    <div class="contact-one__btn-box form-one__control">
                                        <button type="submit" class="cleenhearts-btn @@extraClassNameBtn">
                                            <span class="cleenhearts-btn__icon-box">
                                                <span class="cleenhearts-btn__icon-box__inner"><span
                                                        class="icon-duble-arrow"></span></span>
                                            </span>
                                            <span class="cleenhearts-btn__text">send message</span>
                                        </button>
                                    </div><!-- /.form-one__control -->
                                </div><!-- /.col-12 -->
                            </div><!-- /.row -->
                        </form><!-- /.contact-one__form__inner -->
                    </div><!-- /.contact-one__form -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact-one -->

@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
