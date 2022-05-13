<?php

namespace App\Http\Controllers;
use App\Http\Requests\postRequest;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\Work;

class WorkController extends Controller
{
    public function addPortfolio()
    {
        return view("backend.portfolio.add");
    }
    public function listPortfolio()
    {
        $works = Work::all();
        return view("backend.portfolio.list",compact("works"));
    }
    public function updatePortfolio($slug)
    {
        $work = Work::where("slug",$slug)->first();
        return view("backend.portfolio.update",compact("work"));
    }

    public function post(postRequest $request)
    {
        // $request -> Validate([
        //     "title" => "required",
        //     "content" => "required",
        //     "image" => "required",
        // ]);

        $work = new Work();
        $filePath = Storage::disk('uploads')->put('images', $request->file("image"), 'public');
        $work->title = $request->input('title');
        $work->content = $request->input('content');
        $work->image = $filePath;
        $str = mb_strtolower($request->title);
        $work->slug = preg_replace('/\s+/', '-', $str);
        if($work->save())
    {
        return redirect("/admin/portfolio/list");
    }
    }

    public function update(Request $request,$slug)
    {

    $str = mb_strtolower($request->title);
    $work = Work::where("slug",$slug)->update([
        "title" => $request->input('title'),
        "content" => $request->input('content'),
        "image" => $request->input('image'),
        "slug" => preg_replace('/\s+/', '-', $str)
    ]);
    if($work)
    {
        return redirect("/admin/portfolio/list");
    }
    }
    
    public function delete(Request $request,$slug)
    {

    $str = mb_strtolower($request->title);
    $work = Work::where("slug",$slug)->delete();
    if($work)
    {
        return redirect("/admin/portfolio/list");
    }
    }

  
    public function workGetPortfolio()
    {
        //where("id","1")->get() or ->first  // all() gibi belirli veriyi de çekebiliriz
        $works = Work::all();
        return view("frontend.home.portfolio",compact("works"));
    }

    public function workDelete()
    {
        $work = Work::where("id","1")->delete();
        if($work)
        {
            return "Silme işlemi başarılı";
        }
        return "Silme işlemi başarısız";
        
    }
    public  function workUpdate()
    {
        $work = Work::where("id","7")->update([
            "title" => "Arkadaş Sepeti",
            "slug" => "arkadas-sepeti",
            "content" =>"https://www.arkadassepeti.com/",
            "image" => "https://bgcp.bionluk.com/images/portfolio/526x296/077af28d-04ee-43d3-91e0-f8f4e3a24b52.png"
        ]);

        if($work)
        {
            return "Güncelleme işlemi başarılı";
        }
        return "Güncelleme işlemi başarısız";
    }

}
