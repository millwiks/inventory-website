<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeSliderController extends Controller
{


    public function HomeHtml()
    {

        return view('frontend.index');
    } // End Method


    public function LoginHtml()
    {

        return view('auth.login');
    } // End Method

    public function Products()
    {
        return view('frontend.product');
    } // end method 
}
