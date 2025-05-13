@extends('front.layout')

@section('title', 'About')

@section('about-active', 'current-menu-item')


@section('content')
    <!-- Content-->
    <div class="md-content">

        <!-- Section -->
        <section class="md-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-8 offset-0 offset-sm-0 offset-md-0 offset-lg-1 offset-xl-2 ">

                        <!-- title-01 -->
                        <div class="title-01 title-01__style-04">
                            <h6 class="title-01__subTitle" @if ($language == 'ar')
                                style="letter-spacing: 0"
                            @endif>{{ __('shard.about') }}</h6>
                            <h2 class="title-01__title">{{ __('shard.about-title') }}</h2>
                            <div>{{ __('shard.about-desc') }}</div>
                        </div><!-- End / title-01 -->

                    </div>
                </div>
            </div>
        </section>
        <!-- End / Section -->


        <!-- Section -->
        <section class="md-section consult-background">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-8 offset-0 offset-sm-0 offset-md-0 offset-lg-1 offset-xl-2 ">

                        <!-- title-01 -->
                        <div class="title-01 title-01__style-04">
                            <h6 class="title-01__subTitle" @if ($language == 'ar')
                            style="letter-spacing: 0"
                        @endif>{{ __('shard.about-Awards') }}</h6>
                            <h2 class="title-01__title">{{ __('shard.This Is What We Get') }}</h2>
                        </div><!-- End / title-01 -->

                    </div>
                </div>
                <div class="row">

                    <!-- start feature -->
                    <x-front-feature-component></x-front-feature-component>
                    <!-- end feature -->
                </div>
            </div>
        </section>
        <!-- End / Section -->


        <!--  start advisors -->
      <x-front-advisors-component></x-front-advisors-component>
        <!-- End / advisors -->

        <!-- Latest Projects-->

        <!-- Section -->
        @if (!empty($projects))

            <section class="md-section" style="padding-bottom:0;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-lg-8 offset-0 offset-sm-0 offset-md-2 offset-lg-2 ">

                            <!-- title-01 -->
                            <div class="title-01">
                                <h2 class="title-01__title">{{ __('shard.Latest Projects') }}</h2>
                            </div><!-- End / title-01 -->

                        </div>
                    </div>
                </div>
                <div class="consult-project">
                    <div class="row">
                        @foreach ($projects as $project)
                            @if ($language == 'ar')
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 "
                                    style="padding-left: 5px; padding-right: 5px;">
                                    <div class="post-02 post-02__style-02 js-post-effect">
                                        <div class="post-02__media"><a href="#"><img style="height: 300px"
                                                    src='{{ asset("storage/projects/$project->image") }}'
                                                    alt="" /></a></div>
                                        <div class="post-02__body" style="direction: rtl">
                                            <h2 class="post-02__title"><a href="#">{{ $project->title_ar }}</a>
                                            </h2>
                                            <div class="post-02__department">{{ $project->category->title_ar }}</div>
                                            <div class="post-02__content">
                                                <div class="post-02__description">
                                                    {{ $project->description_ar }}
                                                </div><a class="post-02__link"
                                                    href="{{ route('front.project-detail', ['project' => $project]) }}">{{ __('shard.View detail') }}</a>
                                            </div>
                                        </div>
                                    </div><!-- End / post-02 -->

                                </div>
                            @else
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 "
                                    style="padding-left: 5px; padding-right: 5px;">
                                    <div class="post-02 post-02__style-02 js-post-effect">
                                        <div class="post-02__media"><a href="#"><img style="height: 300px"
                                                    src='{{ asset("storage/projects/$project->image") }}'
                                                    alt="" /></a></div>
                                        <div class="post-02__body">
                                            <h2 class="post-02__title"><a href="#">{{ $project->title }}</a></h2>
                                            <div class="post-02__department">{{ $project->category->title }}</div>
                                            <div class="post-02__content">
                                                <div class="post-02__description">
                                                    {{ $project->description }}
                                                </div><a class="post-02__link"
                                                    href="{{ route('front.project-detail', ['project' => $project]) }}">{{ __('shard.View detail') }}</a>
                                            </div>
                                        </div>
                                    </div><!-- End / post-02 -->

                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>
            </section>
        @endif
        <!-- End / Section -->

        <!-- What’s Client Say ?-->

        <!-- What’s Client Say ?-->
        <x-front-certificate-component></x-front-certificate-component>
        <!--end What’s Client Say ?-->

        <!--start Our partner-->
        <x-front-partner-component></x-front-partner-component>
        <!--end Our partner-->

    </div>
    <!-- End / Content-->
@endsection
