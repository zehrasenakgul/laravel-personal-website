<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = "pages";
    protected $fillable = ["title", "name", "slug", "keywords", "description"];

    public function modules()
    {
        return $this->hasMany(Module::class, "page_id", "id");
    }
    use HasFactory;
}
