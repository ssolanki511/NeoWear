@extends('masterview')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}">
@endsection

@section('main')
    <div class="payment-main-container">
        <div class="form-container">
            <h3>Make Payment</h3>
            <div class="product-detail">
                <span class="product-logo"><i class="fa-solid fa-box-archive"></i></span>
                <p class="product-name">Men Jacket Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptatum minus dignissimos, rem magnam beatae repudiandae facilis aut quae ad?</p>
            </div>
            <div class="coupen-box">
                <form action="{{ url('/payment') }}" method="post">
                    @csrf
                    <div class="input-field">
                        <input type="text" name="coupen" id="coupen" class="input" value="{{ old('coupen') }}" placeholder="Coupen Code">
                        @error('coupen')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-submit">
                        <input type="submit" value="Apply">
                    </div>
                </form>
            </div>
            <form action="{{ url('/purchase') }}" method="post">
                @csrf
                <div class="input-field">
                    <input type="text" name="name" id="name" class="input" value="{{ old('name') }}" placeholder="Full Name">
                    @error('name')
                        <p class="error-msg">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-field">
                    <input type="tel" name="pnumber" id="pnumber" class="input" value="{{ old('pnumber') }}" placeholder="Phone Number">
                    @error('pnumber')
                        <p class="error-msg">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-field">
                    <input type="number" name="price" id="price" class="input" value="0" placeholder="Price">
                </div>
                <div class="input-field">
                    <p>Payment Mode</p>
                    <div class="radio-box">
                        <input type="radio" name="paymode" id="razorpay">
                        <label for="razorpay">Razorpay</label>
                    </div>
                    <div class="radio-box">
                        <input type="radio" name="paymode" id="cod">
                        <label for="cod">Cash on Dilivery</label>
                    </div>
                    @error('paymode')
                        <p class="error-msg">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-submit">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
@endsection