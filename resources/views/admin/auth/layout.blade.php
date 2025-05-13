<!doctype html>
<html lang="en">
@include('admin.auth.partials.head')
  <body class="light ">
    <ul class="container  nav">
      
      <x-language-swiching></x-language-swiching>
    </ul>
    <div class="wrapper vh-100">
      @yield('content')
    </div>
    @include('admin.auth.partials.scriptes')
  </body>
</html>
</body>
</html>