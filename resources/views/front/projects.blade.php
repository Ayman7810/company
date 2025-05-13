@extends('front.layout')

@section('title', 'Projects')

@section('content')
    <!-- Content-->
    <div class="md-content">

        <x-breadcrumb-component title="{{ __('nav.project') }}"></x-breadcrumb-component>

        <!-- Section -->
        <section class="md-section">
            <div class="container">
                <div class="grid-css grid-css--masonry" data-col-lg="3" data-col-md="2" data-col-sm="2" data-col-xs="1"
                    data-gap="30">
                   
                    <div class="filter" style="@if($language == 'ar') direction: rtl @endif">
                        <ul class="filter__list">
                            @if (count($categories) > 0 && count($projects))
                                <li><a href="#" data-filter="*">{{ __('shard.all') }}</a></li>
                                @foreach ($categories as $category)
                                    @if ($language == 'ar')
                                        <li><a href="#"
                                                data-filter=".category-{{ $category->id }}">{{ $category->title_ar }}
                                            </a>
                                        </li>
                                    @else
                                        <li><a href="#"
                                                data-filter=".category-{{ $category->id }}">{{ $category->title }}</a></li>
                                    @endif
                                @endforeach
                        </ul>
                    </div>

                    <div class="grid__inner">
                        <div class="grid-sizer"></div>

                        @foreach ($projects as $project)
                            @if (request('category') == null || request('category') == $project->category->id)
                                <div class="grid-item category-{{ $project->category->id }}">
                                    <div class="grid-item__inner">
                                        <div class="grid-item__content-wrapper">
                                            <!-- post-02 -->
                                            <div class="post-02">
                                                <div class="post-02__media">
                                                    <a href="{{ route('front.project-detail', ['project'=>$project]) }}">
                                                        <img src='{{ asset("storage/projects/$project->image") }}'
                                                            alt=""  style="height: 300px"/>
                                                    </a>
                                                </div>
                                                @if ($language == 'ar')
                                                <div class="post-02__body" style="direction: rtl">
                                                    <h2 class="post-02__title">
                                                        <a
                                                            href="{{ route('front.project-detail', ['project' => $project]) }}">{{ $project->title_ar }}</a>
                                                    </h2>
                                                    <div class="post-02__department">{{ $project->category->title_ar }}</div>
                                                </div>  
                                                @else
                                                    
                                                <div class="post-02__body">
                                                    <h2 class="post-02__title">
                                                        <a
                                                            href="{{ route('front.project-detail',  ['project' => $project]) }}">{{ $project->title }}</a>
                                                    </h2>
                                                    <div class="post-02__department">{{ $project->category->title }}</div>
                                                </div>
                                                @endif
                                            </div>
                                            <!-- End / post-02 -->

                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </section>
        <!-- End / Section -->

    </div>
    <!-- End / Content-->
@endsection
