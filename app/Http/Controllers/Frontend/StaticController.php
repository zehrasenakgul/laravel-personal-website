<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StaticController extends Controller
{

    public function pages($slug)
    {
        $page = Page::where("slug", $slug)->first();
        $modules = $page->modules;
        return view("frontend.static." . $slug, compact("page", "modules"));
    }

    public function sendMessage(Request $request)
    {
        $email = new ContactMail($request);
        Mail::to("zehrasenakgul@gmail.com")->send($email);

    }
}
