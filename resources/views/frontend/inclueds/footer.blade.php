<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

<div class="footer-content">
  <div class="container">

    <div class="row g-5">

      {{-- Sote Info --}}
      <div class="col-lg-4">
        <a href="{{ route('front.index') }}">
          <img src="{{ asset('image/coll2unilogo.png') }}" alt="" width="300" height="100" >
        </a>
        {{-- <h3 class="footer-heading">About ZenBlog</h3> --}}
        <p>কলেজ টু ইউনিভার্সিটি একটি শিক্ষামূলক ব্লগ এখানে বিভিন্ন একাডেমিক বিষয়ে আর্টিকেল, চাকরী, চাকরির প্রস্তুতি, ও চাকরির খবর , ক্যারিয়ার ও স্কিল বিষয়ে বিভিন্ন লেখা দেওয়া হয়। 
        </p>
        <p><a href="#" class="footer-link-more">বিস্তারিত</a></p>
      </div>

      {{-- Blog Navigation --}}
      <div class="col-6 col-lg-2">
        <h3 class="footer-heading">ন্যাভিগেশন</h3>
        <ul class="footer-links list-unstyled">
          <li><a href="{{ route('front.about') }}"><i class="bi bi-chevron-right"></i> About Us</a></li>
          <li><a href="#"><i class="bi bi-chevron-right"></i> Join With Us </a></li>
          <li><a href="#"><i class="bi bi-chevron-right"></i> Disclemer</a></li>
          <li><a href="{{ route('front.privacy_policy') }}"><i class="bi bi-chevron-right"></i>Privecy Pollecy</a></li>
          <li><a href="{{ route('front.contact') }}"><i class="bi bi-chevron-right"></i> Contact</a></li>
        </ul>
      </div>

      {{-- Blog Category --}}
      <div class="col-6 col-lg-2">
        <h3 class="footer-heading"> ক্যাটেগরি </h3>
        <ul class="list-unstyled">
          @php
            $i=0;
          @endphp
          @foreach ($categories as $category)
            @if($i<12)
          <li>
            <a class="text-light" href="{{ route('front.category', $category->slug) }}">
              <i class="bi bi-folder" style="color: #998305"></i>
                {{ $category->name }} 
            </a>
          </li> 
            @endif
            @php
              $i++;
            @endphp
          @endforeach
        </ul>
      </div>
                

      {{-- recent post  --}}
      <div class="col-lg-4">
        <h3 class="footer-heading">সম্প্রতিক</h3>

        <ul class="footer-links footer-blog-entry list-unstyled">
          @foreach($recent_post as $post)
          <li>
            <a href="{{ route('front.single', $post->slug) }}" class="d-flex align-items-center">
              <img src="{{ asset('/post/thumbnail/' . $post->photo) }}" alt="{{ $post->title }}" class="img-fluid me-3">
              <div>
                <div class="post-meta d-block">
                  <span class="date">{{ $post->created_at->format('M d, Y') }}</span> 
                  <span class="mx-1">&bullet;</span> <span>{{ $post->category?->name }}</span>
                </div>
                <span>{{ $post->title }}</span>
              </div>
            </a>
          </li>
          @endforeach 
        </ul>

      </div>
      {{--  --}}

    </div>
  </div>
</div>

{{-- %%%%%%%%%%%%%%%%%%%%%Copyright Area%%%%%%%%%%%%%%%%%%% --}}
<div class="footer-legal">
  <div class="container">

    <div class="row justify-content-between">
      <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
        <div class="copyright">
          © {{date('Y')}} <strong><span> Collage2University</span></strong>. All Rights Reserved | 
        </div>

        <div class="credits">
          Developed by <a href="https://rusulazom.me/" target="_blank">Rusul Azom Sumon</a>
        </div>

      </div>

      <div class="col-md-6">
        <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
          <a href="https://www.facebook.com/collegetouniversity" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>

    </div>

  </div>
</div>

</footer>