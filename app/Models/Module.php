<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = "modules";
    protected $fillable = ["title", "name", "page_id", "description"];

    public function page()
    {
        return $this->hasOne(Page::class, "id", "page_id");
    }
    use HasFactory;
}
