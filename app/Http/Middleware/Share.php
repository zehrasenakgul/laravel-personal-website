<?php

namespace App\Http\Middleware;

use App\Models\Menu;
use App\Models\Setting;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class Share
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $data = [];
        $settings = Setting::all();
        $settingArr = [];
        foreach ($settings as $setting) {
            $settingArr[$setting->key] = $setting->value;
        }
        $menus = Menu::all();
        $data["settings"] = $settingArr;
        $data["menus"] = $menus;

        View::share($data);

        return $next($request);
    }
}
