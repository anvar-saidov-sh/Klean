<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main() {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function service()
    {
        return view('service');
    }
    public function project()
    {
        return view('project');
    }
    public function blog()
    {
        return view('posts.index');
    }
    public function contact()
    {
        return view('contact');
    }
    
}
