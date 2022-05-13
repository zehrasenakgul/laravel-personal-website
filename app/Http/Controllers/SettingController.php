<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function settings()
    {
        return view("backend.settings.settings");
    }
}
