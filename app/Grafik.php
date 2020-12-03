<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grafik extends Model
{
    protected $table = "grafiks";

    protected $fillable = ['id','judul_surat','jumlah','created_at',];
}
