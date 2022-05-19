<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Work;

class HomeController extends Controller
{
    public function home()
    {
        $works = Work::limit(3)->get();
        $skills = Skill::all();
        return view("frontend.home.index", compact("works", "skills"));
    }

}
