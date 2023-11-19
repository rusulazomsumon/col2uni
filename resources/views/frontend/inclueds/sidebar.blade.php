              <div class="aside-block">

                {{-- google news  --}}
                <div class="trending">
                  <h6 class="bg-warning text-light p-3"><b>Google News</b></h6>
                  <div class="google-news-banner">
                    <a href="#">
                      <img src="https://picsum.photos/400/200?random" alt="Google News" class="img-fluid">
                    </a>
                  </div>
                </div>
            
                {{-- populer post --}}
                <div class="trending">
                  <h6 class="bg-success text-light p-3"><b>পাঠক প্রিয়</b></h6>
                  <ul class="trending-post">
                    @foreach($recent_post as $post)
                    <li>
                      <a href="{{ route('front.single', $post->slug) }}">
                        <span class="number">1</span>
                        <h6>{{ $post->title }}</h6>
                        <span class="author">{{ $post->created_at->format('M d, Y') }}</span>
                      </a>
                    </li>
                    @endforeach                
                  </ul>
                </div>

                 
                {{-- |Facebook Page --}}
                <div class="trending mt-3">
                  <h6 class="bg-danger text-light p-3"><b>ফেসবুকে আমারা</b></h6>
                  {{-- page links --}}
                  <div class="facebook-preview">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcollegetouniversity&tabs=timeline&width=340&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="encrypted-media"></iframe>
                  </div>
                </div>

                {{-- categories --}}
                <div class="trending mt-3">
                  <h6 class="bg-dark text-light p-3"><b>বিভাগ গুলি</b></h6>
                  <ul class="list-unstyled">
                    @foreach ($categories as $category)
                    <li>
                      <a href="{{ route('front.category', $category->slug) }}">
                        <i class="bi bi-folder" style="color: #998305"></i>
                          {{ $category->name }} 
                      </a>
                    </li> 
                    @endforeach
                  </ul>
                </div>

                {{-- AD1  --}}
                <div class="trending">
                  <div class="google-news-banner">
                    <a href="#">
                      <img src="https://qph.cf2.quoracdn.net/main-qimg-7f8846ab9f3441b07c01d53c96df617d-pjlq" alt="Google News" class="img-fluid">
                    </a>
                  </div>
                </div>

                {{-- tags cloud --}}
                <div class="aside-block mt-5">
                  <h3 class="aside-title">ট্যাগ সমূহ</h3>
                  <ul class="aside-tags list-unstyled">
                    <li><a href="#" class="bg-primary text-white">কলেজ</a></li>
                    <li><a href="#" class="bg-success text-white">কোর্স</a></li>
                    <li><a href="#" class="bg-info text-white">বিসিএস</a></li>
                    <li><a href="#" class="bg-warning text-white">শিখা</a></li>
                    <li><a href="#" class="bg-danger text-white">বিজ্ঞান প্রযুক্তি</a></li>
                    <li><a href="#" class="bg-secondary text-white">লেখাপড়া</a></li>
                    <li><a href="#" class="bg-dark text-white">ক্যাম্পাস</a></li>
                    <li><a href="#" class="bg-light text-dark">স্কিল</a></li>
                    <li><a href="#" class="bg-danger text-white">টিপস ও ট্রিক্স</a></li>
                    <li><a href="#" class="bg-info text-white">রূপচর্চা</a></li>
                  </ul>
                </div>

                 {{-- AD2  --}}
                 <div class="trending">
                  <div class="google-news-banner">
                    <a href="#">
                      <img src="https://media.licdn.com/dms/image/C5612AQEoBVnpxa879w/article-cover_image-shrink_600_2000/0/1520103821627?e=2147483647&v=beta&t=6O68ORV9LCg5J4xkA7tPZV2nIdxdj-x7RbKwXBnKVY4" alt="Google News" class="img-fluid">
                    </a>
                  </div>
                </div>

                <!-- ######LoginForm####### -->
                <div class="login pt-5">
                  <form>
                      <div class="form-group">
                          <label for="username">Username</label>
                          <input type="text" class="form-control" id="username" placeholder="Enter your username">
                      </div>
                      <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" id="password" placeholder="Enter your password">
                      </div>
                      <button type="submit" class="btn btn-primary">Login</button>
                  </form>
                </div>
                {{--  --}}
              </div>