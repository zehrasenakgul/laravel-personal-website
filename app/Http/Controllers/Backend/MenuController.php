<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function show()
    {
        $menus = Menu::all();
        return view("backend.menus.menus", compact("menus"));
    }

    public function update(Request $request)
    {
        $menu = Menu::where("name", $request->name)->update(["route" => $request->route]);
        if ($menu) {
            return "Başarılı";
        }
        return "hatalı";

    }

    public function add(Request $request)
    {
        $menu = new Menu();

        $menu->name = $request->name;
        $menu->route = $request->route;

        if ($menu->save()) {
            return ["status" => "success", "message" => "Menü başarıyla kaydedildi", "title" => "Başarılı"];
        } else {
            return ["status" => "error", "message" => "Menü kaydedilmedi", "title" => "Hatalı"];
        }

    }

    public function delete(Request $request)
    {
        $menu = Menu::where("name", $request->name)->delete();
        if ($menu) {
            return ["status" => "success", "message" => "Menü başarıyla silindi", "title" => "Başarılı"];
        } else {
            return ["status" => "error", "message" => "Menü silinmedi", "title" => "Hatalı"];
        }

    }
}
