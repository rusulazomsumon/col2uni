@extends('frontend.layouts.master')

@section('content')
    <div class="container">
        <div class="row pt-5 pb-3">
            <div class="col-md-12 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body p-3 border">
                    
                        <div class="about-us-section container mt-5">
                            <div class="row">
                                <h2 class="mb-5">আমাদের সম্পর্কে</h2>
                                <!-- Left Column -->
                                <div class="col-md-6">
                                    <!-- Round Picture Section -->
                                    <div class="text-center mb-3">
                                        <img src="{{ asset('image/rahulpic.png') }}" alt="About Us" class="rounded-circle" style="width: 150px; height: 150px;">
                                    </div>
                                    
                                    <!-- Title and Description -->
                                    <h5 class="text-center">রাহুল চৌধুরী</h5>
                                    <p class="text-center">
                                        কলেজ টু ইউনিভার্সিটি, প্রতিষ্ঠাতা 
                                    </p>
                                </div>
                        
                                <!-- Right Column -->
                                <div class="col-md-6">
                                    <!-- Quote Section -->
                                    <div class="quote-section">
                                        <blockquote class="blockquote">
                                            <p class="mb-0">" আমাদের উদ্দ্যেশ্য হলো,বাংলাদেশের সকল শিক্ষার্থীদের প্রয়োজনীয় শিক্ষা এবং ক্যারিয়ার মূলক তথ্য ও অনুপ্রেরণা দিয়ে সহায়তা করা।যার মাধ্যমে দেশের প্রতিটি শিক্ষার্থী সমৃদ্ধ হতে পারে এবং স্কিল ডেভেলপ করতে পারে"</p>
                                            <footer class="blockquote-footer mt-3">Founder, CollageToUniversity</footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection