@extends('frontend.layouts.master')
<!-- content -->
@section('content')
    <!-- ======= Post Section ======= -->
    <section class="single-post-content">
        <div class="container">
            <div class="row">
                <h3 class="text-success">
                    <span class="bg-warning text-light p-3">{{ $category->name }}</span> বিষয়ে লেখাগুলি... </h3>
                    
                {{-- related category post --}}
                <div class="col-md-9">
                    <div class="row">                    
                        @if ($posts->count() > 0)
                        
                            @foreach ($posts as $post)
                                <div class="col-md-6 mb-4">
                                    <div class="card">
                                        <a href="{{ route('front.single', $post->slug) }}">
                                            <img src="{{ asset('/post/original/' . $post->photo) }}" class="card-img-top" alt="{{ $post->title }}">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $post->title }}</h5>
                                                <p class="card-text">{{ $post->excerpt }}</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        {{ $posts->links() }} <!-- Pagination links -->
                        @else
                            <p>দুঃখিত! বিষয়ে কোন লেখা পাওয়া যায়নি। </p>
                        @endif
                    </div>
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



