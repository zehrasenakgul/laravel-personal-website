<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Work;

class WorkController extends Controller
{

    public function workGetPortfolio()
    {
        //where("id","1")->get() or ->first  // all() gibi belirli veriyi de çekebiliriz
        $works = Work::all();
        return view("frontend.home.portfolio", compact("works"));
    }
    public function details($slug)
    {
        //where("id","1")->get() or ->first  // all() gibi belirli veriyi de çekebiliriz
        $work = Work::where("slug", $slug)->first();
        return view("frontend.home.portfolio-details", compact("work"));
    }

}
