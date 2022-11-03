<?php

namespace App\Http\Controllers;

use App\Models\Degree;

class MainController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function degrees()
    {
        $degrees = Degree::orderBy('lft')->get();
        return view('degrees', compact('degrees'));
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
