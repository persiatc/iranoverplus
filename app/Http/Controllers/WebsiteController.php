<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }

    public function faq()
    {
        return view('website.faq');
    }

    public function aboutUs()
    {
        return view('website.about-us');
    }

    public function contact()
    {
        return view('website.contact');
    }

    public function list()
    {
        return view('website.list');
    }

    public function details()
    {
        return view('website.details');
    }

    public function terms()
    {
        return view('website.terms');
    }



}
