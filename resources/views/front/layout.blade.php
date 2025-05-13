<!DOCTYPE html>
<html>
@include('front.partials.heed')

<body>

    <div class="page-wrap">

        @include('front.partials.nav')

        
        @yield('content')

        
        @include('front.partials.footer')
    </div>


    @include('front.partials.scriptes')
</body>

</html>
