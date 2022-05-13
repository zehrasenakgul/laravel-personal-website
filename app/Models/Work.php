<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Modelleri tekil isimle oluşturuyoruz => migration dosyalarını çoğul isimler oluşturuyoruz.
class Work extends Model
{
    protected $table = "works";
    protected $fillable = ["title","content","slug","image"];


}
