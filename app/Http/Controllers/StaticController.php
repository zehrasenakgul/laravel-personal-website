<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class StaticController extends Controller
{
    public function addStatic()
    {
        return view("backend.static.add");
    }
    public function show()
    {
        $pages = Page::all();
        return view("backend.static.list", compact("pages"));
    }
    public function updateStatic($slug)
    {
        $page = Page::where("slug", $slug)->first();
        return view("backend.static.update", compact("page"));
    }

    public function update(Request $request, $slug)
    {

        $str = Str::slug($request->title, '-');
        $page = Page::where("slug", $slug)->update([
            "title" => $request->input('title'),
            "name" => $request->input('name'),
            "description" => $request->input('description'),
            "keywords" => $request->input('keywords'),
            "slug" => $str,
        ]);

        if ($page) {
            return redirect("/admin/statics/list");
            return ["status" => "success", "message" => "Başarılı", "title" => "Başarılı"];

        } else {
            return ["status" => "error", "message" => "Başarısız", "title" => "Hatalı"];
        }
    }

    public function add(Request $request)
    {
        $page = new Page();

        $page->title = $request->title;
        $page->name = $request->name;
        $page->description = $request->description;
        $page->keywords = $request->keywords;
        $str = Str::slug($request->title, '-');
        $page->slug = $str;

        if ($page->save()) {
            return redirect("/admin/statics/list");
            return ["status" => "success", "message" => "Başarılı", "title" => "Başarılı"];

        } else {
            return ["status" => "error", "message" => "Başarısız", "title" => "Hatalı"];
        }
    }

    public function delete(Request $request)
    {
        $page = Page::where("slug", $request->slug)->delete();
        if ($page) {
            return redirect("/admin/statics/list");
            return ["status" => "success", "message" => "Başarılı", "title" => "Başarılı"];

        } else {
            return ["status" => "error", "message" => "Başarısız", "title" => "Hatalı"];
        }

    }

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
