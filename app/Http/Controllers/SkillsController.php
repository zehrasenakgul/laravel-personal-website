<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;


class SkillsController extends Controller
{
    public function addSkill()
    {
        return view("backend.skills.add");
    }
    public function show()
    {
        $skills = Skill::all();
        return view("backend.skills.list", compact("skills"));
    }
    public function updateSkill($slug)
    {
        $skill = Skill::where("slug", $slug)->first();
        return view("backend.skills.update", compact("skill"));
    }

    public function update(Request $request, $slug)
    {

        $str = Str::slug($request->name, '-');
        $skill = Skill::where("slug", $slug)->update([
            "name" => $request->input('name'),
            "image_link" => $request->input('image_link'),
            "url" => $request->input('url'),
            "slug" => $str,
        ]);

        if ($skill) {
            return redirect("/admin/skills/list");
            return ["status" => "success", "message" => "Başarılı", "title" => "Başarılı"];

        } else {
            return ["status" => "error", "message" => "Başarısız", "title" => "Hatalı"];
        }
    }
    public function add(Request $request)
    {
        $skill = new Skill();

        $skill->name = $request->name;
        $skill->image_link = $request->image_link;
        $skill->url = $request->url;
        $str = Str::slug($request->name, '-');
        $skill->slug = $str;

        if ($skill->save()) {
            return redirect("/admin/skills/list");
            return ["status" => "success", "message" => "Başarılı", "title" => "Başarılı"];

        } else {
            return ["status" => "error", "message" => "Başarısız", "title" => "Hatalı"];
        }
    }
    public function delete(Request $request)
    {
        $skill = Skill::where("slug", $request->slug)->delete();
        if ($skill) {
            return redirect("/admin/skills/list");
            return ["status" => "success", "message" => "Başarılı", "title" => "Başarılı"];

        } else {
            return ["status" => "error", "message" => "Başarısız", "title" => "Hatalı"];
        }

    }

}
