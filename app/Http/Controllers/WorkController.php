<?php

namespace App\Http\Controllers;

use App\Http\Requests\postRequest;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WorkController extends Controller
{
    public function addPortfolio()
    {
        return view("backend.portfolio.add");
    }
    public function listPortfolio()
    {
        $works = Work::all();
        return view("backend.portfolio.list", compact("works"));
    }
    public function updatePortfolio($slug)
    {
        $work = Work::where("slug", $slug)->first();
        return view("backend.portfolio.update", compact("work"));
    }

    public function post(postRequest $request)
    {
        $filePath = false;
        $work = new Work();

        if ($request->file("image") != null) {
            $filePath = Storage::disk('uploads')->put('images', $request->file("image"), 'public');
        }

        if ($filePath == false) {
            return redirect("/admin/portfolio/list");
            return ["status" => "error", "message" => "Başarısız", "title" => "Hatalı"];
        }

        $work->title = $request->input('title');
        $work->content = $request->input('content');
        $work->image = $filePath;
        $str = Str::slug($request->title, '-');
        $work->slug = $str;

        if ($work->save()) {
            return redirect("/admin/portfolio/list");
            return ["status" => "success", "message" => "Başarılı", "title" => "Başarılı"];

        } else {
            return redirect("/admin/portfolio/list");
            return ["status" => "error", "message" => "Başarısız", "title" => "Hatalı"];
        }
    }

    public function update(Request $request, $slug)
    {
        $oldWork = Work::where("slug", $slug)->first();
        $filePath = $oldWork->image;
        $str = Str::slug($request->title, '-');

        if ($request->file("image") != null) {
            Storage::disk('uploads')->delete($oldWork->image);
            $filePath = Storage::disk('uploads')->put('images', $request->file("image"), 'public');
        }

        $workUpdate = Work::where("slug", $slug)->update([
            "title" => $request->input('title'),
            "content" => $request->input('content'),
            "image" => $filePath,
            "slug" => $str,
        ]);

        if ($workUpdate) {
            return redirect("/admin/portfolio/list");
            return ["status" => "success", "message" => "Başarılı", "title" => "Başarılı"];

        } else {
            return redirect("/admin/portfolio/list");
            return ["status" => "error", "message" => "Başarısız", "title" => "Hatalı"];
        }
    }

    public function delete(Request $request, $slug)
    {
        $deleteWork = Work::where("slug", $slug)->first();

        Storage::disk('uploads')->delete($deleteWork->image);
        $deleteWork->delete();
        if ($deleteWork) {
            return redirect("/admin/portfolio/list");
            return ["status" => "success", "message" => "Başarılı", "title" => "Başarılı"];

        } else {
            return ["status" => "error", "message" => "Başarısız", "title" => "Hatalı"];
        }
    }

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
