@extends('front.layout')

@section('title', 'Service')

@section('services-active', 'current-menu-item')

@section('content')
    <!-- Content-->
    <div class="md-content">

        <!-- page-title -->
        <x-breadcrumb-component title="{{ __('shard.Services') }}"></x-breadcrumb-component>
        <!-- End / page-title -->


        <!-- Section -->
        <section class="md-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-0 offset-sm-0 offset-md-0 offset-lg-1 ">

                        <!-- title-01 -->
                        <div class="title-01 title-01__style-04">
                            <h2 class="title-01__title">{!! __('shard.We Provide Service Since') !!}</h2>
                            <div>{{ __('shard.We Provide desc') }}</div>
                        </div><!-- End / title-01 -->

                    </div>
                </div>
                @if (!empty($services))
                @foreach ($services as $index => $service)
                    @php
                        $isReverse = $index % 2 != 0; // كل خدمة ثانية تكون بتنسيق معكوس
                    @endphp
            
                    @if ($language == 'ar')
                    <div class="post-03 {{ $isReverse ? 'post-03__reverse' : '' }}" style="direction: rtl">
                        <div class="post-03__media">
                            <a href="#"><img src='{{ asset("storage/services/$service->image") }}'alt="{{ $service->title_ar }}" /></a>
                        </div>
                        <div class="post-03__body">
                            <h6 class="post-03__subTitle" style="letter-spacing: 0">{{__('shard.service')}} {{ $index + 1 }}</h6>
                            <h2 class="post-03__title"><a href="#">{{ $service->title_ar }}</a></h2>
                            <div class="post-03__description">{{ $service->description_ar }}</div>
                            <a class="post-03__link" href="{{ route('front.projects') }}" > {{__('shard.View all projects')}}<i class="fa fa-angle-left" style="margin: 0 5px" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    @else     
                    <div class="post-03 {{ $isReverse ? 'post-03__reverse' : '' }}">
                        <div class="post-03__media">
                            <a href="#"><img src='{{ asset("storage/services/$service->image") }}'alt="{{ $service->title }}" /></a>
                        </div>
                        <div class="post-03__body">
                            <h6 class="post-03__subTitle">{{__('shard.service')}} {{ $index + 1 }}</h6>
                            <h2 class="post-03__title"><a href="#">{{ $service->title }}</a></h2>
                            <div class="post-03__description">{{ $service->description }}</div>
                            <a class="post-03__link" href="{{ route('front.projects') }}"> {{__('shard.View all projects')}}<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    @endif
                @endforeach
            @endif
            



            </div>
        </section>
        <!-- End / Section -->


        <!-- Section -->
        <section class="md-section js-consult-form js-consult-form--02" style="background-color:#f7f7f7;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 offset-0 offset-sm-0 offset-md-1 offset-lg-2 ">

                        <!-- title-01 -->
                        <div class="title-01 title-01__style-04">
                            <h2 class="title-01__title">{{ __('shard.Features-title') }}</h2>
                            <div>{{ __('shard.Features-desc') }}</div>
                        </div><!-- End / title-01 -->

                    </div>
                </div>
                <!-- start feature -->
                <x-front-feature-component></x-front-feature-component>
                <!-- end feature -->

                <div class="consult-form consult-form--02 js-consult-form__content"
                    style="background-image: url('assets/img/backgrounds/2.jpg');display: flex; justify-content: center">

                    <!-- form-01 -->
                    <div class="form-01" style="padding:60px;">
                        <h2 class="form-01__title">{{ __('shard.We Here To Help You') }}</h2>
                        <form class="form-01__form">
                            <div class="form__item">
                                <input type="text" name="name" placeholder="{{ __('shard.Your name') }}" />
                            </div>
                            <div class="form__item">
                                <input type="text" name="email" placeholder="{{ __('shard.Your Email') }}" />
                            </div>
                            <div class="form__item">
                                <textarea rows="3" name="Your message" placeholder="{{ __('shard.Your message') }}"></textarea>
                            </div>
                            <div class="form__button"><a class="btn btn-primary btn-w180" href="#">
                                    {{ __('shard.send-message') }}</a>
                            </div>
                        </form>
                    </div><!-- End / form-01 -->

                </div>
            </div>
        </section>
        <!-- End / Section -->


        <!-- Section -->
        <section class="md-section">
            <div class="container">
            </div>
        </section>
        <!-- End / Section -->

    </div>
    <!-- End / Content-->
@endsection
