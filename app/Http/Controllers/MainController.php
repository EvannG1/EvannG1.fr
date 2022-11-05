<?php

namespace App\Http\Controllers;

use App\Models\Degree;
use App\Models\Experience;
use App\Models\Project;
use App\Models\SkillCategory;

class MainController extends Controller
{
    public function about()
    {
        $projects = Project::orderBy('lft')->get();
        return view('about', compact('projects'));
    }

    public function degrees()
    {
        $degrees = Degree::orderBy('lft')->get();
        return view('degrees', compact('degrees'));
    }

    public function experiences()
    {
        $experiences = Experience::orderBy('lft')->get();
        return view('experiences', compact('experiences'));
    }

    public function skills()
    {
        $categories = SkillCategory::with('skills')->orderBy('lft')->get();
        return view('skills', compact('categories'));
    }
}
