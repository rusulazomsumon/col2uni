<!DOCTYPE html>
<html lang="en">

<head>
  @include('frontend.inclueds.head')
</head>

<body>
    <!-- blog header area -->
    @include('frontend.inclueds.header')
  <main id="main">
    <!-- @@@@@@@@@@@@@@@@@MMain Body Area@@@@@@@@@@@@@@@@@@@@ -->
    @yield('content')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('frontend.inclueds.footer')

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- js scripts -->
  @include('frontend.inclueds.scripts')
</body>

</html>