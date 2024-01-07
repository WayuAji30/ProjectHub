<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function search()
    {
        return view('search');
    }

    public function detail_project()
    {
        return view('detail_project');
    }

    public function profile()
    {
        return view('profile.profile');
    }

    public function profiles()
    {
        return view('stalker.profiles');
    }

    public function setting()
    {
        return view('profile.setting');
    }
}
