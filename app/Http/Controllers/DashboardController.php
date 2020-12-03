<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penduduk;
use App\CetakSurat;
use App\User;
use Illuminate\Support\Facades\DB;;
use PDF;
use App\Grafik;


class DashboardController extends Controller
{
    public function index()
    {       
        $total_penduduk = Penduduk::all()->count();
        $total_keluarga = Penduduk::where('shdk','KEPALA KELUARGA')->count();
        $total_pengguna = User::all()->count();
        $total_cetak = CetakSurat::all()->count();

        $surat = \App\Grafik::all();

	//	MENYIAPKAN DATA UNTUK TAMPILAN ARAH CHART
		$opd=[];
		$jumlah=[];
	
		foreach ($surat as $p) {
			$judul_surat[] =$p->judul_surat;
			$jumlah[] = $p->jumlah;
		}
       
        return view ('admin.dashboard',['surat'=> $surat,'judul_surat'=>$judul_surat,'jumlah'=>$jumlah])->with('total_penduduk',$total_penduduk)->with('total_keluarga', $total_keluarga)->with('total_pengguna', $total_pengguna)->with('total_cetak', $total_cetak);
    }



    public function indexuser()
    {       
        $total_penduduk = Penduduk::all()->count();
        $total_keluarga = Penduduk::where('shdk','KEPALA KELUARGA')->count();
        $total_pengguna = User::all()->count();
        $total_cetak = CetakSurat::all()->count();
       
        $surat = \App\Grafik::all();

        //	MENYIAPKAN DATA UNTUK TAMPILAN ARAH CHART
            $opd=[];
            $jumlah=[];
        
            foreach ($surat as $p) {
                $judul_surat[] =$p->judul_surat;
                $jumlah[] = $p->jumlah;
            }
        return view ('user.dashboard',['surat'=> $surat,'judul_surat'=>$judul_surat,'jumlah'=>$jumlah])->with('total_penduduk',$total_penduduk)->with('total_keluarga', $total_keluarga)->with('total_pengguna', $total_pengguna)->with('total_cetak', $total_cetak);
    }

    
}
