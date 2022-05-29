<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class BackendHomeController extends Controller
{
    public function home()
    {
        return view("backend.home.index");
    }

}
