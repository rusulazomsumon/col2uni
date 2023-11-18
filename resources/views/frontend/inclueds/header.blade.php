  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top pt-3 pb-3">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between m-1 ">

      <a href="{{ route('front.index') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ asset('frontend/assets/img/logo.png') }}" alt=""> -->
        <h1>myBlog</h1>
      </a>

      {{-- nav menubar --}}
      <nav id="navbar" class="navbar">
        <ul class="nav nav-pills">
            @foreach ($categories as $category)
                <li class="nav-item p-1">
                    <a class="nav-link" href="{{ route('front.category', $category->slug) }}">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
      </nav>

      <div class="position-relative">
        {{-- <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
        <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="#" class="mx-2"><span class="bi-instagram"></span></a> --}}

        
        <i class="bi bi-list mobile-nav-toggle"></i>
        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->