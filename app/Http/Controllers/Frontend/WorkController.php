<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Work;
use Illuminate\Support\Facades\Cache;

class WorkController extends Controller
{

    public function workGetPortfolio()
    {
        if (Cache::has("works")) {
            $works = Cache::get("works");
        } else {
            $works = Work::paginate(6);
            Cache::put("works", $works, 5);
        }
        //where("id","1")->get() or ->first  // all() gibi belirli veriyi de çekebiliriz

        return view("frontend.portfolio.portfolio", compact("works"));
    }
    public function details($slug)
    {
        //where("id","1")->get() or ->first  // all() gibi belirli veriyi de çekebiliriz
        $work = Work::where("slug", $slug)->first();
        return view("frontend.portfolio.portfolio-details", compact("work"));
    }

}
