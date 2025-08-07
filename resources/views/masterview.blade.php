<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NeoWear</title>
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('library/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    @yield('styles')
</head>
<body>
    <header class="nav-bar">
        <nav>
            <ul>
                <li class="menu">
                    <div class="menu_close">Close</div>
                    <div class="menu_open">Menu</div>
                </li>
                <li class="website_link"><a href="{{ url('/index') }}">NeoWear</a></li>
                <li class="member">
                    <a href="" class="member_close">close</a>
                    <a href="{{ url('/signup') }}" class="member_open">Join Us</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="menu-container">
            <div class="menu-box">
                <ul>
                    <li><a href="{{ url('/index') }}">Home</a></li>
                    <hr>
                    <li><a href="{{ url('/search') }}">Shop</a></li>
                    <hr>
                    <li><a href="{{ url('/profile') }}">Profile</a></li>
                    <hr>
                    <li><a href="{{ url('/wishlist') }}">Wishlist</a></li>
                    <hr>
                    <li><a href="{{ url('/cart') }}">Cart</a></li>
                    <hr>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                    <hr>
                </ul>
            </div>
        </div>
        <main id="main">
            @yield('main')
        </main>
    </div>
    <footer>
        <div class="footer-main">
            <div class="footer-box-1">
                <div class="footer-contact-us">
                    <span>Connect with us</span>
                    <ul>
                        <li><a href="https://www.facebook.com/">Facebook</a></li>
                        <li><a href="https://www.instagram.com/">Instagram</a></li>
                        <li><a href="https://x.com/">Twitter</a></li>
                        <li><a href="https://www.youtube.com/">Youtube</a></li>
                    </ul>
                </div>
                <div class="footer-logo">
                    <a href="{{ url('/index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"> <path d="M415.4 512h-95.1L212.1 357.5v91.1L125.7 512H28V29.8L68.5 0h108.1l123.7 176.1V63.5L386.7 0h97.7v461.5zM38.8 35.3V496l72-52.9V194l215.5 307.6h84.8l52.4-38.2h-78.3L69 13zm82.5 466.6l80-58.8v-101l-79.8-114.4v220.9L49 501.9h72.3zM80.6 10.8l310.6 442.6h82.4V10.8h-79.8v317.6L170.9 10.8zM311 191.7l72 102.8V15.9l-72 53v122.7z"/></svg>
                        <div class="logo-name">
                            <p>neowear</p>
                        </div>
                    </a>
                </div>
                <div class="footer-quick-link">
                    <span>Quick Links</span>
                    <ul>
                        <li><a href="{{ url('/index') }}">Home</a></li>
                        <li><a href="{{ url('/search') }}">Shop</a></li>
                        <li><a href="{{ url('/profile') }}">Profile</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-box-2">
                <p>NeoWear © 2025 All Copy Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <script src="{{asset('library/gsap.min.js')}}"></script>
    <script src="{{ asset('library/ScrollTrigger.min.js') }}"></script>
    <script src="{{asset('library/lenis.min.js')}}"></script>
    <script src="{{ asset('library/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/master.js') }}"></script>
    @yield('scripts')
</body>
</html>