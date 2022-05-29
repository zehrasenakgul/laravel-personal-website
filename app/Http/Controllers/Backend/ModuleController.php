<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ModuleController extends Controller
{
    public function addModule()
    {
        $pages = Page::all();
        return view("backend.module.add", compact("pages"));
    }
    public function show()
    {
        $modules = Module::all();
        return view("backend.module.list", compact("modules"));
    }
    public function updateModule($slug)
    {
        $pages = Page::all();
        $module = Module::where("slug", $slug)->first();
        return view("backend.module.update", compact("module", "pages"));
    }

    public function update(Request $request, $slug)
    {
        $str = Str::slug($request->title, '-');
        $module = Module::where("slug", $slug)->update([
            "title" => $request->input('title'),
            "description" => $request->input('description'),
            "page_id" => $request->input('page_id'),
            "slug" => $str,

        ]);

        if ($module) {
            return redirect("/admin/modules/list");
            return ["status" => "success", "message" => "Başarılı", "title" => "Başarılı"];

        } else {
            return ["status" => "error", "message" => "Başarısız", "title" => "Hatalı"];
        }
    }

    public function add(Request $request)
    {
        $module = new Module();

        $module->title = $request->title;
        $module->description = $request->description;
        $module->page_id = $request->page_id;
        $str = Str::slug($request->title, '-');
        $module->slug = $str;

        if ($module->save()) {
            return redirect("/admin/modules/list");
            return ["status" => "success", "message" => "Başarılı", "title" => "Başarılı"];

        } else {
            return ["status" => "error", "message" => "Başarısız", "title" => "Hatalı"];
        }
    }

    public function delete(Request $request)
    {
        $module = Module::where("slug", $request->slug)->delete();
        if ($module) {
            return redirect("/admin/modules/list");
            return ["status" => "success", "message" => "Başarılı", "title" => "Başarılı"];

        } else {
            return ["status" => "error", "message" => "Başarısız", "title" => "Hatalı"];
        }

    }
}
