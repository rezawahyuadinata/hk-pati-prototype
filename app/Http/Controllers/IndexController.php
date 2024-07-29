<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function indexPage()
    {
        return view('index');
    }
    public function companyPage()
    {
        return view('frontend.company');
    }
    public function productPage()
    {
        return view('frontend.product');
    }
    public function overfactoryPage()
    {
        return view('frontend.overallfactory');
    }
    public function partsPage()
    {
        return view('frontend.parts');
    }
    public function diesPage()
    {
        return view('frontend.dies');
    }
    public function castingPage()
    {
        return view('frontend.casting');
    }
    public function contactPage()
    {
        return view('frontend.contact');
    }
    public function sustainbilityPage()
    {
        return view('frontend.sustainbility');
    }
    public function galleryPage()
    {
        return view('frontend.gallery');
    }
}
