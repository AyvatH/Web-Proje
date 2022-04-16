<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urunler extends Model
{
    use HasFactory;
    protected $table="urunler";
    protected $fillable=["id" ,"urun_adi","resim","model","stok","renk","fiyat","aciklama"];
    public $timestamps = false;
}
