

@extends('masterview')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('main')
    <div class="contact-main-container">
        <div class="form-container">
            <h2>Get In Touch</h2>
            <div class="contact-info">
                <div class="numbers">
                    <p>+91 8242 494 214 - Consulting</p>
                    <p>+91 8242 494 214 - Report</p>
                </div>
                <div class="address">
                    <p>Rk University, Bhavnager Road, Rajkot - 360001</p>
                </div>
            </div>
            <form action="{{ url('/contact') }}" method="post">
                @csrf
                <div class="input-field">
                    <input type="text" name="name" id="name" class="input" value="{{ old('name') }}" placeholder="Full Name">
                    @error('name')
                        <p class="error-msg">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-field">
                    <input type="email" name="email" id="email" class="input" value="{{ old('email') }}" placeholder="Email">
                    @error('email')
                        <p class="error-msg">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-field">
                    <textarea name="address" id="address" cols="30" rows="5" class="input" value="{{ old('address') }}" placeholder="Address(Area and Street)"></textarea>
                    @error('address')
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
    <script src="{{ asset('js/contact.js') }}"></script>
@endsection