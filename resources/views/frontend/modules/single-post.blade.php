@extends('frontend.layouts.master')
<!-- content -->
@section('content')
    <!-- ======= Post Section ======= -->
    <section class="single-post-content">
        <div class="container">
          <div class="row">
            {{-- ###############Main Post##################### --}}
            <div class="col-md-9 post-content" data-aos="fade-up">
              
              <!-- ======= Single Post Content ======= -->
              <div class="single-post ">
                {{--$$$$$$$$$$ post feture image $$$$$$$$$$--}}
                <div class="post-photo">
                  <img class="img-fluid border" src="{{asset('/post/original/'.$post->photo)}}" alt="{{ $post->title }}">
                </div>

                {{--$$$$$$$$$$ post title $$$$$$$$$$--}}
                <h1 class="pt-3">{{ $post->title }}</h1>

                {{--$$$$$$$$$$ post meta $$$$$$$$$$--}}
                <div class="post-meta text-primary">
                  <span class="bg-success p-1"><i class="bi bi-person"></i>{{ $post->user?->name }}</span>
                  <span class="mx-1">&bullet;</span> 
                  <span class="date bg-warning p-1 border">{{ $post->category?->name }}</span> 
                  <span class="mx-1">&bullet;</span> 
                  <span>{{ $post->created_at->format('M d, Y') }}</span>
                  <span class="mx-1">&bullet;</span> 
                  <span class=" p-1"><i class="bi bi-eye"></i>{{ $post->views }}</span>
                  <hr>

                </div>

                {{--$$$$$$$$$$ post description $$$$$$$$$$--}}
                <p class="post-description mb-4 text-black-50 d-block">{!! htmlspecialchars_decode($post->description) !!}</p>
                {{-- <p> {!! $post->description !!}</p> --}}
                {{-- <p class="mb-4 text-black-50 d-block">{{ html_entity_decode(strip_tags($post->description)) }}</p> --}}
                
              </div>

              {{--$$$$$$$$$$ social share $$$$$$$$$$--}}
              <div class="row mt-4">
                  <div class="col-md-12 text-success">
                      <h6>পোস্টটি শেয়ার করুন</h6>
                      <!-- Social Sharing Icons -->
                      <div class="social-icons pl-5">
                          <a href="https://www.facebook.com/sharer/sharer.php?u=your-post-url" target="_blank" title="Share on Facebook"><i class="bi bi-facebook"></i></a>
                          <a href="https://twitter.com/intent/tweet?url=your-post-url&text=Your%20Post%20Title" target="_blank" title="Share on Twitter"><i class="bi bi-twitter"></i></a>
                          <a href="https://www.linkedin.com/shareArticle?url=your-post-url&title=Your%20Post%20Title" target="_blank" title="Share on LinkedIn"><i class="bi bi-linkedin"></i></a>
                          <!-- Add more social media share links as needed -->
                      </div>
                  </div>
              </div>

              {{--$$$$$$$$$$ Related Post $$$$$$$$$$$$--}}
              <div class="related-posts">
                <h4 class="p-5 text-danger">{{ $post->category?->name }} , সম্বন্ধীয় আরও পড়ুন... </h4>
                <div class="row">
                  @foreach ($relatedPosts as $relatedPost)
                  <div class="col-md-4">
                      <a href="{{ route('front.single', $relatedPost->slug) }}" class="card-link">
                          <div class="card p-1">
                              <img src="{{ asset('/post/thumbnail/'. $relatedPost->photo) }}" class="card-img-top" alt="{{ $relatedPost->title }}">
                              <div class="card-body">
                                  <h5 class="card-title text-success">{{ $relatedPost->title }}</h5>
                              </div>
                          </div>
                      </a>
                  </div>
                  @endforeach
              
                </div>
              </div>
              
              <!-- End Single Post Content -->

              <!-- ======= Author Info ======= -->
                <div class="container mt-5">
                    <div class="row p-3">
                      <div class="col-md-2">
                          
                      </div>

                      <div class="com-md-8">

                        <div class="row p-3">
                          <div class="col-md-4 ">
                            <!-- Author Picture (Square, 50%) -->
                            <img src="{{ asset('image/pujadatta.png') }}" alt="Puja Datta" class="rounded-circle" style="width: 100px; height: 100px;">
                            <p class="mt-3"><b>পূজা দত্ত </b></p>
                            <p><i>কলেজ টু ইউনিভার্সিটি, সহ প্রতিষ্ঠাতা</i></p>
                            <!-- Social Media Links -->
                            <div class="social-links text-center mt-3">
                              <a href="https://www.facebook.com/profile.php?id=100068856773973" target="_blank"><i class="bi bi-facebook"></i></a>
                              <a href="#" target="_blank"><i class="bi bi-twitter"></i></a>
                              <a href="#" target="_blank"><i class="bi bi-linkedin"></i></a>
                              <!-- Add more social media links as needed -->
                            </div>
  
                          </div>
                          <div class="col-md-6 border pt-3">
                              
                              <!-- Author Info -->
                              <p>
                                কলেজ থেকে উনিভার্সিটি জীবনের গুরুপপূর্ণ একটা সময়, এইসময় লেখাপড়ার পাশাপাশি শিক্ষার্থীদের ক্যারিয়ার নিয়ে চিন্তা করতে হয়।  এমন ক্যারিয়ার সচেতন শিক্ষার্থীদের সাহায্য করতেই আমাদের এই ব্লগটি।  এখানে, শিক্ষর্থীরা কলেজ ও উনিভার্সিটির বিভিন্ন এডাডেমিক বিষয়ের পাশাপাশি ক্যারিয়ার ও চাকরির প্রস্তুতির সহযোগি আর্টিকেল পড়তে পারবেন।
                              </p>
                  
                          </div>
                        </div>

                      </div>
                        
                      <div class="col-md-2">

                      </div>
                    </div>
                </div>
  
              <!-- ======= Comments ======= -->
              {{-- <div class="comments">
                <h5 class="comment-title py-4">2 Comments</h5>
                <div class="comment d-flex mb-4">
                  <div class="flex-shrink-0">
                    <div class="avatar avatar-sm rounded-circle">
                      <img class="avatar-img" src="assets/img/person-5.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="flex-grow-1 ms-2 ms-sm-3">
                    <div class="comment-meta d-flex align-items-baseline">
                      <h6 class="me-2">Jordan Singer</h6>
                      <span class="text-muted">2d</span>
                    </div>
                    <div class="comment-body">
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non minima ipsum at amet doloremque qui magni, placeat deserunt pariatur itaque laudantium impedit aliquam eligendi repellendus excepturi quibusdam nobis esse accusantium.
                    </div>
  
                    <div class="comment-replies bg-light p-3 mt-3 rounded">
                      <h6 class="comment-replies-title mb-4 text-muted text-uppercase">2 replies</h6>
  
                      <div class="reply d-flex mb-4">
                        <div class="flex-shrink-0">
                          <div class="avatar avatar-sm rounded-circle">
                            <img class="avatar-img" src="assets/img/person-4.jpg" alt="" class="img-fluid">
                          </div>
                        </div>
                        <div class="flex-grow-1 ms-2 ms-sm-3">
                          <div class="reply-meta d-flex align-items-baseline">
                            <h6 class="mb-0 me-2">Brandon Smith</h6>
                            <span class="text-muted">2d</span>
                          </div>
                          <div class="reply-body">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                          </div>
                        </div>
                      </div>
                      <div class="reply d-flex">
                        <div class="flex-shrink-0">
                          <div class="avatar avatar-sm rounded-circle">
                            <img class="avatar-img" src="assets/img/person-3.jpg" alt="" class="img-fluid">
                          </div>
                        </div>
                        <div class="flex-grow-1 ms-2 ms-sm-3">
                          <div class="reply-meta d-flex align-items-baseline">
                            <h6 class="mb-0 me-2">James Parsons</h6>
                            <span class="text-muted">1d</span>
                          </div>
                          <div class="reply-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolore sed eos sapiente, praesentium.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="comment d-flex">
                  <div class="flex-shrink-0">
                    <div class="avatar avatar-sm rounded-circle">
                      <img class="avatar-img" src="assets/img/person-2.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="flex-shrink-1 ms-2 ms-sm-3">
                    <div class="comment-meta d-flex">
                      <h6 class="me-2">Santiago Roberts</h6>
                      <span class="text-muted">4d</span>
                    </div>
                    <div class="comment-body">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto laborum in corrupti dolorum, quas delectus nobis porro accusantium molestias sequi.
                    </div>
                  </div>
                </div>
              </div> --}}
              <!-- End Comments -->
  
              <!-- ======= Comments Form ======= -->
              {{-- <div class="row justify-content-center mt-5">
  
                <div class="col-lg-12">
                  <h5 class="comment-title">Leave a Comment</h5>
                  <div class="row">
                    <div class="col-lg-6 mb-3">
                      <label for="comment-name">Name</label>
                      <input type="text" class="form-control" id="comment-name" placeholder="Enter your name">
                    </div>
                    <div class="col-lg-6 mb-3">
                      <label for="comment-email">Email</label>
                      <input type="text" class="form-control" id="comment-email" placeholder="Enter your email">
                    </div>
                    <div class="col-12 mb-3">
                      <label for="comment-message">Message</label>
  
                      <textarea class="form-control" id="comment-message" placeholder="Enter your name" cols="30" rows="10"></textarea>
                    </div>
                    <div class="col-12">
                      <input type="submit" class="btn btn-primary" value="Post comment">
                    </div>
                  </div>
                </div>
              </div> --}}
              <!-- End Comments Form -->
  
            </div>
            {{-- end of main post area --}}


            {{-- ########################################################Right Sidebar########################################################## --}}
            <div class="col-md-3">
              
                @include('frontend.inclueds.sidebar')
  
            </div>
          </div>
        </div>
    </section>
    <!-- End Post  Section -->
@endsection 