@extends('masterview')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/wishlist.css') }}">
@endsection

@section('main')
    <div class="wishlist-main-container">
        <h2 class="wishlist-heading">My Wishlist</h2>

        <div class="wishlist-card">
            <div class="wishlist-left">
                <a href="{{ url('/product') }}"><img src="{{ asset('images/wears/product_1.jpg') }}" alt="Product Image" /></a>
                <div class="product-details">
                    <a href="{{ url('/product') }}"><strong>Women Wear</strong></a>
                    <p>₹499.99</p>
                </div>
            </div>

            <div class="wishlist-actions">
                <a href="{{ url('/cart') }}" class="add-cart-btn">Add to Cart</a>
                <button class="remove-btn">Remove</button>
            </div>
        </div>

        <div class="wishlist-card">
            <div class="wishlist-left">
                <a href="{{ url('/product') }}"><img src="{{ asset('images/wears/product_5.jpg') }}" alt="Product Image" /></a>
                <div class="product-details">
                    <a href="{{ url('/product') }}"><strong>Men Wear</strong></a>
                    <p>₹249.99</p>
                </div>
            </div>

            <div class="wishlist-actions">
                <a href="{{ url('/cart') }}" class="add-cart-btn">Add to Cart</a>
                <button class="remove-btn">Remove</button>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection