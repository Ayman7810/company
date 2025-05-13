<!-- Section -->
@if (count($certificates))
    <section class="md-section" style="padding-bottom:0;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 offset-0 offset-sm-0 offset-md-2 offset-lg-2 ">

                    <!-- title-01 -->
                    <div class="title-01" style="margin-bottom:50px;">
                        <h2 class="title-01__title">{{ __('shard.what’s-client-say?') }}</h2>
                    </div><!-- End / title-01 -->

                </div>
            </div>
            <div class="consult-slide">

                <!-- carousel__element owl-carousel -->
                <div class="carousel__element owl-carousel"
                    data-options='{"loop":true,"dots":true,"nav":false,"margin":30,"responsive":{"0":{"items":1},"992":{"items":2}}}'>

                    @foreach ($certificates as $certificate)
                        @if ($language == 'ar')
                            <!-- testimonial -->
                            <div class="testimonial">
                                <style>
                                    .testimonial__info {
                                        display: flex;
                                        flex-direction: row-reverse;
                                    }

                                    .testimonial__info:after {
                                        left: 5px;
                                    }

                                    .testimonial__position {
                                        display: block;
                                        text-align: end;
                                        font-weight: normal;
                                        font-size: 17px;
                                    }

                                    .testimonial__avatar {
                                        margin-left: 10px;
                                    }

                                    .testimonial__text {
                                        text-align: end;
                                    }
                                </style>
                                <div class="testimonial__info"><a class="testimonial__avatar" href="#">
                                        <img src='{{ asset("storage/certificates/$certificate->image") }}'
                                            alt="" /></a>
                                    <h5 class="testimonial__name">{{ $certificate->name_ar }}

                                        <span class="testimonial__position">{{ $certificate->job_ar }}</span>
                                    </h5>
                                </div>
                                <div class="testimonial__content">
                                    <div class="testimonial__text">{{ $certificate->description_ar }}</div>
                                </div>
                            </div><!-- End / testimonial -->
                        @else
                            <!-- testimonial -->
                            <div class="testimonial">
                                <div class="testimonial__info"><a class="testimonial__avatar" href="#"><img
                                            src='{{ asset("storage/certificates/$certificate->image") }}'
                                            alt="" /></a>
                                    <h5 class="testimonial__name">{{ $certificate->name }}</h5><span
                                        class="testimonial__position">{{ $certificate->job }}</span>
                                </div>
                                <div class="testimonial__content">
                                    <div class="testimonial__text">{{ $certificate->description }}</div>
                                </div>
                            </div><!-- End / testimonial -->
                        @endif
                    @endforeach



                </div><!-- End / carousel__element owl-carousel -->

            </div>
        </div>
    </section>
@endif

<!-- End / Section -->
