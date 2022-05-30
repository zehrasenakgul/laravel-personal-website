<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Models\Work;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function home()
    {
        if (Cache::has("skills")) {
            $skills = Cache::get("skills");
        } else {
            $skills = Skill::all();
            Cache::put("skills", $skills, 5);
        }
        if (Cache::has("works")) {

            $works = Cache::get("works");
        } else {
            $works = Work::limit(3)->get();
            Cache::put("works", $works, 5);
        }

        return view("frontend.home.index", compact("works", "skills"));
    }

}
