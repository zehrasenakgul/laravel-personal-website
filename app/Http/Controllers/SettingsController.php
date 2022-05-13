<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingsController extends Controller
{
    public function show()
    {
        $settings = Setting::all();
        return view("backend.settings.settings",compact("settings"));
    }

    public function update(Request $request)
    {
      $setting = Setting::where("key",$request->key)->update(["value"=>$request->value]);
      if($setting)
      {
          return "Başarılı";
      }
      return "hatalı";

    }
}
