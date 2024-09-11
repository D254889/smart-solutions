<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view ('home');
    }
    public function AboutMe()
    {
        return view ('aboutMe');
    }
    public function contact()
    {
        return view ('contact');
    }
}
