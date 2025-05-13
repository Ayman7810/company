@extends('front.layout')

@section('title', 'Contact')
@section('contact-active', 'current-menu-item')

@section('content')
    <!-- Content-->
    <div class="md-content">

        <!-- Section -->
        <section class="md-section js-consult-form" style="background-color:#f7f7f7;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-0 offset-sm-0 offset-md-0 offset-lg-3 ">

                        <!-- title-01 -->
                        <div class="title-01">
                            <h2 class="title-01__title">{{ __('shard.Contact Details') }}</h2>
                            {{-- <div>Integer placerat ullamcorper urna nec rhoncus. Sed velit justo, lacinia non sapien
                                imperdiet, sagitt</div> --}}
                        </div><!-- End / title-01 -->

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ">

                        <!-- iconbox -->
                        <div class="iconbox iconbox__style-04">
                            <div class="iconbox__icon"><i class="ti-email"></i></div>
                            <div>
                                <h2 class="iconbox__title"><a href="#">{{ __('shard.email') }}</a></h2>
                                <div class="iconbox__description">info@ex.com</div>
                            </div>
                        </div><!-- End / iconbox -->

                    </div>
                    <div class="col-lg-4 ">

                        <!-- iconbox -->
                        <div class="iconbox iconbox__style-04">
                            <div class="iconbox__icon"><i class="ti-location-pin"></i></div>
                            <div>
                                <h2 class="iconbox__title"><a href="#">{{ __('shard.location') }}</a></h2>
                                <div class="iconbox__description">
                                    {!! __('shard.3919 New Cut Rd, Ellicott City, <br>Maryland, US') !!}
                                </div>
                            </div>
                        </div><!-- End / iconbox -->

                    </div>
                    <div class="col-lg-4 ">

                        <!-- iconbox -->
                        <div class="iconbox iconbox__style-04">
                            <div class="iconbox__icon"><i class="ti-mobile"></i></div>
                            <div>
                                <h2 class="iconbox__title"><a href="#"></a></h2>
                                <div class="iconbox__description">+967 777 777 777</div>
                            </div>
                        </div><!-- End / iconbox -->

                    </div>
                </div>

                <!-- form-contact -->
                <x-Front-from-contact></x-Front-from-contact>
                <!-- End / form-contact -->

            </div>
        </section>
        <!-- End / Section -->


        <!-- Section -->
        <section class="md-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-0 offset-sm-0 offset-md-0 offset-lg-3 ">

                        <!-- title-01 -->
                        <div class="title-01 title-01__style-05">
                            <h6 class="title-01__subTitle"
                                @if ($language == 'ar') style="letter-spacing: 0" @endif>
                                {{ __('shard.what’s next') }}</h6>
                            <h2 class="title-01__title">{!! __('shard.Are You Ready, <a href="/" class="clickScroll">Let’s Work</a>') !!}
                            </h2>
                        </div><!-- End / title-01 -->

                    </div>
                </div>
            </div>
        </section>
        <!-- End / Section -->

    </div>
    <!-- End / Content-->
@endsection
