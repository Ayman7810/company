@extends('front.layout')

@section('title', 'Blog Detail')

@section('content')
    <!-- Content-->
    <div class="md-content">
        <div class="consult-postDetail">
            <div class="image-full"><img src="{{ asset('assets-front') }}/img/blogs/detail/1.jpg" alt=""></div>
            <div class="consult-postDetail"></div>
            <div class="container">
                <div class="consult-postDetail__main">

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
                            <div class="consult-postDetail__content">
                                <div class="row">

                                    @if ($language == 'ar')
                                        <div class="col-xl-11 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 "
                                            style="direction: rtl">
                                            <h1>{{ $blog->title_ar }}</h1>
                                            <ul class="consult-postDetail__meta">
                                                <li><i class="fa fa-user"
                                                        aria-hidden="true"></i>{{ Auth::user()->name ?? 'الادمن' }}</li>
                                                <li><i class="fa fa-tags"
                                                        aria-hidden="true"></i>{{ $blog->category->title_ar }} </li>
                                                <li><i class="fa fa-comments-o"
                                                        aria-hidden="true"></i>{{ __('shard.Comments') }}
                                                    ({{ count($blog->comments) }})</li>
                                                <li><i class="fa fa-calendar-o"
                                                        aria-hidden="true"></i>{{ $blog->created_at->format('Y M d') }}</li>
                                            </ul>
                                            <p class="text">{{ $blog->description_ar }}</p>
                                        </div>
                                    @else
                                        <div class="col-xl-11 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
                                            <h1>{{ $blog->title }}</h1>
                                            <ul class="consult-postDetail__meta">
                                                <li><i class="fa fa-user"
                                                        aria-hidden="true"></i>{{ Auth::user()->name ?? 'admin' }}</li>
                                                <li><i class="fa fa-tags"
                                                        aria-hidden="true"></i>{{ $blog->category->title }} </li>
                                                <li><i class="fa fa-comments-o"
                                                        aria-hidden="true"></i>{{ __('shard.Comment') }}
                                                    ({{ count($blog->comments) }})</li>
                                                <li><i class="fa fa-calendar-o"
                                                        aria-hidden="true"></i>{{ $blog->created_at->format('d M y') }}
                                                </li>
                                            </ul>
                                            <p class="text">{{ $blog->description }}</p>
                                        </div>
                                    @endif
                                </div>
                                <div class="image-full"><img src='{{ asset("storage/blogs/$blog->image") }}'
                                        alt="{{ $blog->title }}"></div>

                                {{-- <div class="row">
                                <div class="col-xl-11 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
                                    <p class="text">Maecenas lorem ex, euismod eget pulvinar non, facilisis ut leo. Quisque placerat purus in neque efficitur ornare. Nam at justo magna. Aliquam venenatis odio ante, non euismod augue porttitor eget. Maecenas nec viverra eros, eget euismod felis. Integer cursus libero sed lorem euismod, vel iaculis felis placerat. Pellentesque augue lacus, sodales et eros sed, molestie rhoncus ligula. Vivamus sed massa lorem. Suspendisse mollis lectus nec ex fermentum, in consectetur dolor egestas. Phasellus quis ipsum quis nisl ultricies sollicitudin id in dolor. Proin at consequat dui.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <div class="image-full"><img src="{{ asset('assets-front') }}/img/blogs/detail/4.jpg" alt=""></div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="image-full"><img src="{{ asset('assets-front') }}/img/blogs/detail/3.jpg" alt=""></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-11 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
                                    <p class="text">Sed ante nisl, fermentum et facilisis in, maximus sed ipsum. Cras hendrerit feugiat eros, ut fringilla nunc finibus sed. Quisque vitae dictum augue, vitae pretium sem. Proin tristique lobortis mauris nec mollis. Mauris id nibh sem. Vivamus ac ligula ac erat ultricies cursus semper ac enim. Aenean ac</p>
                                </div>
                            </div>
                            <blockquote>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                            </blockquote>
                            <div class="row">
                                <div class="col-xl-11 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
                                    <p class="text">Suspendisse ac elit vitae est lacinia interdum eu sit amet mauris. Phasellus aliquam nisi sit amet libero mattis ornare. In varius nunc vel suscipit rhoncus. Nunc hendrerit nisl nec orci eleifend accumsan. Mauris nulla mi, egestas ac maximus ac, ultricies non tellus. Vestibulum varius purus nunc. Cr</p>
                                </div>
                            </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-xl-6 offset-0 offset-sm-0 offset-md-0 offset-lg-2 offset-xl-3 ">
                            @if (!empty($blog->comments))
                                <h4 class="comment-heading"
                                    @if ($language == 'ar') style="text-align: end;" @endif>
                                    {{ __('shard.Comment') }} <span>({{ count($blog->comments) }})</span></h4>
                                <ol class="comment-list">

                                    @foreach ($blog->comments as $comment)
                                        <li class="comment">
                                            <div class="comment-content">
                                                <div class="comment-avatar"
                                                    @if ($language == 'ar') style="float:right;margin-left: 30px; " @endif>
                                                    <img alt="{{ $comment->name }}"
                                                        src="{{ asset('assets-front') }}/img/avatars/avatar-01.jpg"
                                                        class="avatar photo" style="border-radius: 50%;">
                                                </div><!-- .comment-avatar -->

                                                @if ($language == 'ar')
                                                    <div class="comment-body">
                                                        <div class="comment-metadata"
                                                            style="margin-right: 0px; text-align: end">
                                                            <a href="#">
                                                                <time
                                                                    datetime="2016-12-30T08:18:37+00:00">{{ $comment->created_at->format('d M Y') }}</time>
                                                            </a>
                                                        </div>
                                                        <p class="fn"style="text-align: end;margin-right: 20px">
                                                            {{ $comment->name }}</p>
                                                        <div class="comment-text"
                                                            style="text-align: end;margin-right: 20px">
                                                            <p>{{ $comment->text }}</p>
                                                        </div>
                                                        {{-- 
                                            <div class="comment-button">
                                                <a href="#" class="like">like</a>
                                                <a href="#" class="reply">reply</a>
                                            </div> --}}
                                                    </div>
                                                @else
                                                    <div class="comment-body">
                                                        <div class="comment-metadata">
                                                            <a href="#">
                                                                <time
                                                                    datetime="2016-12-30T08:18:37+00:00">{{ $comment->created_at->format('d M Y') }}</time>
                                                            </a>
                                                        </div>
                                                        <p class="fn">{{ $comment->name }}</p>
                                                        <div class="comment-text">
                                                            <p>{{ $comment->text }}</p>
                                                        </div>
                                                        {{-- 
                                            <div class="comment-button">
                                                <a href="#" class="like">like</a>
                                                <a href="#" class="reply">reply</a>
                                            </div> --}}
                                                    </div>
                                                @endif

                                            </div><!-- .comment-content -->

                                            {{-- <ol class="children">
                                        <li class="comment">
                                            <div class="comment-content">
                                                <div class="comment-avatar">
                                                    <img alt=""
                                                        src="{{ asset('assets-front') }}/img/avatars/avatar-02.jpg"
                                                        class="avatar photo">
                                                </div><!-- .comment-avatar -->

                                                <div class="comment-body">
                                                    <div class="comment-metadata">
                                                        <a href="#">
                                                            <time datetime="2016-12-30T08:18:37+00:00">May 04, 2017</time>
                                                        </a>
                                                    </div><!-- .comment-metadata -->

                                                    <span class="fn">John Doe</span>

                                                    <div class="comment-text">
                                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                                            consectetur, adipisci velit</p>
                                                    </div>

                                                    <div class="comment-button">
                                                        <a href="#" class="like">like</a>
                                                        <a href="#" class="reply">reply</a>
                                                    </div>
                                                </div><!-- .comment-body -->

                                            </div><!-- .comment-content -->
                                        </li>
                                    </ol> --}}
                                        </li>
                                    @endforeach

                                    {{-- <li class="comment">
                                    <div class="comment-content">
                                        <div class="comment-avatar">
                                            <img alt="" src="{{ asset('assets-front') }}/img/avatars/avatar-01.jpg"
                                                class="avatar photo">
                                        </div><!-- .comment-avatar -->

                                        <div class="comment-body">
                                            <div class="comment-metadata">
                                                <a href="#">
                                                    <time datetime="2016-12-30T08:18:37+00:00">May 04, 2017</time>
                                                </a>
                                            </div><!-- .comment-metadata -->

                                            <span class="fn">John Doe</span>

                                            <div class="comment-text">
                                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                                    consectetur, adipisc</p>
                                            </div>

                                            <div class="comment-button">
                                                <a href="#" class="like">like</a>
                                                <a href="#" class="reply">reply</a>
                                            </div>
                                        </div><!-- .comment-body -->
                                    </div><!-- .comment-content -->
                                </li> --}}
                                </ol>
                            @endif


                            <!-- form-01 -->
                            <div class="form-01 form-01__style-02"
                                @if ($language == 'ar') style="direction: rtl" @endif>
                                <h2 class="form-01__title">{{ __('shard.Add A Comment') }}</h2>

                                @if (session('success'))
                                    <span
                                        style="color: rgb(0, 255, 42); font-weight: bolder">{{ session('success') }}</span>
                                @endif
                                <form class="form-01__form" method="POST" action="{{ route('front.comment') }}">
                                    @csrf
                                    <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                    <div class="form__item form__item--02">
                                        <input type="text" name="name" placeholder="{{ __('shard.Your name') }}" />
                                        @error('name')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form__item form__item--02">
                                        <input type="email" name="email" placeholder="{{ __('shard.Your Email') }}" />
                                        @error('email')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form__item">
                                        <textarea rows="3" name="text" placeholder="{{ __('shard.Your comment') }}"></textarea>
                                        @error('text')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form__button"><button type="submit" class="btn btn-primary btn-w180"
                                            href="#">{{ __('shard.Post-comment') }}</button>
                                    </div>
                                </form>
                            </div><!-- End / form-01 -->

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--start Related Blogs -->
        <x-front-blogs-component title="{{ __('shard.related-blogs') }}"></x-front-blogs-component>
        <!--end Related Blogs -->



    </div>
    <!-- End / Content-->
@endsection
