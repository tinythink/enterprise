<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home.index');
    }
    public function service()
    {
        return view('home.service');
    }
    public function company()
    {
        return view('home.company');
    }
    public function product()
    {
        return view('home.product');
    }
    public function cooperation()
    {
        return view('home.cooperation');
    }
    public function business()
    {
        return view('home.business');
    }
}
