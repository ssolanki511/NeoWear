@extends('masterview')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/savedAddress.css') }}">
@endsection

@section('main')
    <div class="address-main-container">
        <div class="form-container">
            <form action="{{ url('/savedAddressProfile') }}" method="post">
                @csrf
                <h3>Add Shipping Address</h3>
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
                    <input type="tel" name="pin" id="pin" class="input" value="{{ old('pin') }}" placeholder="Pin Code">
                    @error('pin')
                        <p class="error-msg">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-field">
                    <textarea name="address" id="address" cols="30" rows="5" class="input" value="{{ old('address') }}" placeholder="Address(Area and Street)"></textarea>
                    @error('address')
                        <p class="error-msg">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-field">
                    <div>
                        <input type="text" name="city" placeholder="City/District/Town">
                        @error('city')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <input type="text" name="state" placeholder="State">
                        @error('state')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="input-submit">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
        <div class="image-box">
            <img src="{{ asset('images/background/address.jpg') }}" alt="Simple Image">
        </div>
    </div>
@endsection

@section('scripts')
@endsection