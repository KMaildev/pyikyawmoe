@extends('layouts.main')
@section('content')
    <section class="donars-one donars-one--home section-space"
        style="background-image: url({{ asset('assets/images/backgrounds/donors-bg.png') }});">
        <div class="container-fluid">
            <div class="sec-title">
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
            </div>


            <div class="container contact-us-container animate__animated animate__bounce animate__fadeInDown">
                <div class="row">

                    <div class="col-lg-8" style="background-color: #e7f0e7; padding: 30px; border-radius: 5% 0% 0% 5%;">
                        <h2 class="text-black">
                            Apply Now
                        </h2>
                        <p class="p-b-3" style="font-size: 15px; text-align: justify; color: black;">
                            To apply for the desired job, we recommend reading the job requirements
                            carefuly then if you found yourself qualified for it, simply fill in the below form and
                            click APPLY NOW.
                        </p>
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
                                    <label class="text-black" style="color: black;">Name*</label>
                                    <input type="text" name="name" class="form-control " value="">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="text-black" style="color: black;">Phone</label>
                                    <input type="text" name="phone" class="form-control " value="">
                                </div>
                            </div>

                            <div class="col-lg-12 py-3">
                                <div class="form-group">
                                    <label class="text-black" style="color: black;">Additional Note</label>
                                    <input type="text" name="additional_note" class="form-control " value="">
                                </div>
                            </div>

                            <div class="col-lg-12 py-3">
                                <div class="form-group">
                                    <label for="img" style="color: black;">
                                        Select your CV to upload
                                    </label>
                                    <br>
                                    <input type="file" name="attachment_file" accept=".doc, .docx, .pdf"
                                        class="form-control-file" required>
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-dark font-weight-normal">
                                    Apply Now
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-4 contact-info"
                        style="background-color: white; padding: 30px; border-radius: 0% 5% 5% 0%;">
                        <h2 class="text-black">
                            Job Application
                        </h2>

                        <p class="p-b-3" style="font-size: 15px; text-align: justify;">
                            When it comes to choosing an employment agency, there are several factors to consider. Here are
                            some reasons why you may choose us:
                        </p>

                        <div class="right-content-about">
                            <p style="text-align: justify; font-size: 15px;">
                                <span style="color: black; font-weight: bold">
                                    Expertise and Experience:
                                </span> We have a team of experienced professionals who specialize in
                                recruitment and talent acquisition. Our expertise allows us to understand the
                                intricacies of various industries and job markets, enabling us to find the best
                                candidates for your organization.
                            </p>

                            <p style="text-align: justify; font-size: 15px;">
                                <span style="color: black; font-weight: bold">
                                    Time and Cost Savings:
                                </span>
                                Recruiting and hiring can be time-consuming and expensive. As an
                                employment agency, we handle the entire process for you, from sourcing candidates to
                                conducting initial screenings and interviews. This saves you valuable time and resources
                                that can be better utilized for other core business activities.
                            </p>


                            <p style="text-align: justify; font-size: 15px;">
                                <span style="color: black; font-weight: bold">
                                    Extensive Network:
                                </span>
                                A reputable overseas employment agency often has a broad network of
                                international employers and job opportunities, increasing the chances of finding suitable
                                positions for candidates.
                            </p>
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
