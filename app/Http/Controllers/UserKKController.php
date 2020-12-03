<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Penduduk;

class UserKKController extends Controller
{
    public function kk()
    {
        $kepala=Penduduk::where('shdk','KEPALA KELUARGA')->get();
        return view('user.kk.kepala',['kepala' => $kepala]);
    }


    public function lihat_kk($nokk,$id)
    {	
    	$kepala = DB::table('penduduks')->where('id',$id)->get();
        $anggota = DB::table('penduduks')->where('nokk',$nokk)->get();
        $count =Penduduk::where('nokk',$nokk)->count();
    	return view('user.kk.kartu',['kepala'=>$kepala],['anggota'=>$anggota])->with('count', $count);
    }
}
