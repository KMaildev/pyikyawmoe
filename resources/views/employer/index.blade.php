@extends('layouts.main')
@section('content')
    <section class="donars-one donars-one--home section-space"
        style="background-image: url({{ asset('assets/images/backgrounds/donors-bg.png') }});">
        <div class="container-fluid">
            <div class="sec-title">
                <h6 class="sec-title__tagline sec-title__tagline--center">
                    Employer Form
                </h6>
                <h3 class="sec-title__title">
                    Post a
                    <span class='sec-title__title__inner'>
                        job
                    </span>
                    and hire talent worker
                </h3>
            </div>

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
            <div class="container contact-us-container animate__animated animate__bounce animate__fadeInDown">
                <div class="row">

                    <div class="col-lg-8" style="background-color: #e7f0e7; padding: 30px; border-radius: 5% 0% 0% 5%;">
                        <strong>
                            <h2>Employer <span class="color3">Form</span></h2>
                            <h3 style="color:#468ECE;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Post a job
                                    </font>
                                </font>
                                <span style="color:#f7931E;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            and hire talent worker.
                                        </font>
                                    </font>
                                </span>
                            </h3>
                        </strong>

                        <form autocomplete="off" method="POST" action="{{ route('employer.store') }}" id="create-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Company Name</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('company_name') is-invalid @enderror"
                                            placeholder="Company Name" name="company_name"
                                            value="{{ old('company_name') }}">
                                        @error('company_name')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 py-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Type of Company</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('company_type') is-invalid @enderror"
                                            placeholder="Type Of Company" name="company_type"
                                            value="{{ old('company_type') }}">
                                        @error('company_type')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 py-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Company Email Address</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Company Email Address" name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 py-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Company Phone Number</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            placeholder="Company Phone Number" name="phone" value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 py-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Company Website</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('website') is-invalid @enderror"
                                            placeholder="Company Website" name="website" value="{{ old('website') }}">
                                        @error('website')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Company Location</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('location') is-invalid @enderror"
                                            placeholder="Company Location" name="location" value="{{ old('location') }}">
                                        @error('location')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 py-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Job Category</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('job_category') is-invalid @enderror"
                                            placeholder="Job Category" name="job_category"
                                            value="{{ old('job_category') }}">
                                        @error('job_category')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 py-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Age Limit: 20-40</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('age_limit') is-invalid @enderror"
                                            placeholder="Age Limit: 20-40" name="age_limit"
                                            value="{{ old('age_limit') }}">
                                        @error('age_limit')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-xl-4 col-md-4 col-lg-4 col-sm-6 py-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Educational
                                            Requirement</label>
                                        <textarea class="form-control @error('educational_requirement') is-invalid @enderror" name="educational_requirement"
                                            placeholder="Educational Requirement">{{ old('educational_requirement') }}</textarea>
                                        @error('educational_requirement')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-4 col-lg-4 col-sm-6 py-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">
                                            Working Experience
                                        </label>
                                        <textarea class="form-control @error('working_experience_requirement') is-invalid @enderror"
                                            name="working_experience_requirement" placeholder="Working Experience ">{{ old('working_experience_requirement') }}</textarea>
                                        @error('working_experience_requirement')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-4 col-lg-4 col-sm-6 py-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Other Additional
                                            Requirement</label>
                                        <textarea class="form-control @error('other_additional_requirement') is-invalid @enderror"
                                            name="other_additional_requirement" placeholder="Other Additional ">{{ old('other_additional_requirement') }}</textarea>
                                        @error('other_additional_requirement')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-3 col-lg-3 col-sm-12">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Estimate Salary Offer</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('estimate_salary_offer') is-invalid @enderror"
                                            placeholder="Estimate Salary Offer" name="estimate_salary_offer"
                                            value="{{ old('estimate_salary_offer') }}">
                                        @error('estimate_salary_offer')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-xl-3 col-md-3 col-lg-3 col-sm-12">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Other Allowance</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('other_allowance') is-invalid @enderror"
                                            placeholder="Other Allowance" name="other_allowance"
                                            value="{{ old('other_allowance') }}">
                                        @error('other_allowance')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-xl-3 col-md-3 col-lg-3 col-sm-12">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">
                                            Gender: M/10, F/10
                                        </label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('gender') is-invalid @enderror"
                                            placeholder="Gender: M/10, F/10" name="gender" value="{{ old('gender') }}">
                                        @error('gender')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-xl-3 col-md-3 col-lg-3 col-sm-12">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label">Interview Type</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('interview_type') is-invalid @enderror"
                                            placeholder="Interview Type: Online" name="interview_type"
                                            value="{{ old('interview_type') }}">
                                        @error('interview_type')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12 py-5">
                                    <button type="submit" class="btn btn-dark font-weight-normal">
                                        Apply Now
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="col-lg-4 contact-info"
                        style="background-color: white; padding: 30px; border-radius: 0% 5% 5% 0%;">

                        <img src="{{ asset('data/counrty.png') }}" alt="" style="width: 100%;">

                        <br><br>

                        <h4 class="animate__animated animate__bounce animate__rotateInDownLeft">
                            PYI KYAW MOE COMPANY LIMITED
                        </h4>

                        <p style="font-size: 15px; color: black; text-align: justify" class="appear-animate"
                            data-animation-delay="100" data-animation-name="fadeInUpShorter">
                            A leading Manpower Recruiting Agency based in Myanmar, licensed and authorized by the
                            Ministry of Labor, Employment and Social Security of Myanmar.
                        </p>


                        <h4 class="animate__animated animate__bounce animate__rotateInDownLeft">
                            Our Expertise
                        </h4>

                        <p style="font-size: 15px; color: black; text-align: justify" class="appear-animate"
                            data-animation-delay="100" data-animation-name="fadeInUpShorter">
                            Our expertise stands on the Malaysia, Singapore, Japan, Dubai and Middle East Countries job
                            market.
                        </p>


                        <h4 class="animate__animated animate__bounce animate__rotateInDownLeft">
                            Our Operations
                        </h4>

                        <p style="font-size: 15px; color: black; text-align: justify" class="appear-animate"
                            data-animation-delay="100" data-animation-name="fadeInUpShorter">
                            PYI KYAW MOE COMPANY LIMITED’s operations are managed by a team of professionals.
                        </p>


                        <h4 class="animate__animated animate__bounce animate__rotateInDownLeft">
                            Our Experience
                        </h4>

                        <p style="font-size: 15px; color: black; text-align: justify" class="appear-animate"
                            data-animation-delay="100" data-animation-name="fadeInUpShorter">
                            We could provide different level of employees on our client’s demand in various job categories
                        </p>



                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreEmployer', '#create-form') !!}
@endsection
