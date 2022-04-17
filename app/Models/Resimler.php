<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resimler extends Model
{
    use HasFactory;
    protected $table="resimler";
    protected $fillable=["id" ,"resim1","resim2","resim3"];
    public $timestamps = false;
}
