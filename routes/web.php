<?php

use App\Http\Controllers\FormDataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\GuestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Admin
Route::get('/', function () {
    return view('admin.home');
});

Route::get('/home', [ViewController::class, 'display_home'])->name('home');

Route::get('/admin_products', [ViewController::class, 'display_products'])->name('products');
Route::get('/admin_users',[ViewController::class, 'display_users'])->name('users');
Route::get('/add_user', [ViewController::class, 'show_add_user_form'])->name('add_user_form');
Route::get('/edit_user', [ViewController::class, 'show_edit_user_form'])->name('edit_user_form');
Route::get('/admin_categories',[ViewController::class, 'display_categories'])->name('categories');
Route::get('/admin_offers', [ViewController::class, 'display_offers'])->name('offers');
Route::get('/admin_orders', [ViewController::class, 'display_orders'])->name('orders');
Route::get('/admin_inquires', [ViewController::class, 'display_inquires'])->name('inquires');
Route::get('/admin_profile', [ViewController::class, 'display_profile'])->name('profile');
Route::get('/add_product', [ViewController::class, 'show_add_product_form'])->name('add_product_form');
Route::get('/edit_product', [ViewController::class, 'show_edit_product_form'])->name('edit_product_form');
Route::get('/add_category', [ViewController::class, 'show_add_category_form'])->name('add_category_form');
Route::get('/edit_category', [ViewController::class, 'show_edit_category_form'])->name('edit_category_form');
Route::get('/add_offer', [ViewController::class, 'show_add_offer_form'])->name('add_offer_form');
Route::get('/edit_offer', [ViewController::class, 'show_edit_offer_form'])->name('edit_offer_form');
Route::get('/add_order', [ViewController::class, 'show_add_order_form'])->name('add_order_form');
Route::get('/edit_order', [ViewController::class, 'show_edit_order_form'])->name('edit_order_form');
Route::get('/add_inquiry', [ViewController::class, 'show_add_inquiry_form'])->name('add_inquiry_form');
Route::get('/edit_inquiry', [ViewController::class, 'show_edit_inquiry_form'])->name('edit_inquiry_form');
Route::get('/add_profile', [ViewController::class, 'show_add_profile_form'])->name('add_profile_form');
Route::get('/edit_profile', [ViewController::class, 'show_edit_profile_form'])->name('edit_profile_form');
Route::get('/change_password', [ViewController::class, 'show_change_password_form'])->name('change_password_form');
Route::get('/view_order', [ViewController::class, 'display_view_order'])->name('view_order');
Route::get('/view_inquiry', [ViewController::class, 'display_view_inquiry'])->name('view_inquiry');
Route::get('/reply_inquiry', [ViewController::class, 'display_reply_inquiry'])->name('reply_inquiry');
Route ::get('/view_product', [ViewController::class, 'display_view_product'])->name('view_product');
Route::post('/change_password', [FormDataController::class, 'change_password'])->name('change_password');
Route::post('/logout', [FormDataController::class, 'logout'])->name('logout');
Route::post('/add_product', [FormDataController::class, 'add_product'])->name('add_product');
Route::post('/edit_product', [FormDataController::class, 'edit_product'])->name('edit_product');
Route::post('/add_user', [FormDataController::class, 'add_user'])->name('add_user');
Route::post('/edit_user', [FormDataController::class, 'edit_user'])->name('edit_user');
Route::post('/add_category', [FormDataController::class, 'add_category'])->name('add_category');
Route::post('/edit_category', [FormDataController::class, 'edit_category'])->name('edit_category');
Route::post('/add_offer', [FormDataController::class, 'add_offer'])->name('add_offer');
Route::post('/edit_offer', [FormDataController::class, 'edit_offer'])->name('edit_offer');
Route::post('/add_order', [FormDataController::class, 'add_order'])->name('add_order');
Route::post('/edit_order', [FormDataController::class, 'edit_order'])->name('edit_order');
Route::post('/add_inquiry', [FormDataController::class, 'add_inquiry'])->name('add_inquiry');
Route::post('/edit_inquiry', [FormDataController::class, 'edit_inquiry'])->name('edit_inquiry');
Route::post('/add_profile', [FormDataController::class, 'add_profile'])->name('add_profile');
Route::post('/edit_profile', [FormDataController::class, 'edit_profile'])->name('edit_profile');
Route::post('/reply_inquiry', [FormDataController::class, 'reply_inquiry'])->name('reply_inquiry');
Route::get('/admin/sliders', [ViewController::class, 'display_slider_settings'])->name('admin.sliders');
Route::post('/admin/sliders', [FormDataController::class, 'validate_slider'])->name('admin.sliders.store');
Route::post('/admin/sliders/{id}/update', [FormDataController::class, 'validate_slider_update'])->name('admin.sliders.update');
Route::post('/admin/sliders/{id}/delete', [FormDataController::class, 'validate_slider_delete'])->name('admin.sliders.delete');

Route::get('/admin/about', [ViewController::class, 'display_about_settings'])->name('admin.about');
Route::post('/admin/about', [FormDataController::class, 'validate_about'])->name('admin.about.update');

Route::get('/admin/contact', [ViewController::class, 'display_contact_settings'])->name('admin.contact');
Route::post('/admin/contact', [FormDataController::class, 'validate_contact'])->name('admin.contact.update');


// Guest
Route::get('/index',[GuestController::class,'indexView']);
Route::get('/signup',[GuestController::class,'signUpView']);
Route::get('/signin',[GuestController::class,'signInView']);
Route::get('/forgot_password',[GuestController::class,'forgotPasswordView']);
Route::get('/otp',[GuestController::class,'OTPView']);
Route::get('/reset_password',[GuestController::class,'resetPasswordView']);
Route::get('/product',[GuestController::class,'productView']);
Route::get('/search',[GuestController::class,'searchView']);
Route::get('/contact',[GuestController::class,'contactView']);
Route::get('/wears',[GuestController::class,'wearsView']);

Route::post('/signinSubmit',[GuestController::class,'signUpSubmit']);
Route::post('/index',[GuestController::class,'signInSubmit']);
Route::post('/otp',[GuestController::class,'forgotSubmit']);
Route::post('/reset_password',[GuestController::class,'OTPSubmit']);
Route::post('/signin',[GuestController::class,'resetPasswordSubmit'])->name('resetPassword');
Route::post('/contact',[GuestController::class,'ContactSubmit']);


// Member
Route::get('/profile',[MemberController::class,'profileView']);
Route::get('/cart',[MemberController::class,'cartView']);
Route::get('/wishlist',[MemberController::class,'wishlistView']);
Route::get('/purchase',[MemberController::class,'purchaseView']);
Route::get('/saveAddress',[MemberController::class,'saveAddressView']);
Route::get('/product/review',[MemberController::class,'reviewFormView']);
Route::get('/changePassword',[MemberController::class,'changePasswordView']);
Route::get('/payment',[MemberController::class,'paymentView']);

Route::post('/purchase',[MemberController::class, 'paymentSubmit']);
Route::post('/payment',[MemberController::class, 'applyCoupon']);
Route::post('/product',[MemberController::class, 'reviewSubmit']);
Route::post('/profile',[MemberController::class, 'editProfile']);
Route::post('/savedAddressProfile',[MemberController::class, 'addressSubmit']);
Route::post('/changePasswordProfile',[MemberController::class, 'changePasswordSubmit']);