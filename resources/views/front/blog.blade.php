@extends('front.layout')

@section('title', 'Blog')

@section('content')
    <!-- Content-->
    <div class="md-content">

        <x-breadcrumb-component title="{{ __('shard.blog') }}"></x-breadcrumb-component>
        <!-- Section -->
        <section class="md-section" @if ($language == 'ar') style="direction: rtl" @endif>
            <div class="container">

                <!-- layout-blog sidebar-left -->
                <div class="layout-blog sidebar-left">
                    <div class="layout-blog__content" id="blogsContent">
                        @include('front.partials.blogsAjax', ['blogs' => $blogs])
                    </div>
                    <aside class="layout-blog__sidebar">
                        <div>

                            <!-- widget-text__widget -->
                            <section class="widget-text__widget widget-text__style-02 widget">
                                <h3 class="widget-title">{{ __('shard.search') }}</h3>
                                <div class="widget-text__content">

                                    <!-- form-search -->
                                    <div class="form-search">
                                        <input class="form-control" type="text"
                                            placeholder="{{ __('shard.Type and Hit Enter') }}" id="searchBlogs" />
                                    </div><!-- End / form-search -->

                                </div>
                            </section>


                            @if (count($categories))
                                <section class="widget-text__widget widget-text__style-02 widget">
                                    <h3 class="widget-title">{{ __('shard.categories') }}</h3>
                                    <div class="widget-text__content">
                                        <ul>
                                            @foreach ($categories as $category)
                                                @if ($language == 'ar')
                                                    <li><a href="#">{{ $category->title_ar }}</a></li>
                                                @else
                                                    <li><a href="#">{{ $category->title }}</a></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </section>
                            @endif


                            <section class="widget-text__widget widget-text__style-04 widget">
                                <h3 class="widget-title">{{ __('shard.old post') }}</h3>
                                <div class="widget-text__content">

                                    <!--  -->
                                    @if (count($oldBlogs))
                                        @foreach ($oldBlogs as $blog)
                                            <div class="post-01__style-03">
                                                <div>
                                                    @if ($language == 'ar')
                                                        <style>
                                                            .widget-text__style-02 ul li:before,
                                                            .widget-text__style-03 ul li:before {
                                                                content: "\F104";
                                                            }
                                                        </style>
                                                        <h2 class="post-01__title"><a
                                                                href="{{ route('front.blog-detail', ['blog' => $blog]) }}">{{ $blog->title_ar }}</a>
                                                        </h2>
                                                        <div class="post-01__time">{{ $blog->created_at->format('d M y') }}
                                                        </div>
                                                        <div class="post-01__note"> {{ Auth::user()->name ?? 'الادمن' }}
                                                            بواسطة </div>
                                                    @else
                                                        <h2 class="post-01__title"><a
                                                                href="{{ route('front.blog-detail', ['blog' => $blog]) }}">{{ $blog->title }}</a>
                                                        </h2>
                                                        <div class="post-01__time">{{ $blog->created_at->format('d M y') }}
                                                        </div>
                                                        <div class="post-01__note">by {{ Auth::user()->name ?? 'admin' }}
                                                        </div>
                                                    @endif


                                                </div>
                                            </div><!-- End /  -->
                                        @endforeach
                                    @endif


                                </div>
                            </section>

                        </div><!-- End /  -->

                    </aside>
                </div>

            </div>
        </section>
        <!-- End / Section -->

    </div>
    <!-- End / Content-->
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let searchInput = document.getElementById("searchBlogs");

            if (searchInput) {
                searchInput.addEventListener("keyup", function() {
                    let query = this.value.trim();

                    fetch("{{ route('front.searchBlogs') }}?query=" + encodeURIComponent(query), {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        })
                        .then(res => {
                            if (!res.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return res.text();
                        })
                        .then(data => {
                            document.getElementById('blogsContent').innerHTML = data;
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            document.getElementById('blogsContent').innerHTML =
                                '<div class="alert alert-danger">حدث خطأ أثناء البحث. يرجى المحاولة مرة أخرى.</div>';
                        });

                });
            }
        });
    </script>
@endsection
