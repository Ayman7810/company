<!-- header -->
<header class="header ">
    <div class="container">
        <div class="header__logo"><a href="{{ route('front.index') }}"><img src="{{ asset('assets-front') }}/img/logo.png"
                    alt="" /></a></div>
        <div class="header__toogleGroup">
            <div class="header__chooseLanguage">
                @php

                    $language = request()->segment(1) == 'ar' ? 'العربية' : 'en';
                    $language1 = request()->segment(1) == 'ar' ? 'الانجليزية' : 'ar';
                    $Localization = request()->segment(1) == 'ar' ? 'en' : 'ar';
                @endphp
                <!-- dropdown -->
                <div class="dropdown" data-init="dropdown"><a class="dropdown__toggle"
                        href="javascript:void(0)">{{ strtoupper($language) }} <i class="fa fa-angle-down"
                            aria-hidden="true"></i></a>
                    <div class="dropdown__content" data-position="right">
                        <ul class="list-style-none">
                            <li><a
                                    href="{{ LaravelLocalization::getLocalizedURL($Localization) }}">{{ strtoupper($language1) }}</a>
                            </li>

                        </ul>
                    </div>
                </div><!-- End / dropdown -->

            </div>
            <div class="search-form">
                <div class="search-form__toggle"><i class="ti-search"></i></div>
                <div class="search-form__form">

                    <!-- form-search -->
                    <div class="form-search">
                        <form>
                            <input class="form-control" type="text" placeholder="{{ __('nav.search') }}" />
                        </form>
                    </div><!-- End / form-search -->

                </div>
            </div>
        </div>



        <!-- consult-nav -->
        <nav class="consult-nav">

            <!-- consult-menu -->
            <ul class="consult-menu">
                @php
                    $active = collect(request()->segments())->last();
                @endphp
                <li class="@if ($active == 'en' || $active == 'ar') current-menu-item @endif"><a
                        href="{{ route('front.index') }}">{{ __('nav.home') }}</a>
                </li>
                <li class=" @if ($active == 'about') current-menu-item @endif"><a
                        href="{{ route('front.about') }}">{{ __('nav.about-us') }}</a>
                </li>
                <li class=" @if ($active == 'service') current-menu-item @endif"><a
                        href="{{ route('front.service') }}"> {{ __('nav.services') }}</a>
                </li>

                <li class="  @if ($active == 'projects') current-menu-item @endif"><a
                        href="{{ route('front.projects') }}"> {{ __('nav.project') }}</a>
                </li>

                <li class=" @if ($active == 'blog') current-menu-item @endif"><a
                        href="{{ route('front.blog') }}"> {{ __('nav.blog') }}</a>
                </li>

                <li class=" @if ($active == 'contact') current-menu-item @endif"><a
                        href="{{ route('front.contact') }}" class=" @yield('contact-active') ">{{ __('nav.contact') }} </a>
                </li>
            </ul><!-- consult-menu -->

            <div class="navbar-toggle"><span></span><span></span><span></span></div>
        </nav><!-- End / consult-nav -->

    </div>
</header><!-- End / header -->
