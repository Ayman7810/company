@extends('front.layout')

@section('title', 'Home')
{{-- @section('Home-active', 'current-menu-item') --}}

@section('content')
    <!-- Content-->
    <div class="md-content">

        <!-- slider -->
        <div class="slider">

            <!-- carousel__element owl-carousel -->
            <div class="carousel__element owl-carousel"
                data-options='{"items":1,"loop":true,"dots":false,"nav":false,"margin":0, "autoplay": true, "autoplayTimeout": 3000}'>
                <div class="slider__item" style="background-image: url('{{ asset('assets-front') }}/img/slider.jpg');">
                    <div class="md-tb">
                        <div class="md-tb__cell">
                            <div class="slider__content">
                                <div class="container">
                                    <h2>{{ __('shard.hero-title-1') }}</h2>
                                    <p>{{ __('shard.hero-desc-1') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider__item"
                    style="background-image: url('{{ asset('assets-front') }}/img/backgrounds/1.jpg');">
                    <div class="md-tb">
                        <div class="md-tb__cell">
                            <div class="slider__content">
                                <div class="container">
                                    <h2>{{ __('shard.hero-title-2') }}</h2>
                                    <p>{{ __('shard.hero-desc-2') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End / carousel__element owl-carousel -->

        </div><!-- End / slider -->

        <!-- Service-->

        <!-- Section -->
        <section class="md-section" style="background-color:#f7f7f7;padding:0;">
            <div class="container">
                @if (!empty($services))
                    <div class="textbox-group">
                        <div class="row">
                            @foreach ($services as $service)
                                <div class="col-md-4 col-lg-4 ">
                                    <!-- textbox -->
                                    @if ($language == 'ar')
                                        <div class="textbox">
                                            <div class="textbox__image"><a href="{{ route('front.service') }}"><img
                                                        style="height: 300px"
                                                        src='{{ asset("storage/services/$service->image") }}'alt="{{ $service->title_ar }}" /></a>
                                            </div>
                                            <div class="textbox__body" style="direction: rtl">
                                                <h2 class="textbox__title"><a
                                                        href="{{ route('front.service') }}">{{ $service->title_ar }}</a>
                                                </h2>
                                                <div class="textbox__description">
                                                    {{ Str::words($service->description_ar, 15, '...') }}</div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="textbox">
                                            <div class="textbox__image"><a href="{{ route('front.service') }}"><img
                                                        style="height: 300px"
                                                        src='{{ asset("storage/services/$service->image") }}'alt="" /></a>
                                            </div>
                                            <div class="textbox__body">
                                                <h2 class="textbox__title"><a
                                                        href="{{ route('front.service') }}">{{ $service->title }}</a></h2>
                                                <div class="textbox__description">
                                                    {{ Str::words($service->description, 15, '...') }}</div>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                            @endforeach

                        </div>
                    </div>
                @endif
            </div>
        </section>
        <!-- End / Section -->


        <!-- Section -->
        <section class="md-section" style="background-color:#f7f7f7;padding-top:0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 offset-0 offset-sm-0 offset-md-1 offset-lg-2 ">

                        <!-- iconbox -->
                        <div class="iconbox">
                            <div class="iconbox__icon"><i class="ti-headphone-alt"></i></div>
                            <div>
                                <h2 class="iconbox__title"><a href="#">{{ __('shard.Features-title') }}</a></h2>
                                <div class="iconbox__description">{{ __('shard.Features-desc') }}</div>
                            </div>
                        </div><!-- End / iconbox -->

                    </div>
                </div>
                <!-- start feature -->
                <x-front-feature-component></x-front-feature-component>
                <!-- end feature -->
            </div>
        </section>
        <!-- End / Section -->

        <!-- About-->

        <!-- Section -->
        <section class="md-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 ">

                        <!-- title-01 -->
                        <div class="title-01 title-01__style-03 md-text-left">
                            <h6 class="title-01__subTitle"
                                @if ($language == 'ar') style="letter-spacing: 0 ; text-align: end" @endif>{{ __('shard.about') }}
                            </h6>
                            <h2 class="title-01__title" @if ($language == 'ar') style="text-align: end" @endif>{{ __('shard.about-title') }}</h2>
                            <div @if ($language == 'ar') style="text-align: end" @endif>{{ __('shard.about-desc') }}</div>
                        </div><!-- End / title-01 -->

                        <div class="row">
                            <div class="col-sm-4 ">

                                <!-- box-number -->
                                <div class="box-number">
                                    <div class="box-number__number">
                                        <h2 class="js-counter" data-counter-time="2000" data-counter-delay="10">
                                            99</h2>
                                    </div>
                                    <div class="box-number__description">{{ __('shard.about-happy-clients') }}</div>
                                </div><!-- End / box-number -->

                            </div>
                            <div class="col-sm-4 ">

                                <!-- box-number -->
                                <div class="box-number">
                                    <div class="box-number__number">
                                        <h2 class="js-counter" data-counter-time="2000" data-counter-delay="10">
                                            1200</h2>
                                    </div>
                                    <div class="box-number__description">{{ __('shard.about-message-per-Day') }}</div>
                                </div><!-- End / box-number -->

                            </div>
                            <div class="col-sm-4 ">

                                <!-- box-number -->
                                <div class="box-number">
                                    <div class="box-number__number">
                                        <h2 class="js-counter" data-counter-time="2000" data-counter-delay="10">
                                            15</h2>
                                    </div>
                                    <div class="box-number__description">{{ __('shard.about-Awards') }}</div>
                                </div><!-- End / box-number -->

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="js-consult-slider">

                            <!-- carousel__element owl-carousel -->
                            <div class="carousel__element owl-carousel"
                                data-options='{"items":1,"loop":true,"dots":false,"nav":false,"margin":30,"responsive":{"0":{"items":2},"576":{"items":3},"992":{"items":1}}}'>
                                <div class="image-full"><img src="{{ asset('assets-front') }}/img/image-01.jpg"
                                        alt=""></div>
                                <div class="image-full"><img src="{{ asset('assets-front') }}/img/image-02.jpg"
                                        alt=""></div>
                            </div><!-- End / carousel__element owl-carousel -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End / Section -->

        <!-- Contact us-->

        <!-- Section -->
        <section class="md-section md-skin-dark js-consult-form"
            style="background-image: url('{{ asset('assets-front') }}/img/blogs/1.jpg');">
            <div class="md-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-0 offset-sm-0 offset-md-0 offset-lg-2 ">

                        <!-- title-01 -->
                        <div class="title-01 title-01__style-02">
                            <h1 class="title-01__title ">{{ __('shard.contact-with-us') }}</h1>
                            {{-- <div>Sed ante nisl, fermentum et facilisis in, maximus </div> --}}
                        </div><!-- End / title-01 -->

                        <div class="consult-phone">(+967) 777 777 777</div>
                    </div>
                </div>

                <!-- form-contact -->
                <x-Front-from-contact></x-Front-from-contact>
                <!-- End / form-contact -->

            </div>
        </section>
        <!-- End / Section -->

        <!-- What’s Client Say ?-->
        <x-front-certificate-component></x-front-certificate-component>
        <!--end What’s Client Say ?-->



        <!--start Our partner-->
        <x-front-partner-component></x-front-partner-component>
        <!--end Our partner-->

        <!--start Our advisors-->
        <x-front-advisors-component></x-front-advisors-component>
        <!--end Our advisors-->

        <!--start Latest Blogs -->
        <x-front-blogs-component title="{{ __('shard.latest-blogs') }}"></x-front-blogs-component>
        <!--end Latest Blogs -->



    </div>
    <!-- End / Content-->
@endsection
