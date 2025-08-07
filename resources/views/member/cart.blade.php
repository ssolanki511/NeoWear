@extends('masterview')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endsection

@section('main')
    <div class="cart-main-container">
        <div class="cart-left-side">
            <div class="heading">
                <h2>Your <span>Cart</span></h2>
                <p>3 Items</p>
            </div>
            <div class="table-container">
                <div class="table-wrpper">
                    <table>
                        <thead>
                          <tr>
                            <th>Product Details</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <a href="url('/product')"><img src="{{ asset('images/wears/product_1.jpg') }}" alt="Product Image" /></a>
                              <div>
                                <a href="{{ url('/product') }}"><strong>Women shirt Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, voluptatem! Nisi, facilis nam. Minus explicabo ipsam alias quibusdam ea animi.</strong></a>
                                <p class="remove">Remove</p>
                              </div>
                            </td>
                            <td>$499.99</td>
                            <td>
                              <input type="number" value="2" min="1" />
                            </td>
                            <td>$999.98</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="url('/product')"><img src="{{ asset('images/wears/product_2.jpg') }}" alt="Product Image" /></a>
                              <div>
                                <a href="{{ url('/product') }}"><strong>Women pants</strong></a>
                                <p class="remove">Remove</p>
                              </div>
                            </td>
                            <td>$399.99</td>
                            <td>
                              <input type="number" value="1" min="1" />
                            </td>
                            <td>$399.99</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="{{ url('/search') }}" class="continue-shopping"><span><i class="fa-solid fa-arrow-left"></i></span> Continue Shopping</a>
        </div>
        <div class="cart-right-side">
          <form action="">
            <h3>Order Summary</h3>
            <label for="address">SELECT ADDRESS</label>
            <select id="address">
                <option>Select Address</option>
            </select>
            <div class="summary-details">
                <p><strong>ITEMS 3</strong> <span>$1399.97</span></p>
                <p>Shipping Fee <span>Free</span></p>
                <p>Tax (2%) <span>$27</span></p>
                <hr>
                <p class="total"><strong>Total</strong> <span>$1426.97</span></p>
            </div>
            <a href="{{ url('/payment') }}" class="place-order">Place Order</a>
          </form>
        </div>
    </div>
@endsection

@section('scripts')
@endsection