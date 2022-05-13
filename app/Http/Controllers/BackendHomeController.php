<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendHomeController extends Controller
{
    public function home()
    {
        return view("backend.home.index");
    }
}
