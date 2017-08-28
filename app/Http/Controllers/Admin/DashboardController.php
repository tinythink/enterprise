<?php

namespace App\Http\Controllers\Admin;

use App\Models\OpenSource;
use App\Models\Page;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * 显示dashboard
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
//        $pages = Page::count();
//        $opens = OpenSource::count();
//        $users = User::count();
        return view('admin.dashboard',['pages'=>1,'opens'=>2,'users'=>3]);
    }

}
