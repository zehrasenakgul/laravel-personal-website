<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settingArr = [
            [
                "key" => "logo",
                "value" => null
            ],
            [
                "key" => "title",
                "value" => "Zehra Sena Akgül | Kişisel Portfolyo"
            ],
            [
                "key" => "description",
                "value" => "Full Stack Developer"
            ],
            [
                "key" => "author",
                "value" => "Zehra Sena Akgül"
            ],
            [
                "key" => "mail",
                "value" => "zehra@elmaligroup.com"
            ]
            ];

        DB::table("settings")->insert($settingArr);
    }
}