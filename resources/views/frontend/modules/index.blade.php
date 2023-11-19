@extends('frontend.layouts.master')

<!-- content -->
@section('content')
    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper" style="max-height: 200px;">
                {{-- slider content --}}
                {{-- post controller ২০ টা পোস্ট পাঠায়, তাই আমারা শুধু সর্বশেষ ৫ টা শো করতে if condition দিয়েছি --}}
                @php
                  $counter = 0;
                @endphp

                @foreach ($posts as $post)
                    @if ($counter < 5)
                        <div class="swiper-slide">
                            <a href="{{ route('front.single', $post->slug) }}" class="img-bg d-flex align-items-end" style="background-image: url('{{ asset('/post/thumbnail/'.$post->photo) }}'); height: 200px; background-size: cover;">
                                <div class="img-bg-inner">
                                  <h6 class="text-light" style="margin-bottom: 0; padding: 5px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); background-color: rgba(0, 128, 0, 0.5); border-radius: 5px;"><b>{{ $post->title }}</b></h6>
                                </div>
                            </a>
                        </div>

                        @php
                            $counter++;
                        @endphp
                    @endif
                @endforeach
                {{--end slider content --}}
              </div>
              <div class="custom-swiper-button-next">
                <span class="bi-chevron-right"></span>
              </div>
              <div class="custom-swiper-button-prev">
                <span class="bi-chevron-left"></span>
              </div>

              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero Slider Section -->

    <!-- ======= Blog Main Body Section ======= -->
    <section id="posts" class="posts">
      <div class="container" data-aos="fade-up">
        {{-- Post area + Sidebar --}}
        <div class="row g-5">
          {{--############## %%%%%%Post Grid Area%%%%%% ##############--}}
          <div class="col-lg-8">

            {{--||||||||||||||| Post Feture Area =>1 ||||||||||||||||||--}}
            <div class="row">
              {{-- post grid feture post --}}
              <div class="col-sm-8">
                <h5 class="bg-success text-light p-3">নির্বাচিত</h5>

                @if($posts->isNotEmpty())
                <?php $firstPost = $posts->first(); ?>

                <div class="post-entry-1 lg">
                  {{-- image --}}
                  <a href="{{ route('front.single', ['slug' => $post->slug]) }}"><img src="{{asset('/post/original/'.$firstPost->photo)}}" alt="{{ $firstPost->title }}" class="img-fluid"></a>
                  {{-- post meta --}}
                  <div class="post-meta">
                    <span class="date bg-warning p-1 border">{{ $firstPost->category?->name }}</span> 
                    <span class="mx-1">&bullet;</span> 
                    <span>{{ $firstPost->created_at->format('M d, Y') }}</span>
                  </div>
                  {{-- title --}}
                  <h2><a href="{{ route('front.single', $firstPost->slug) }}">{{ $firstPost->title }}</a></h2>
                  {{-- description --}}
                  <p class="mb-4 d-block">{{ html_entity_decode(strip_tags(Str::limit($firstPost->description, 300))) }} <a href="{{ route('front.single', $firstPost->slug) }}">বিস্তারিত...</a></p>

                  {{-- <div class="d-flex align-items-center author">
                    <div class="photo"><img src="{{ asset('frontend/assets/img/person-1.jpg') }}" alt="" class="img-fluid"></div>
                    <div class="name">
                      <h3 class="m-0 p-0"><a href="#"><b>{{ $firstPost->user?->name }}</b></a></h3>
                    </div>
                  </div> --}}
                </div>

                @endif

              </div>
              {{-- post grid small post --}}
              <div class="col-sm-4">
                
                  <div class="col-lg-12 ">
                    @php
                      $key = 0;
                    @endphp
                    @foreach ($posts as $post)
                    {{-- skip 1st post, bacause 1st post will show as feture --}}
                      @if ($key > 0 && $key < 3)
                      <hr>
                      <div class="post-entry-1"> 
                        <a href="{{ route('front.single', $post->slug) }}">
                          <img src="{{ asset('/post/thumbnail/' . $post->photo) }}" alt="{{ $post->title }}" class="img-fluid">
                        </a>
                        <div class="post-meta">
                          <span class="date bg-warning p-1 border">
                            <a href="#">{{ $post->category?->name }}</a>
                          </span> 
                          <span class="mx-1">&bullet;</span> <span>{{ $post->created_at->format('M d, Y') }}</span>
                        </div>
                          <h2 style="font-size: 16px !important; ">
                            <a href="{{ route('front.single', $post->slug) }}">{{ $post->title }}</a>
                          </h2>
                      </div>  
                      @endif   
                      @php
                        $key++;
                      @endphp
                    @endforeach
                      
                  </div>
              </div>
            </div>

            {{--||||||||||||||| Post Feture Area =>2 (Advertisement) |||||||||||||||--}}
            <div class="row border">
              <div class="col-lg-12 p-3">
                <h2>Advertisement</h2>
                <img src="https://picsum.photos/720/90?random" class="img-fluid" alt="Advertisement Image">
              </div>
            </div>

            {{--||||||||||||||| Post Feture Area =>3 (Category Wise Post - columb)  |||||||||||||||--}}
            
            <div class="row border">
                <div class="col-lg-12 p-3">
                    {{-- @@@ hr post row 1 @@@ --}}
                    <div class="row">
                      <h5 class="bg-success text-light p-3">শিক্ষাঙ্গন</h5>
                      <p style="color: #555; font-style: italic;">স্কুল, কলেজ, বিশ্ববিদ্যালয় ও বিসিএসের একাডেমিক বিষয়ে জানতে এই লেখাগুলি পড়ুন</p>
                      @php
                        $counter = 0;
                      @endphp
                        @foreach ($posts as $post)
                        @if (in_array($post->category->order_by, [2, 3, 8,18]))
                          {{-- only 5 post show --}}
                          @if ($counter < 5) 
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <img src="{{ asset('/post/thumbnail/' . $post->photo) }}" alt="{{ $post->title }}" class="card-img-top img-fluid">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="{{ route('front.single', $post->slug) }}">{{ $post->title }}</a></h5>
                                        <p class="card-text">{{ $post->created_at->format('M d, Y') }}</p>
                                    </div>
                                </div>
                            </div>
                            @php
                        $counter++;
                        @endphp
                      @endif
                    @endif
                        @endforeach
                    </div>
                </div>
            </div>

            {{--||||||||||||||| Post Feture Area =>4 (Advertisement) |||||||||||||||--}}
            <div class="row">
              <div class="col-lg-12 p-3">
                <h2>Advertisement</h2>
                <img src="https://picsum.photos/720/90?random" class="img-fluid" alt="Advertisement Image">
              </div>
            </div>

            {{--||||||||||||||| Post Feture Area =>5 (Category Wise Post - horizontl) |||||||||||||||--}}

              {{-- @@@ hr post row 1 @@@ --}}
              {{-- Assuming $posts is the array of posts --}}
              <div class="row mt-5">
                <h5 class="bg-success text-light p-3">ক্যারিয়ার</h5>
                <p style="color: #555; font-style: italic;">চাকরী, চাকরির প্রস্তুতি, ও চাকরির খবর জানতে এই লেখাগুলি পড়ুন</p>
                @php
                  $counter = 0;
                @endphp
                @foreach ($posts as $post)
                    @if (in_array($post->category->order_by, [4, 5, 6]))
                      {{-- only 5 post show --}}
                      @if ($counter < 5) 
                        <div class="col-md-12 mb-4 p-1">
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('/post/thumbnail/' . $post->photo) }}" alt="{{ $post->title }}" class="img-fluid">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="{{ route('front.single', $post->slug) }}">{{ $post->title }}</a></h5>
                                            <p class="card-text">{{ $post->created_at->format('M d, Y') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php
                        $counter++;
                        @endphp
                      @endif
                    @endif
                  @endforeach

              </div>    

          </div>
          {{-- end of post feture area --}}


          <!--@@@@@@@@@@@@@ Right Sidebar Section @@@@@@@@@@@@@-->
          <div class="col-lg-4">
            @include('frontend.inclueds.sidebar')
          </div>
          
        </div> 
        <!-- End .row -->
      </div>
    </section> 
@endsection