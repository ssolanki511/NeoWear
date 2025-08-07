<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class FormDataController extends BaseController
{

    public function add_product(Request $request)
    {
        $validated = $request->validate(
            [
                'pn' => 'required|string|min:3|max:50',
                'pqty' => 'required|integer|min:1',
                'price' => 'required|numeric|min:0',
                'p_offer' => 'nullable|numeric|min:0|max:100',
                'options' => 'required',
                'img_file' => 'required|image|mimes:jpg,jpeg,png|max:250', // 250KB
                'product_dis' => 'required|string|min:3|max:120',
            ],
            [
                'pn.required' => 'Product Name is required.',
                'pn.min' => 'Product Name must be at least 3 characters long.',
                'pn.max' => 'Product Name must not exceed 50 characters.',
                'pqty.required' => 'Quantity is required.',
                'pqty.integer' => 'Quantity must be a whole number.',
                'pqty.min' => 'Quantity must be at least 1.',
                'price.required' => 'Price is required.',
                'price.numeric' => 'Price must be a number.',
                'price.min' => 'Price cannot be negative.',
                'p_offer.numeric' => 'Offer must be a number.',
                'p_offer.min' => 'Offer cannot be negative.',
                'p_offer.max' => 'Offer cannot exceed 100.',
                'options.required' => 'Options are required.',
                'img_file.required' => 'Product Image is required.',
                'img_file.image' => 'Product Image must be an image file.',
                'img_file.mimes' => 'Product Image must be a JPG, JPEG, or PNG file.',
                'img_file.max' => 'ProductImage must be less than 250KB.',
                'product_dis.required' => 'Product Description is required.',
                'product_dis.min' => 'Product Description must be at least 3 characters long.',
                'product_dis.max' => 'Product Description must not exceed 120 characters.'
            ]
        );
        // TODO: Save product logic here
        return redirect('admin.admin_products')->with('success', 'Product added successfully!');
    }

    public function edit_product(Request $request)
    {
        $validated = $request->validate(
            [
                'pn' => 'required|string|min:3|max:50',
                'pqty' => 'required|integer|min:1',
                'price' => 'required|numeric|min:0',
                'p_offer' => 'nullable|numeric|min:0|max:100',
                'options' => 'required',
                'img_file' => 'required|image|mimes:jpg,jpeg,png|max:250', // 250KB
                'product_dis' => 'required|string|min:3|max:120',
            ],
            [
                'pn.required' => 'Product Name is required.',
                'pn.min' => 'Product Name must be at least 3 characters long.',
                'pn.max' => 'Product Name must not exceed 50 characters.',
                'pqty.required' => 'Quantity is required.',
                'pqty.integer' => 'Quantity must be a whole number.',
                'pqty.min' => 'Quantity must be at least 1.',
                'price.required' => 'Price is required.',
                'price.numeric' => 'Price must be a number.',
                'price.min' => 'Price cannot be negative.',
                'p_offer.numeric' => 'Offer must be a number.',
                'p_offer.min' => 'Offer cannot be negative.',
                'p_offer.max' => 'Offer cannot exceed 100.',
                'options.required' => 'Options are required.',
                'img_file.required' => 'Product Image is required.',
                'img_file.image' => 'Product Image must be an image file.',
                'img_file.mimes' => 'Product Image must be a JPG, JPEG, or PNG file.',
                'img_file.max' => 'ProductImage must be less than 250KB.',
                'product_dis.required' => 'Product Description is required.',
                'product_dis.min' => 'Product Description must be at least 3 characters long.',
                'product_dis.max' => 'Product Description must not exceed 120 characters.'
            ]);
        return redirect('admin.admin_products')->with('success', 'Product edited successfully!');
    }

    public function add_user(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required|string|min:2|max:50',
                'email' => 'required|email',
                'password' => 'required|string|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
                'confirm_password' => 'required|same:password',
                'type' => 'required',
                'img_file' => 'required|image|mimes:jpg,jpeg,png|max:250',
            ],[
                'name.required' => 'Name is required.',
                'name.min' => 'Name must be at least 2 characters long.',
                'name.max' => 'Name must not exceed 50 characters.',
                'email.required' => 'Email is required.',
                'email.email' => 'Email must be a valid email address.',
                'password.required' => 'Password is required.',
                'password.min' => 'Password must be at least 8 characters long.',
                'password.regex' => 'Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character.',
                'confirm_password.required' => 'Confirm Password is required.',
                'confirm_password.min' => 'Confirm Password must be at least 8 characters long.',
                'confirm_password.same' => 'Confirm Password must match Password.',
                'type.required' => 'Type is required.',
                'img_file.required' => 'Profile Image is required.',
                'img_file.image' => 'Profile Image must be an image file.',
                'img_file.mimes' => 'Profile Image must be a JPG, JPEG, or PNG file.',
                'img_file.max' => 'Profile Image must be less than 250KB.',
            ]);
        return redirect('admin.admin_users')->with('success', 'User added successfully!');
    }

    public function edit_user(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required|string|min:2|max:50',
                'email' => 'required|email',
                'password' => 'required|string|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
                'confirm_password' => 'required|same:password',
                'type' => 'required',
                'img_file' => 'required|image|mimes:jpg,jpeg,png|max:250'
            ],[
                'name.required' => 'Name is required.',
                'name.min' => 'Name must be at least 2 characters long.',
                'name.max' => 'Name must not exceed 50 characters.',
                'email.required' => 'Email is required.',
                'email.email' => 'Email must be a valid email address.',
                'password.required' => 'Password is required.',
                'password.min' => 'Password must be at least 8 characters long.',
                'password.regex' => 'Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character.',
                'confirm_password.required' => 'Confirm Password is required.',
                'confirm_password.min' => 'Confirm Password must be at least 8 characters long.',
                'confirm_password.same' => 'Confirm Password must match Password.',
                'type.required' => 'Type is required.',
                'img_file.required' => 'Profile Image is required.',
                'img_file.image' => 'Profile Image must be an image file.',
                'img_file.mimes' => 'Profile Image must be a JPG, JPEG, or PNG file.',
                'img_file.max' => 'Profile Image must be less than 250KB.',
            ]);
        return redirect('admin.admin_users')->with('success', 'User edited successfully!');
    }

    public function add_category(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3|max:50',
            'description' => 'required|string|min:3|max:120',
        ], [
            'name.required' => 'Category Name is required.',
            'name.min' => 'Category Name must be at least 3 characters long.',
            'name.max' => 'Category Name must not exceed 50 characters.',
            'description.required' => 'Category Description is required.',
            'description.min' => 'Category Description must be at least 3 characters long.',
            'description.max' => 'Category Description must not exceed 120 characters.'
        ]);
        // TODO: Save category logic here
        return redirect('admin.admin_categories')->with('success', 'Category added successfully!');
    }
    public function edit_category(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3|max:50',
            'description' => 'required|string|min:3|max:120',
        ], [
            'name.required' => 'Category Name is required.',
            'name.min' => 'Category Name must be at least 3 characters long.',
            'name.max' => 'Category Name must not exceed 50 characters.',
            'description.required' => 'Category Description is required.',
            'description.min' => 'Category Description must be at least 3 characters long.',
            'description.max' => 'Category Description must not exceed 120 characters.'
        ]);
        // TODO: Save category logic here
        return redirect('admin.admin_categories')->with('success', 'Category edited successfully!');
    }

    public function add_offer(Request $request)
    {
        $validated = $request->validate([
            'offer_name' => 'required|string|min:3|max:50',
            'offer' => 'required|numeric|min:1|max:100',
            'min_price' => 'required|numeric|min:0',
            'max_price' => 'required|numeric|gt:min_price',
            'offer_status' => 'required|in:active,upcoming,expired',
            'offer_dis' => 'required|string|min:3|max:120',
        ], [
            'offer_name.required' => 'Offer Name is required.',
            'offer_name.min' => 'Offer Name must be at least 3 characters long.',
            'offer_name.max' => 'Offer Name must not exceed 50 characters.',
            'offer.required' => 'Discount is required.',
            'offer.numeric' => 'Discount must be a number.',
            'offer.min' => 'Discount must be at least 1%.',
            'offer.max' => 'Discount cannot exceed 100%.',
            'min_price.required' => 'Min Price is required.',
            'min_price.numeric' => 'Min Price must be a number.',
            'min_price.min' => 'Min Price cannot be negative.',
            'max_price.required' => 'Max Price is required.',
            'max_price.numeric' => 'Max Price must be a number.',
            'max_price.gt' => 'Max Price must be greater than Min Price.',
            'offer_status.required' => 'Status is required.',
            'offer_status.in' => 'Status must be Active, Upcoming, or Expired.',
            'offer_dis.required' => 'Offer Description is required.',
            'offer_dis.min' => 'Offer Description must be at least 3 characters long.',
            'offer_dis.max' => 'Offer Description must not exceed 120 characters.'
        ]);
        // TODO: Save offer logic here
        return redirect('admin.admin_offers')->with('success', 'Offer added successfully!');
    }
    public function edit_offer(Request $request)
    {
        $validated = $request->validate([
            'offer_name' => 'required|string|min:3|max:50',
            'offer' => 'required|numeric|min:1|max:100',
            'min_price' => 'required|numeric|min:0',
            'max_price' => 'required|numeric|gt:min_price',
            'offer_status' => 'required|in:active,upcoming,expired',
            'offer_dis' => 'required|string|min:3|max:120',
        ], [
            'offer_name.required' => 'Offer Name is required.',
            'offer_name.min' => 'Offer Name must be at least 3 characters long.',
            'offer_name.max' => 'Offer Name must not exceed 50 characters.',
            'offer.required' => 'Discount is required.',
            'offer.numeric' => 'Discount must be a number.',
            'offer.min' => 'Discount must be at least 1%.',
            'offer.max' => 'Discount cannot exceed 100%.',
            'min_price.required' => 'Min Price is required.',
            'min_price.numeric' => 'Min Price must be a number.',
            'min_price.min' => 'Min Price cannot be negative.',
            'max_price.required' => 'Max Price is required.',
            'max_price.numeric' => 'Max Price must be a number.',
            'max_price.gt' => 'Max Price must be greater than Min Price.',
            'offer_status.required' => 'Status is required.',
            'offer_status.in' => 'Status must be Active, Upcoming, or Expired.',
            'offer_dis.required' => 'Offer Description is required.',
            'offer_dis.min' => 'Offer Description must be at least 3 characters long.',
            'offer_dis.max' => 'Offer Description must not exceed 120 characters.'
        ]);
        // TODO: Save offer logic here
        return redirect('admin.admin_offers')->with('success', 'Offer edited successfully!');
    }
    public function add_order(Request $request)
    {
        $validated = $request->validate([
            'order_id' => 'required|string|min:3|max:50',
            'user' => 'required|string|min:2|max:50',
            'product' => 'required|string|min:2|max:50',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:pending,processing,completed,cancelled',
        ], [
            'order_id.required' => 'Order ID is required.',
            'order_id.min' => 'Order ID must be at least 3 characters long.',
            'order_id.max' => 'Order ID must not exceed 50 characters.',
            'user.required' => 'User is required.',
            'user.min' => 'User must be at least 2 characters long.',
            'user.max' => 'User must not exceed 50 characters.',
            'product.required' => 'Product is required.',
            'product.min' => 'Product must be at least 2 characters long.',
            'product.max' => 'Product must not exceed 50 characters.',
            'quantity.required' => 'Quantity is required.',
            'quantity.integer' => 'Quantity must be a whole number.',
            'quantity.min' => 'Quantity must be at least 1.',
            'price.required' => 'Price is required.',
            'price.numeric' => 'Price must be a number.',
            'price.min' => 'Price cannot be negative.',
            'status.required' => 'Status is required.',
            'status.in' => 'Status must be Pending, Processing, Completed, or Cancelled.'
        ]);
        return redirect('admin.admin_orders')->with('success', 'Order added successfully!');
    }
    public function edit_order(Request $request)
    {
        $validated = $request->validate([
            'order_id' => 'required|string|min:3|max:50',
            'user' => 'required|string|min:2|max:50',
            'product' => 'required|string|min:2|max:50',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:pending,processing,completed,cancelled',
        ], [
            'order_id.required' => 'Order ID is required.',
            'order_id.min' => 'Order ID must be at least 3 characters long.',
            'order_id.max' => 'Order ID must not exceed 50 characters.',
            'user.required' => 'User is required.',
            'user.min' => 'User must be at least 2 characters long.',
            'user.max' => 'User must not exceed 50 characters.',
            'product.required' => 'Product is required.',
            'product.min' => 'Product must be at least 2 characters long.',
            'product.max' => 'Product must not exceed 50 characters.',
            'quantity.required' => 'Quantity is required.',
            'quantity.integer' => 'Quantity must be a whole number.',
            'quantity.min' => 'Quantity must be at least 1.',
            'price.required' => 'Price is required.',
            'price.numeric' => 'Price must be a number.',
            'price.min' => 'Price cannot be negative.',
            'status.required' => 'Status is required.',
            'status.in' => 'Status must be Pending, Processing, Completed, or Cancelled.'
        ]);
        return redirect('admin.admin_orders')->with('success', 'Order edited successfully!');
    }

    public function edit_inquiry(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:2|max:50',
            'email' => 'required|email',
            'subject' => 'required|string|min:3|max:100',
            'message' => 'required|string|min:5|max:500',
        ], [
            'name.required' => 'Name is required.',
            'name.min' => 'Name must be at least 2 characters long.',
            'name.max' => 'Name must not exceed 50 characters.',
            'email.required' => 'Email is required.',
            'email.email' => 'Email must be a valid email address.',
            'subject.required' => 'Subject is required.',
            'subject.min' => 'Subject must be at least 3 characters long.',
            'subject.max' => 'Subject must not exceed 100 characters.',
            'message.required' => 'Message is required.',
            'message.min' => 'Message must be at least 5 characters long.',
            'message.max' => 'Message must not exceed 500 characters.'
        ]);
        return redirect('admin.admin_inquires')->with('success', 'Inquiry edited successfully!');
    }
    public function edit_profile(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:2|max:50',
            'email' => 'required|email',
            'password' => 'required|string|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
            'confirm_password' => 'required|same:password',
            'img_file' => 'nullable|image|mimes:jpg,jpeg,png|max:250',
        ], [
            'name.required' => 'Name is required.',
            'name.min' => 'Name must be at least 2 characters long.',
            'name.max' => 'Name must not exceed 50 characters.',
            'email.required' => 'Email is required.',
            'email.email' => 'Email must be a valid email address.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 8 characters long.',
            'password.regex' => 'Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character.',
            'confirm_password.required' => 'Confirm Password is required.',
            'confirm_password.same' => 'Confirm Password must match Password.',
            'img_file.image' => 'Profile Image must be an image file.',
            'img_file.mimes' => 'Profile Image must be a JPG, JPEG, or PNG file.',
            'img_file.max' => 'Profile Image must be less than 250KB.'
        ]);
        return redirect('admin.admin_profile')->with('success', 'Profile edited successfully!');
    }

    public function change_password(Request $request)
    {
        $validated = $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|string|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
            'confirm_password' => 'required|same:new_password',
        ], [
            'old_password.required' => 'Old Password is required.',
            'new_password.required' => 'New Password is required.',
            'new_password.min' => 'New Password must be at least 8 characters long.',
            'new_password.regex' => 'New Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character.',
            'confirm_password.required' => 'Confirm Password is required.',
            'confirm_password.same' => 'Confirm Password must match New Password.'
        ]);
        // TODO: Check old password, update password logic here
        return redirect('admin.admin_profile')->with('success', 'Password changed successfully!');
    }
    public function logout(Request $request)
    {
        // auth()->logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        // return redirect('/');
    }
    public function reply_inquiry(Request $request)
    {
        $validated = $request->validate([
            'reply' => 'required|string|min:5|max:500',
            'user_email' => 'required|email',
        ], [
            'reply.required' => 'Reply message is required.',
            'reply.string' => 'Reply must be valid text.',
            'reply.min' => 'Reply must be at least 5 characters.',
            'reply.max' => 'Reply cannot exceed 500 characters.',
            'user_email.required' => 'User email is required.',
            'user_email.email' => 'User email must be valid.',
        ]);
        return redirect('admin_inquires')->with('success', 'Reply sent successfully!');
    }
    public function validate_slider(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:100',
            'image' => 'required'
        ]);
        return redirect()->route('admin.sliders')->with('success', 'Slider added.');
    }

    public function validate_slider_update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'image' => 'required'
        ]);
        return redirect()->route('admin.sliders')->with('success', 'Slider updated (static only).');
    }

    public function validate_slider_delete($id)
    {
        return redirect()->route('admin.sliders')->with('success', 'Slider deleted (static only).');
    }

    public function validate_about(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'required|string|max:500'
        ]);
        return redirect()->route('admin.about')->with('success', 'About info updated (static only).');
    }

    public function validate_contact(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required|string|max:20'
        ]);
        return redirect()->route('admin.contact')->with('success', 'Contact info updated (static only).');
    }
}
