@if (!empty($advisors))
    <section class="md-section" style="padding-bottom:0;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 offset-0 offset-sm-0 offset-md-2 offset-lg-2 ">

                    <!-- title-01 -->
                    <div class="title-01">
                        <h2 class="title-01__title">{{ __('shard.Our Advisors') }}</h2>
                    </div><!-- End / title-01 -->

                </div>
            </div>
            <div class="consult-slide">

                <!-- carousel__element owl-carousel -->
                <div class="carousel__element owl-carousel"
                    data-options='{"loop":true,"dots":true,"nav":false,"margin":30,"responsive":{"0":{"items":1},"768":{"items":2},"992":{"items":3}}}'>


                    @foreach ($advisors as $advisor)
                        @if ($language == 'ar')
                            <div class="textbox textbox__style-02">
                                <div class="textbox__image"><a target="_blank" href="#"><img
                                            src='{{ asset("storage/advisors/$advisor->image") }}'
                                            alt="{{ $advisor->name_ar }}" /></a>
                                </div>
                                <div class="textbox__body">
                                    <h2 class="textbox__title"><a target="_blank" href="#">{{ $advisor->name_ar }}</a></h2>
                                    <div class="textbox__description">{{ $advisor->description_ar }}</div>

                                    <!-- social-01 -->
                                    <div class="social-01">
                                        <nav class="social-01__navSocial">
                                            @if (!empty($advisor->insta))
                                                <a target="_blank" class="social-01__item" href="{{ $advisor->insta }}"><i
                                                        class="fa fa-instagram"></i>
                                                </a>
                                            @endif
                                            @if (!empty($advisor->feac))
                                                <a target="_blank" class="social-01__item" href="{{ $advisor->feac }}"><i
                                                        class="fa fa-facebook"></i></a>
                                            @endif
                                            @if (!empty($advisor->twit))
                                                <a target="_blank" class="social-01__item" href="{{ $advisor->twit }}"><i
                                                        class="fa fa-twitter"></i>
                                                </a>
                                            @endif


                                        </nav>
                                    </div><!-- End / social-01 -->

                                </div>
                            </div>
                        @else
                        <div class="textbox textbox__style-02">
                            <div class="textbox__image"><a target="_blank" href="#"><img
                                        src='{{ asset("storage/advisors/$advisor->image") }}'
                                        alt="{{ $advisor->name }}" /></a>
                            </div>
                            <div class="textbox__body">
                                <h2 class="textbox__title"><a target="_blank" href="#" >{{ $advisor->name}}</a></h2>
                                <div class="textbox__description">{{ $advisor->description }}</div>

                                <!-- social-01 -->
                                <div class="social-01">
                                    <nav class="social-01__navSocial">
                                        @if (!empty($advisor->insta))
                                            <a target="_blank" class="social-01__item" href="{{ $advisor->insta }}" target="_blank"><i
                                                    class="fa fa-instagram"  ></i>
                                            </a>
                                        @endif
                                        @if (!empty($advisor->feac))
                                            <a target="_blank" class="social-01__item" href="{{ $advisor->feac }}"><i
                                                    class="fa fa-facebook"></i></a>
                                        @endif
                                        @if (!empty($advisor->twit))
                                            <a target="_blank" class="social-01__item" href="{{ $advisor->twit }}"><i
                                                    class="fa fa-twitter"></i>
                                            </a>
                                        @endif


                                    </nav>
                                </div><!-- End / social-01 -->

                            </div>
                        </div>
                        @endif
                    @endforeach



                </div><!-- End / carousel__element owl-carousel -->

            </div>
        </div>
    </section>
@endif
