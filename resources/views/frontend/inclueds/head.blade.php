<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  {{-- dynamic title --}}
  <title>
    @if (Route::currentRouteName() === 'front.index')
        {{ config('app.name') }} | বাংলা ব্লগিং ওয়েবসাইট | আইটি কোর্স, অনার্স, মাস্টার্স, ইংরেজি, ক্যারিয়ার, তথ্য ও প্রযুক্তি, স্বাস্থ্য ও সুরক্ষা
    @else
        {{ $post->title }} | {{ config('app.name') }}
    @endif

  </title>
  
  <meta name="description" content="বাংলা ব্লগিং ওয়েবসাইট। আইটি কোর্স, অনার্স, মাস্টার্স, চাকরি, ইংরেজি শিখি, ক্যারিয়ার, তথ্য ও প্রযুক্তি, স্বাস্থ্য ও সুরক্ষা সহ বিভিন্ন বিষয়ের উপর তথ্য ও দিকনির্দেশনা প্রদান করে।">
  {{-- separate meta description for home and single blog --}}
  {{-- <meta name="description" content="@if (Route::is('frontend/front.index'))
                                          {{ htmlspecialchars('বাংলা ব্লগিং ওয়েবসাইট। আইটি কোর্স, অনার্স, মাস্টার্স, চাকরি, ইংরেজি শিখি, ক্যারিয়ার, তথ্য ও প্রযুক্তি, স্বাস্থ্য ও সুরক্ষা সহ বিভিন্ন বিষয়ের উপর লেখা') }}
                                      @elseif (Route::is('single-post'))
                                          {{ $post->metaDescription }}
                                      @endif"> --}}

  <meta name="keywords" content="বাংলা ব্লগিং, আইটি কোর্স, অনার্স, মাস্টার্স, চাকরি, ইংরেজি, ক্যারিয়ার, তথ্য ও প্রযুক্তি, স্বাস্থ্য ও সুরক্ষা">
  <meta name="author" content="Rahul">
  <meta name="copyright" content="collagetouniversity">
  <meta name="robots" content="index, follow">
  <meta name="language" content="bn">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- icon cdn backup --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <!-- Favicons -->  
  <link href="{{ asset('image/favicon.png') }}" rel="icon">
  <link href="{{ asset('image/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  {{-- bangla font cdn --}}
  <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="{{ asset('frontend/assets/css/variables.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/css/main.css') }}" rel="stylesheet">
