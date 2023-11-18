              <div class="aside-block">
                {{-- |Facebook Page --}}
                <div class="trending">
                  <h6 class="bg-warning text-light p-3"><b>ফেসবুকে আমারা</b></h6>
                  {{-- page links --}}
                  <div class="facebook-preview">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=YOUR_FACEBOOK_PAGE_LINK&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=YOUR_APP_ID" width="340" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="encrypted-media"></iframe>
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