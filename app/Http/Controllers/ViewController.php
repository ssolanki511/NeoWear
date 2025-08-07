<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ViewController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function display_home()
    {
        return view('admin.home');
    }

    public function display_products()
    {
        return view('admin.admin_products');
    }

    public function show_add_product_form()
    {
        return view('admin.add_product');
    }

    public function display_view_product()
    {
        return view('admin.view_product');
    }

    public function show_edit_product_form()
    {
        return view('admin.edit_product');
    }

    public function display_users()
    {
        return view('admin.admin_users');
    }

    public function show_add_user_form()
    {
        return view('admin.add_user');
    }

    public function show_edit_user_form()
    {
        return view('admin.edit_user');
    }

    public function display_categories()
    {
        return view('admin.admin_categories');
    }

    public function display_offers()
    {
        return view('admin.admin_offers');
    }

    public function display_orders()
    {
        return view('admin.admin_orders');
    }

    public function display_inquires()
    {
        return view('admin.admin_inquires');
    }

    public function display_profile()
    {
        return view('admin.admin_profile');
    }

    public function show_add_category_form()
    {
        return view('admin.add_category');
    }
    public function show_edit_category_form()
    {
        return view('admin.edit_category');
    }

    public function show_add_offer_form()
    {
        return view('admin.add_offer');
    }
    public function show_edit_offer_form()
    {
        return view('admin.edit_offer');
    }
    public function show_add_order_form()
    {
        return view('admin.add_order');
    }
    public function show_edit_order_form()
    {
        return view('admin.edit_order');
    }

    public function show_add_inquiry_form()
    {
        return view('admin.add_inquiry');
    }
    public function show_edit_inquiry_form()
    {
        return view('admin.edit_inquiry');
    }
    public function show_add_profile_form()
    {
        return view('admin.add_profile');
    }
    public function show_edit_profile_form()
    {
        return view('admin.edit_profile');
    }

    public function show_change_password_form()
    {
        return view('admin.change_password');
    }

    public function display_view_order()
    {
        return view('admin.view_order');
    }

    public function display_view_inquiry()
    {
        return view('admin.view_inquiry');
    }

    public function display_reply_inquiry()
    {
        return view('admin.reply_inquiry');
    }

    public function display_slider_settings()
    {
        $sliders = [
            (object)[
                'id' => 1,
                'title' => 'Summer Collection',
                'image_url' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb'
            ],
            (object)[
                'id' => 2,
                'title' => 'Winter Sale',
                'image_url' => 'https://images.unsplash.com/photo-1519125323398-675f0ddb6308'
            ]
        ];
        return view('admin.slider_settings', compact('sliders'));
    }

    public function display_about_settings()
    {
        $about = (object)[
            'title' => 'About NeoWear',
            'description' => 'NeoWear is a leading fashion brand offering the latest trends in wearable technology and style.'
        ];
        return view('admin.about_settings', compact('about'));
    }

    public function display_contact_settings()
    {
        $contact = (object)[
            'email' => 'contact@neowear.com',
            'phone' => '+1 234 567 890'
        ];
        return view('admin.contact_settings', compact('contact'));
    }
}
