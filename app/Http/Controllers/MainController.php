<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function degrees()
    {
        return view('degrees');
    }

    public function experiences()
    {
        return view('experiences');
    }

    public function skills()
    {
        return view('skills');
    }
}
