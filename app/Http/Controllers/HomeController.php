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
}
