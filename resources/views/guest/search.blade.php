@extends('masterview')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
@endsection

@section('main')
    <div class="search-main-container">
        <div class="filter-main-open">
            <div class="filter-open-box">
                <span>150 Products</span>
                <button class="filter-open">Filter</button>
            </div>
        </div>
        <div class="search-wrapper">
            <div class="filter-box">
                <div class="close-icon">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="filter-form">
                    <form action="">
                        <div class="group">
                            <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
                            <input placeholder="Search" type="search" class="search-input">
                        </div>
                    </form>
                    <form action="">
                        <div class="input-box">
                            <label class="filter-name" for="filter-price">
                                <div class="filter-flex">
                                    <span>Price</span>
                                    <span><i class="fa-solid fa-plus"></i></span>
                                </div>
                            </label>
                            <input type="checkbox" name="" class="dropdown-checkbox" id="filter-price">
                            <div class="input-field">
                                <div class="input-field-wrapper">
                                    <select name="" id="">
                                        <option value="">Relevant</option>
                                        <option value="">High To Low</option>
                                        <option value="">Low To High</option>
                                    </select>
                                    <i class="fa-solid fa-chevron-right arrow"></i>
                                </div>
                            </div>
                        </div>
                        <div class="input-box">
                            <label class="filter-name" for="filter-category">
                                <div class="filter-flex">
                                    <span>Category</span>
                                    <span><i class="fa-solid fa-plus"></i></span>
                                </div>
                            </label>
                            <input type="checkbox" name="" class="dropdown-checkbox" id="filter-category" checked>
                            <div class="input-field">
                                <p class="filter-values">
                                    <input type="checkbox" name="category[]" id="men">
                                    <label for="men">Men</label>
                                </p>
                                <p class="filter-values">
                                    <input type="checkbox" name="category[]" id="women">
                                    <label for="women">Women</label>
                                </p>
                                <p class="filter-values">
                                    <input type="checkbox" name="category[]" id="kid">
                                    <label for="kid">Kid's</label>
                                </p>
                            </div>
                        </div>
                        <div class="input-box">
                            <label class="filter-name" for="filter-size">
                                <div class="filter-flex">
                                    <span>Size</span>
                                    <span><i class="fa-solid fa-plus"></i></span>
                                </div>
                            </label>
                            <input type="checkbox" name="" class="dropdown-checkbox" id="filter-size" checked>
                            <div class="input-field">
                                <p class="filter-values">
                                    <input type="checkbox" name="size[]" id="xs">
                                    <label for="xs">XS</label>
                                </p>
                                <p class="filter-values">
                                    <input type="checkbox" name="size[]" id="s">
                                    <label for="s">S</label>
                                </p>
                                <p class="filter-values">
                                    <input type="checkbox" name="size[]" id="m">
                                    <label for="m">M</label>
                                </p>
                                <p class="filter-values">
                                    <input type="checkbox" name="size[]" id="l">
                                    <label for="l">L</label>
                                </p>
                                <p class="filter-values">
                                    <input type="checkbox" name="size[]" id="xl">
                                    <label for="xl">XL</label>
                                </p>
                                <p class="filter-values">
                                    <input type="checkbox" name="size[]" id="xxl">
                                    <label for="xxl">XXL</label>
                                </p>
                            </div>
                        </div>
                        <input type="submit" value="Apply">
                    </form>
                </div>
            </div>
            <div class="products-wrapper">
                <div class="product-box">
                    <a href="{{ url('/product') }}">
                        <div class="product-img">
                            <img src="{{ asset('images/wears/product_1.jpg') }}" alt="Product Image">
                            <span><i class="fa-regular fa-heart"></i></span>
                        </div>
                        <div class="product-name">
                            <p>Short-sleeve striped sweater with ruffles</p>
                        </div>
                        <div class="product-price">
                            <span class="current-price">₹788</span>
                            <span class="old-price">₹288</span>
                        </div>
                        <p class="product-offer">50% off</p>
                    </a>
                </div>
                <div class="product-box">
                    <a href="{{ url('/product') }}">
                        <div class="product-img">
                            <img src="{{ asset('images/wears/product_5.jpg') }}" alt="Product Image">
                            <span><i class="fa-regular fa-heart"></i></span>
                        </div>
                        <div class="product-name">
                            <p>Short-sleeve striped sweater with ruffles</p>
                        </div>
                        <div class="product-price">
                            <span class="current-price">₹788</span>
                            <span class="old-price">₹288</span>
                        </div>
                        <p class="product-offer">50% off</p>
                    </a>
                </div>
                <div class="product-box">
                    <a href="{{ url('/product') }}">
                        <div class="product-img">
                            <img src="{{ asset('images/wears/product_4.jpg') }}" alt="Product Image">
                            <span><i class="fa-regular fa-heart"></i></span>
                        </div>
                        <div class="product-name">
                            <p>Short-sleeve striped sweater with ruffles</p>
                        </div>
                        <div class="product-price">
                            <span class="current-price">₹788</span>
                            <span class="old-price">₹288</span>
                        </div>
                        <p class="product-offer">50% off</p>
                    </a>
                </div>
                <div class="product-box">
                    <a href="{{ url('/product') }}">
                        <div class="product-img">
                            <img src="{{ asset('images/wears/product_2.jpg') }}" alt="Product Image">
                            <span><i class="fa-regular fa-heart"></i></span>
                        </div>
                        <div class="product-name">
                            <p>Short-sleeve striped sweater with ruffles</p>
                        </div>
                        <div class="product-price">
                            <span class="current-price">₹788</span>
                            <span class="old-price">₹288</span>
                        </div>
                        <p class="product-offer">50% off</p>
                    </a>
                </div>
                <div class="product-box">
                    <a href="{{ url('/product') }}">
                        <div class="product-img">
                            <img src="{{ asset('images/wears/product_3.jpg') }}" alt="Product Image">
                            <span><i class="fa-regular fa-heart"></i></span>
                        </div>
                        <div class="product-name">
                            <p>Short-sleeve striped sweater with ruffles</p>
                        </div>
                        <div class="product-price">
                            <span class="current-price">₹788</span>
                            <span class="old-price">₹288</span>
                        </div>
                        <p class="product-offer">50% off</p>
                    </a>
                </div>
                <div class="product-box">
                    <a href="{{ url('/product') }}">
                        <div class="product-img">
                            <img src="{{ asset('images/wears/product_6.jpg') }}" alt="Product Image">
                            <span><i class="fa-regular fa-heart"></i></span>
                        </div>
                        <div class="product-name">
                            <p>Short-sleeve striped sweater with ruffles</p>
                        </div>
                        <div class="product-price">
                            <span class="current-price">₹788</span>
                            <span class="old-price">₹288</span>
                        </div>
                        <p class="product-offer">50% off</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/search.js') }}"></script>
@endsection