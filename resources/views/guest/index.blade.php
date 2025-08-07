@extends('masterview')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('main')
  <div class="hero-section">
    <h1>Designed <em>for</em> Your <br> Dreams</h1>
    <div class="hero-section-content">
      <div class="hero-section-content-left">
        <p>“Elevate your style with premium fabrics crafted for the modern dreamer. Every thread tells your story.”</p>
        <div class="custome-btn">
          <a href="{{ url('/search') }}">Shop Now</a>
          <span class="btn-line"></span>
        </div>
      </div>
      <div class="hero-section-content-right">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><video src="{{ asset('video/hero_1.mp4') }}" muted autoplay loop></video></div>
            <div class="swiper-slide"><video src="{{ asset('video/hero_2.mp4') }}" muted autoplay loop></video></div>
            <div class="swiper-slide"><video src="{{ asset('video/hero_3.mp4') }}" muted autoplay loop></video></div>
            <div class="swiper-slide"><video src="{{ asset('video/hero_4.mp4') }}" muted autoplay loop></video></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="brand-container">
    <div class="brand-wrapper">
      <div class="brand-box" style="--i:1"><img src="{{ asset('brands/gucci.png') }}" alt="Gucci Image"></div>
      <div class="brand-box" style="--i:2"><img src="{{ asset('brands/hm.png') }}" alt="H&M Image"></div>
      <div class="brand-box" style="--i:3"><img src="{{ asset('brands/hugo_boss.png') }}" alt="Hugo Image"></div>
      <div class="brand-box" style="--i:4"><img src="{{ asset('brands/lv.png') }}" alt="Louis Vuitton Image"></div>
      <div class="brand-box" style="--i:5"><img src="{{ asset('brands/valentino.png') }}" alt="Valentino Image"></div>
      <div class="brand-box" style="--i:6"><img src="{{ asset('brands/zara.png') }}" alt="Zara Image"></div>
    </div>
  </div>
  <div class="vision-container">
    <h1>change</h1>
    <h1>The Vision</h1>
    <div class="vision-wrapper">
      <div class="vision-video">
        <video src="{{ asset('video/visionMain.mp4') }}" autoplay muted loop></video>
      </div>
      <div class="img-box">
        <img src="{{ asset('images/asset_images/vision_1.jpg') }}" alt="Advertisement">
        <img src="{{ asset('images/asset_images/vision_2.jpg') }}" alt="Advertisement">
        <img src="{{ asset('images/asset_images/vision_3.jpg') }}" alt="Advertisement">
      </div>
    </div>
  </div>
  <div class="wears-section">
    <div class="wears-inner-box">
      <div class="wears-heading">
        <span>Look Good</span>
        <span>Fell Good</span>
      </div>
      <div class="wears-heading-line"></div>
      <div class="wears-container">
        <ul>
          <li>
            <p>
              <a href="{{ url('/wears') }}">Men<sup><i class="fa-solid fa-arrow-right arrow_icon"></i><sup></a>
            </p>
            <p><hr></p>
          </li>
          <li>
            <p>
              <a href="{{ url('/wears') }}">Women<sup><i class="fa-solid fa-arrow-right arrow_icon"></i><sup></a>
            </p>
            <p><hr></p>
          </li>
          <li>
            <p>
              <a href="{{ url('/wears') }}">Kid's<sup><i class="fa-solid fa-arrow-right arrow_icon"></i><sup></a>
            </p>
            <p><hr></p>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="about-section">
    <div class="about-heading">
      <h1>About Us</h1>
    </div>
    <div class="about-main">
      <h3>At <span>NeoWear</span>, we believe that fashion is more than clothing</h3>
      <p>Founded with the vision to redefine modern streetwear, NeoWear blends minimalist aesthetics with bold identity. Our collections are inspired by urban culture, tech innovation, and timeless design, crafted to empower individuals who dare to stand out.</p>
      <p>Each piece is designed with premium fabrics, sharp details, and sustainable practices in mind. Whether you're dressing for the streets, the studio, or somewhere in between — NeoWear is your canvas for self-expression.</p>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="{{ asset('js/index.js') }}"></script>
@endsection