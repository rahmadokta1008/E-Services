<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CetakSurat extends Model
{
    protected $table="cetak_surats";
    //  protected $primarykey="id_cetak";
    protected $fillable = ['judul_surat','nama','nik','nosurat','tglsurat','keperluan','pihakkedua','usaha','noktp','notlp','alamat','tempat','hari','tgl','tahun','hubungan','statusnikah','hiburan','sebabninggal'];
  
}
