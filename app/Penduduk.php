<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table="penduduks";

    protected $fillable = ['nik','nama','jenis_kelamin','tempat_lahir','tanggal_lahir','agama','pendidikan','jenis_pekerjaan','status_perkawinan','shdk','kewarganegaraan','nama_ayah','nama_ibu','nokk','dusun','rt','rw'];
}
 