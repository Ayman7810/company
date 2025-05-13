@extends('front.layout')

@section('title', 'Projects')
@section('projects-active', 'current-menu-item')

@section('content')
    <!-- Content-->
    {{-- @dump($project) --}}
    <div class="md-content">
        <div class="consult-projectDetail">

            <!-- carousel__element owl-carousel -->
            <div class="carousel__element owl-carousel consult-projectDetail__slider"
                data-options='{"items":1,"loop":true,"dots":false,"nav":false,"autoplay":true,"animateOut":"fadeOut","margin":0}'>
                <div><img src="{{ asset('assets-front') }}/img/projects/detail-1.jpg" alt=""></div>
                {{-- <div><img src='{{ asset("storage/projects/$project->image")  }}' alt=""></div> --}}
            </div><!-- End / carousel__element owl-carousel -->

            <div class="container">
                <div class="consult-projectDetail__main" style="padding-bottom: 0">

                    <!-- social-01 -->
                    {{-- <div class="social-01 social-01__style-02">
                        <nav class="social-01__navSocial"><a class="social-01__item" href="#"><i
                                    class="fa fa-facebook"></i></a><a class="social-01__item" href="#"><i
                                    class="fa fa-skype"></i></a><a class="social-01__item" href="#"><i
                                    class="fa fa-twitter"></i></a><a class="social-01__item" href="#"><i
                                    class="fa fa-instagram"></i></a>
                        </nav>
                    </div> --}}
                    <!-- End / social-01 -->

                    <div class="row">
                        <div class="col-lg-10 col-xl-8 offset-0 offset-sm-0 offset-md-0 offset-lg-1 offset-xl-2 ">
                            <div class="consult-projectDetail__content">

                                <div class="row">
                                    
                                        @if ($language == 'ar')
                                        <div class="col-xl-11 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 " style="direction: rtl">
                                            <h1>{{ $project->title_ar }}</h1>
                                            <p class="text">{{ $project->description_ar }}</p>
                                        </div>
                                        @else
                                        <div class="col-xl-11 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
                                            <h1>{{ $project->title }}</h1>
                                            <p class="text">{{ $project->description }}</p>
                                        </div>
                                        @endif
                                  

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="image-full"><img src='{{ asset("storage/projects/$project->image") }}'
                            style="max-height: 500px;" alt="{{ $project->title }}">
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Related Posts-->

    <!-- Section -->
    <section class="md-section">
        <div class="container">

            <!-- title-01 -->
            <div class="title-01">
                <h2 class="title-01__title">{{ __('shard.Other Projects') }}</h2>
            </div><!-- End / title-01 -->


            <!-- carousel__element owl-carousel -->
            <div class="carousel__element owl-carousel"
                data-options='{"loop":false,"dots":false,"nav":false,"margin":30,"responsive":{"0":{"items":1},"768":{"items":2},"992":{"items":3}}}'>

                @if (!empty($projects))
                    @foreach ($projects as $project)
                        @if ($language == 'ar')
                            <div class="post-02">
                                <div class="post-02__media"><a href="{{ route('front.project-detail', ['project' => $project]) }}"><img style="height: 300px"
                                            src='{{ asset("storage/projects/$project->image") }}'alt="" /></a></div>
                                <div class="post-02__body" style="direction: rtl">
                                    <h2 class="post-02__title"><a
                                            href="{{ route('front.project-detail', ['project' => $project]) }}">{{ $project->title_ar }}</a>
                                    </h2>
                                    <div class="post-02__department">{{ Str::words($project->description_ar, 20, '...') }}</div>
                                </div>
                            </div>
                        @else
                            <div class="post-02">
                                <div class="post-02__media"><a href="{{  route('front.project-detail', ['project' => $project])  }}"><img style="height: 300px"
                                            src='{{ asset("storage/projects/$project->image") }}'alt="" /></a></div>
                                <div class="post-02__body">
                                    <h2 class="post-02__title"><a
                                            href="{{ route('front.project-detail', ['project' => $project]) }}">{{ $project->title }}</a>
                                    </h2>
                                    <div class="post-02__department">{{ Str::words($project->description, 10, '...') }}</div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif




            </div><!-- End / carousel__element owl-carousel -->

        </div>
    </section>
    <!-- End / Section -->

    </div>
    <!-- End / Content-->
@endsection
