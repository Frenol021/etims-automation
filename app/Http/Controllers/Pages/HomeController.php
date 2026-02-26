<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $sliders = [
            ['image' => 'assets/images/bg2.jpg', 'title' => 'Etims Integration', 'description' => 'We are dedicated to providing seamless integration solutions for your business needs.'],
            ['image' => 'assets/images/background2.jpg', 'title' => 'Custom Software Development', 'description' => 'Our team specializes in creating tailored software solutions to meet your unique business requirements.'],
            ['image' => 'assets/images/background3.jpg', 'title' => 'Cloud Solutions', 'description' => 'We offer a range of cloud services to help you leverage the power of cloud computing.'],
            // Add more sliders as needed
        ];
        $partners = [
            ['name' => 'Partner 1', 'logo' => 'assets/images/partner1.png'],
            ['name' => 'Partner 2', 'logo' => 'assets/images/partner2.jpeg'],
            ['name' => 'Partner 3', 'logo' => 'assets/images/partner3.png'],
            ['name' => 'Partner 4', 'logo' => 'assets/images/partner4.png'],
            ['name' => 'Partner 5', 'logo' => 'assets/images/partner5.png'],
            // Add more partners as needed
        ];
        return view('pages.home', compact('sliders', 'partners'));
    }
    public function about()
    {
        return view('pages.about');
    }
    public function services()
    {
        return view('pages.services');
    }
}
