<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class MemberController extends BaseController
{
    // view
    public function profileView(){
        return view('member.profile');
    }
    public function cartView(){
        return view('member.cart');
    }
    public function wishlistView(){
        return view('member.wishlist');
    }
    public function purchaseView(){
        return view('member.purchase');
    }
    public function saveAddressView(){
        return view('member.savedAddress');
    }
    public function reviewFormView(){
        return view('member.reviewForm');
    }
    public function changePasswordView(){
        return view('member.changePassword');
    }
    public function paymentView(){
        return view('member.payment');
    }

    // Validation
    public function paymentSubmit(Request $formData){
        $formData->validate([
            'name' => 'required|string|min:2|max:30',
            'pnumber' => 'required|size:10',
            'paymode' => 'required',
        ],[
            'name.required' => 'Full name is required.',
            'name.string' => 'Full name must be a valid string.',
            'name.min' => 'Full name must be at least 2 characters.',
            'name.max' => 'Full name cannot exceed 30 characters.',
            'pnumber.required' => 'Phone number is required.',
            'pnumber.size' => 'Phone number must be exactly 10 digits.',
            'paymode.required' => 'Please select a payment mode.'
        ]);

        return view('member.purchase', compact('formData'));
    }

    public function applyCoupon(Request $formData){
        $formData->validate([
            'coupen' => 'required|string|size:8',
        ],[
            'coupen.required' => 'Coupon code is required.',
            'coupen.string' => 'Coupon code must be a string.',
            'coupen.size' => 'Coupon code must be exactly 8 characters.',
        ]);
        return view('member.payment', compact('formData'));
    }

    public function reviewSubmit(Request $formData){
        $formData->validate([
            'rate' => 'required|integer|between:1,5',
            'comment' => 'required|string|min:5|max:500',
        ], [
            'rate.required' => 'Please provide a rating.',
            'rate.integer' => 'Rating must be a number.',
            'rate.between' => 'Rating must be between 1 and 5 stars.',
    
            'comment.required' => 'Please enter a comment.',
            'comment.string' => 'Comment must be a valid text.',
            'comment.min' => 'Comment must be at least 5 characters long.',
            'comment.max' => 'Comment cannot exceed 500 characters.',
        ]);

        return view('guest.product', compact('formData'));
    }

    public function addressSubmit(Request $formData){
        
        $formData->validate([
            'name' => 'required|string|min:2|max:50',
            'pnumber' => 'required|size:10',
            'pin' => 'required|digits:6',
            'address' => 'required|string|min:5|max:300',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
        ], [
            'name.required' => 'Full name is required.',
            'name.string' => 'Name must be a valid text.',
            'name.min' => 'Name must be at least 2 characters.',
            'name.max' => 'Name must not exceed 50 characters.',
            'pnumber.required' => 'Phone number is required.',
            'pnumber.size' => 'Phone number must be exactly 10 digits.',
            'pin.required' => 'PIN code is required.',
            'pin.digits' => 'PIN code must be exactly 6 digits.',
            'address.required' => 'Address is required.',
            'address.string' => 'Address must be valid text.',
            'address.min' => 'Address must be at least 5 characters.',
            'address.max' => 'Address must not exceed 300 characters.',
            'city.required' => 'City/District/Town is required.',
            'city.string' => 'City must be valid text.',
            'city.max' => 'City cannot exceed 100 characters.',
            'state.required' => 'State is required.',
            'state.string' => 'State must be valid text.',
            'state.max' => 'State cannot exceed 100 characters.',
        ]);

        return view('member.profile', compact('formData'));
    }

    public function changePasswordSubmit(Request $formData){
        
        $formData->validate([
            'oldpass' => 'required|string',
            'newpass' => 'required|regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[#$%@]).+$/|min:6|max:8',
            'cpass' => 'required|same:newpass',
        ], [
            'oldpass.required' => 'Please enter your current password.',
            'oldpass.string' => 'Old password must be a valid string.',
            'newpass.required' => 'Please enter a new password.',
            'newpass.regex' => 'New password must include uppercase, lowercase, number, and special character.',
            'newpass.min' => 'New password must be at least 6 characters.',
            'newpass.max' => 'New password cannot be more than 8 characters.',
            'cpass.required' => 'Please confirm your new password.',
            'cpass.same' => 'Confirm password must match the new password.',
        ]);

        return view('member.profile', compact('formData'));
    }

    public function editProfile(Request $formData){

        $formData->validate([
            'username' => 'required|string|min:2|max:50',
            'useremail' => 'required|email',
        ], [
            'username.required' => 'Username is required.',
            'username.string' => 'Username must be valid text.',
            'username.min' => 'Username must be at least 2 characters.',
            'username.max' => 'Username cannot exceed 50 characters.',
            'useremail.required' => 'Email is required.',
            'useremail.email' => 'Enter a valid email address.',
        ]);
        
        return view('member.profile', compact('formData'));
    }
}
