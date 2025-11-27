<!DOCTYPE html>
<html>

  <head>
      @include('frontend.layout.header')
      @yield('styles') <!-- Add this -->
  </head>
  <body>

    <div class="page-wrapper">
      <!-- Preloader -->
      <div class="preloader"></div>
      <!-- Nav bar -->
        @include('frontend.layout.navbar')
              
        @yield('content')

        @include('frontend.layout.footer')
        @yield('bottomscript')
      </div>
  </body>
</html>