<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;


class HomeController extends Controller
{
    public function home()
    {
        $works = Work::limit(3)->get();
        return view("frontend.home.index",compact("works"));
    }

    
}
