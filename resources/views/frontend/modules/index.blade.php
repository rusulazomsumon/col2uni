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
                            <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('{{ asset('/post/thumbnail/'.$post->photo) }}'); height: 200px; background-size: cover;">
                                <div class="img-bg-inner">
                                    <h6 class="text-light" style="margin-bottom: 0; padding: 1px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);"><b>{{ $post->title }}</b></h6>
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

            {{--||||||||||||||| Post Feture Area 1 ||||||||||||||||||--}}
            <div class="row">
              {{-- post grid feture post --}}
              <div class="col-sm-8">
                {{-- only 1st post info for feture --}}
                <h5 class="bg-success text-light p-3">সর্বশেষ সংযোজিত</h5>
                @if($posts->isNotEmpty())
                <?php $firstPost = $posts->first(); ?>

                <div class="post-entry-1 lg">
                  {{-- image --}}
                  <a href="{{ route('front.single', $firstPost->slug) }}"><img src="{{asset('/post/original/'.$firstPost->photo)}}" alt="{{ $firstPost->title }}" class="img-fluid"></a>
                  {{-- post meta --}}
                  <div class="post-meta">
                    <span class="date">{{ $firstPost->category?->name }}</span> 
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
                        <a href="{{ route('front.single', $post->slug) }}"><img src="{{ asset('/post/thumbnail/' . $post->photo) }}" alt="{{ $post->title }}" class="img-fluid"></a>
                        <div class="post-meta"><span class="date"><a href="#">{{ $post->category?->name }}</a></span> <span class="mx-1">&bullet;</span> <span>{{ $post->created_at->format('M d, Y') }}</span></div>
                        <h2><a href="{{ route('front.single', $post->slug) }}">{{ $post->title }}</a></h2>
                      </div>  
                      @endif   
                      @php
                        $key++;
                      @endphp
                    @endforeach
                      
                  </div>
              </div>
            </div>

            {{--||||||||||||||| Post Feture Area 2 (Advertisement) |||||||||||||||--}}
            <div class="row border">
              <div class="col-lg-12 p-3">
                <h2>Advertisement</h2>
                <img src="https://picsum.photos/720/90?random" class="img-fluid" alt="Advertisement Image">
              </div>
            </div>

            {{--||||||||||||||| Post Feture Area 3 (Category Wise Post)  |||||||||||||||--}}
            <div class="row g-5 mt-3">

              {{-- @@@col1 cat order by 1@@@ --}}
              <div class="col-lg-4 border-start custom-border pt-1">
                {{-- if for only show 2 post per section , beacuse backend post controller sending 20 post using paginate --}}
                @php
                  $counter = 0;
                @endphp
                @foreach ($posts as $post)
                    @if ($post->category->order_by == 1)
                      {{-- for showing related post column title --}}
                        @if ($loop->first)
                            <h6 class="p-1 bg-info"><a href="#">{{ $post->category->name }}</a></h6>
                        @endif
                        <hr>
                        {{-- only 2 post show --}}
                        @if ($counter < 2) 
                        <div class="post-entry-1">
                            <a href="{{ route('front.single', $post->slug) }}">
                                <img src="{{ asset('/post/thumbnail/' . $post->photo) }}" alt="{{ $post->title }}" class="img-fluid">
                            </a>
                            <div class="post-meta">
                                <span class="date">
                                    <a href="#">{{ $post->category->name }}</a>
                                </span>
                                <span class="mx-1">&bullet;</span>
                                <span>{{ $post->created_at->format('M d, Y') }}</span>
                            </div>
                            <h2><a href="{{ route('front.single', $post->slug) }}">{{ $post->title }}</a></h2>
                        </div>
                        @php
                            $counter++;
                        @endphp
                        @endif
                    @endif
                @endforeach
              </div>
              
              {{-- @@@col2 cat order by 2@@@ --}}
              <div class="col-lg-4 border-start custom-border pt-1">
                {{-- if for only show 2 post per section , beacuse backend post controller sending 20 post using paginate --}}
                @php
                  $counter = 0;
                @endphp
                @foreach ($posts as $post)
                    @if ($post->category->order_by == 2)
                      {{-- for showing related post column title --}}
                        @if ($loop->first)
                            <h6 class="p-1 bg-info"><a href="#">{{ $post->category->name }}</a></h6>
                        @endif
                        <hr>
                        {{-- only 2 post show --}}
                        @if ($counter < 2) 
                        <div class="post-entry-1">
                            <a href="{{ route('front.single', $post->slug) }}">
                                <img src="{{ asset('/post/thumbnail/' . $post->photo) }}" alt="{{ $post->title }}" class="img-fluid">
                            </a>
                            <div class="post-meta">
                                <span class="date">
                                    <a href="#">{{ $post->category->name }}</a>
                                </span>
                                <span class="mx-1">&bullet;</span>
                                <span>{{ $post->created_at->format('M d, Y') }}</span>
                            </div>
                            <h2><a href="{{ route('front.single', $post->slug) }}">{{ $post->title }}</a></h2>
                        </div>
                        @php
                            $counter++;
                        @endphp
                        @endif
                    @endif
                @endforeach
              </div>

              {{-- @@@col3 cat order by 3@@@ --}}
              <div class="col-lg-4 border-start custom-border pt-1">
                {{-- if for only show 2 post per section , beacuse backend post controller sending 20 post using paginate --}}
                @php
                  $counter = 0;
                @endphp
                @foreach ($posts as $post)
                    @if ($post->category->order_by == 3)
                      {{-- for showing related post column title --}}
                        @if ($loop->first)
                            <h6 class="p-1 bg-info"><a href="#">{{ $post->category->name }}</a></h6>
                        @endif
                        <hr>
                        {{-- only 2 post show --}}
                        @if ($counter < 2) 
                        <div class="post-entry-1">
                            <a href="{{ route('front.single', $post->slug) }}">
                                <img src="{{ asset('/post/thumbnail/' . $post->photo) }}" alt="{{ $post->title }}" class="img-fluid">
                            </a>
                            <div class="post-meta">
                                <span class="date">
                                    <a href="#">{{ $post->category->name }}</a>
                                </span>
                                <span class="mx-1">&bullet;</span>
                                <span>{{ $post->created_at->format('M d, Y') }}</span>
                            </div>
                            <h2><a href="{{ route('front.single', $post->slug) }}">{{ $post->title }}</a></h2>
                        </div>
                        @php
                            $counter++;
                        @endphp
                        @endif
                    @endif
                @endforeach
              </div>

            </div>
            {{--||||||||||||||| Post Feture Area 4 (Advertisement) |||||||||||||||--}}
            <div class="row border">
              <div class="col-lg-12 p-3">
                <h2>Advertisement</h2>
                <img src="https://picsum.photos/720/90?random" class="img-fluid" alt="Advertisement Image">
              </div>
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