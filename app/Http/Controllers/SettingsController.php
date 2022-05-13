<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function show()
    {
        $settings = Setting::all();
        return view("backend.settings.settings", compact("settings"));
    }

    public function update(Request $request)
    {
        $setting = Setting::where("key", $request->key)->update(["value" => $request->value]);
        if ($setting) {
            return "Başarılı";
        }
        return "hatalı";

    }

    public function add(Request $request)
    {
        $setting = new Setting();

        $setting->key = $request->key;
        $setting->value = $request->value;

        if ($setting->save()) {
            return ["status" => "success", "message" => "Ayar başarıyla kaydedildi", "title" => "Başarılı"];
        } else {
            return ["status" => "error", "message" => "Ayar kaydedilmedi", "title" => "Hatalı"];
        }

    }

    public function delete(Request $request)
    {
        $setting = Setting::where("key", $request->key)->delete();
        if ($setting) {
            return ["status" => "success", "message" => "Ayar başarıyla silindi", "title" => "Başarılı"];
        } else {
            return ["status" => "error", "message" => "Ayar silinmedi", "title" => "Hatalı"];
        }

    }
}
