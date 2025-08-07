@extends('masterview')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/wears.css') }}">
@endsection

@section('main')
    <div class="wears-main-container">
        <div class="wears-img-wrapper">
            <div class="img-container" style="--r: 1; --c:1"><img data-scroll="-100%" src="https://tympanus.net/Development/ScrollAnimationsGrid/4.516b9c03.jpg" alt="Simple Image"></div>
            <div class="img-container" style="--r: 1; --c:2"><img data-scroll="100%" src="https://tympanus.net/Development/ScrollAnimationsGrid/2.07ca36b5.jpg" alt="Simple Image"></div>
        </div>
        <div class="wear-heading">
            <h1>Women</h1>
            <h2>Elegance in every stitch.</h2>
        </div>
        <div class="wear-content-container">
            <h1>Trending <br> Wears</h1>
            <div class="card-flex">
                <div class="first-row">
                    <div class="card-box">
                        <a href="{{ url('/product') }}">
                            <div class="product-img"><img src="{{ asset('images/wears/product_1.jpg') }}" alt="Product Image"></div>
                            <div class="card-detail">
                                <p class="product-name">Men wears</p>
                                <p class="new_price">₹599</p>
                                <div class="offer-section">
                                    <span class="old_price">₹799</span>
                                    <span class="offer">52% offer</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card-box">
                        <a href="{{ url('/product') }}">
                            <div class="product-img"><img src="{{ asset('images/wears/product_3.jpg') }}" alt="Product Image"></div>
                            <div class="card-detail">
                                <p class="product-name">Men wears</p>
                                <p class="new_price">₹599</p>
                                <div class="offer-section">
                                    <span class="old_price">₹799</span>
                                    <span class="offer">52% offer</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="second-row">
                    <div class="card-box">
                        <a href="{{ url('/product') }}">
                            <div class="product-img"><img src="{{ asset('images/wears/product_6.jpg') }}" alt="Product Image"></div>
                            <div class="card-detail">
                                <p class="product-name">Men wears</p>
                                <p class="new_price">₹599</p>
                                <div class="offer-section">
                                    <span class="old_price">₹799</span>
                                    <span class="offer">52% offer</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card-box">
                        <a href="{{ url('/product') }}">
                            <div class="product-img"><img src="{{ asset('images/wears/product_2.jpg') }}" alt="Product Image"></div>
                            <div class="card-detail">
                                <p class="product-name">Men wears</p>
                                <p class="new_price">₹599</p>
                                <div class="offer-section">
                                    <span class="old_price">₹799</span>
                                    <span class="offer">52% offer</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card-box">
                        <a href="{{ url('/product') }}">
                            <div class="product-img"><img src="{{ asset('images/wears/product_5.jpg') }}" alt="Product Image"></div>
                            <div class="card-detail">
                                <p class="product-name">Men wears</p>
                                <p class="new_price">₹599</p>
                                <div class="offer-section">
                                    <span class="old_price">₹799</span>
                                    <span class="offer">52% offer</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="custome-box">
                <div class="custome-btn">
                    <a href="{{ url('/search') }}">Explore More</a>
                    <span class="btn-line"></span>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/wears.js') }}"></script>
@endsection