@extends('masterview')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('main')
    <div class="profile-main-container">
        <h1 class="profile-heading">User Profile</h1>
        <hr class="profile-heading-line">
        <div class="profile-wrapper">
            <div class="profile-container-1">
                <div class="profile-box">
                    <form action="{{ url('profile') }}" method="post">
                        @csrf
                        <div class="profile-img-box">
                            <div class="profile-img">
                                <img src="{{ asset('images/users/demo_user.jpg') }}" alt="User Profile">
                                <label for="user"><i class="fa-solid fa-arrow-up-from-bracket"></i></label>
                                <input type="file" name="userimg" id="user">
                            </div>
                        </div>
                        <div class="user-details">
                            <div class="detail-box">
                                <span>Username</span>
                                <input type="text" name="username" value="ssolanki" class="edit-input-field">
                            </div>
                            @error('username')
                                <p class="error-msg">{{ $message }}</p>
                            @enderror
                            <div class="detail-box">
                                <span>Email</span>
                                <input type="text" name="useremail" value="ssolanki511@rku.ac.in" class="edit-input-field">
                            </div>
                            @error('useremail')
                                <p class="error-msg">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="btns">
                            <div class="edit-form-btns">
                                <div class="edit-form-submit-btns">
                                    <input type="submit" value="Submit">
                                    <button class="edit-close-btn">Close</button>
                                </div>
                                <button class="edit-btn">Edit Profile</button>
                            </div>
                            <a href="{{ url('changePassword') }}" class="change-password">Change Password</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="profile-container-2">
                <div class="profile-display-section">
                    <div class="profile-wishlist-box">
                        <a href="{{ url('/wishlist') }}">
                            <div class="stat-card">
                                <p class="stat-number">5</p>
                                <p class="stat-label">Wishlist</p>
                            </div>
                        </a>
                    </div>
                    <div class="profile-cart-box">
                        <a href="{{ url('cart') }}">
                            <div class="stat-card">
                                <p class="stat-number">5</p>
                                <p class="stat-label">Cart</p>
                            </div>
                        </a>
                    </div>
                    <div class="profile-order-box">
                        <a href="{{ url('purchase') }}">
                            <div class="stat-card">
                                <p class="stat-number">5</p>
                                <p class="stat-label">Orders</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="profile-address-list">
                    <div class="profile-address-wrapper">
                        <div class="recent-heading">
                            <h6>Saved Addresses</h6>
                            <a href="{{ url('/saveAddress') }}">Add New</a>
                        </div>
                  
                        <table class="recent-address-table">
                            <tr class="address-item">
                                <td>
                                    <p class="name">John Doe</p>
                                </td>
                                <td>
                                    <p class="address">123 Layout Street, Whitefield, Bangalore, Karnataka, 560066</p>
                                    <p class="phone">+91 98765 43210</p>
                                </td>
                                <td class="action-buttons">
                                    <a href="{{ url('/saveAddress') }}" class="edit">Edit</a>
                                    <a href="" class="delete">Delete</a>
                                </td>
                            </tr>
                    
                            <tr class="address-item">
                                <td>
                                    <p class="name">Jane Smith</p>
                                </td>
                                <td>
                                    <p class="address">456 Tech Park Road, Indiranagar, Bangalore, 560038</p>
                                    <p class="phone">+91 99887 77665</p>
                                </td>
                                <td class="action-buttons">
                                    <a href="{{ url('/saveAddress') }}" class="edit">Edit</a>
                                    <a href="" class="delete">Delete</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>                  
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/profile.js') }}"></script>
@endsection