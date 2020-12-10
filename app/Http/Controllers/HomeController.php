<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penduduk;

use App\Pmeninggal;
use App\CetakSurat;
use Illuminate\Support\Facades\DB;;
use PDF;
use Alert;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		Alert::success('pesan yang ingin disampaikan', 'Judul Pesan');
        return view('/home/dashboard');
    }
    


    public function cetaksurat($id,$nik,$judul_surat){
		
		$penduduk=DB::table('penduduks')->where('nik',$nik)->get();
		$surat=DB::table('cetak_surats')->where('id',$id)->first();

		if($judul_surat=="Surat Pengantar Covid-19"){
			return view('surat.pengantarcovid19_cetak',compact('surat','penduduk'));
			/*$pdf = PDF::loadview('surat.pengantarcovid19_cetak',compact('surat','penduduk'));
			return $pdf->stream();*/

		 }else if($judul_surat=="Surat Izin Lingkungan"){
			 return view('surat.Sizinlingkungan_cetak',['surat'=>$surat],['penduduk'=>$penduduk]);
			/*$pdf = PDF::loadview('surat.Sizinlingkungan_cetak',['surat'=>$surat],['penduduk'=>$penduduk]);
			return $pdf->stream();*/
		}else if($judul_surat=="Surat Keterangan Belum Nikah"){
			return view('surat.SKbelumnikah_cetak',['surat'=>$surat],['penduduk'=>$penduduk]);
			/*$pdf = PDF::loadview('surat.SKbelumnikah_cetak',['surat'=>$surat],['penduduk'=>$penduduk]);
			return $pdf->stream();*/
		}
		else if($judul_surat=="Surat Keterangan Berdomisili"){
			return view('surat.SKberdomisili_cetak',['surat'=>$surat],['penduduk'=>$penduduk]);
			/*$pdf = PDF::loadview('surat.SKberdomisili_cetak',['surat'=>$surat],['penduduk'=>$penduduk]);
			return $pdf->stream();*/
		}	
		else if($judul_surat=="Surat Keterangan Kematian"){
			$pmeninggal=DB::table('pmeningggals')->where('nik',$nik)->get();
			return view('surat.SKkematian_cetak',['surat'=>$surat],['pmeninggal'=>$pmeninggal]);
			/*$pdf = PDF::loadview('surat.SKkematian_cetak',['surat'=>$surat],['pmeninggal'=>$pmeninggal]);
			return $pdf->stream();*/
		}	
		else if($judul_surat=="Surat Keterangan KTP Sementara"){
			return view('surat.SKktpsementara_cetak',['surat'=>$surat],['penduduk'=>$penduduk]);
			/*$pdf = PDF::loadview('surat.SKktpsementara_cetak',['surat'=>$surat],['penduduk'=>$penduduk]);
			return $pdf->stream();*/
		}	
		else if($judul_surat=="Surat Keterangan Menikah"){
			return view('surat.SKmenikah_cetak',['surat'=>$surat],['penduduk'=>$penduduk]);
			/*$pdf = PDF::loadview('surat.SKmenikah_cetak',['surat'=>$surat],['penduduk'=>$penduduk]);
			return $pdf->stream();*/
		}
		else if($judul_surat=="Surat Keterangan Tidak Mampu"){
			return view('surat.SKtidakmampu_cetak',['surat'=>$surat],['penduduk'=>$penduduk]);
			/*$pdf = PDF::loadview('surat.SKtidakmampu_cetak',['surat'=>$surat],['penduduk'=>$penduduk]);
			return $pdf->stream();*/
		}
		else if($judul_surat=="Surat Keterangan Usaha"){
			return view('surat.SKusaha_cetak',['surat'=>$surat],['penduduk'=>$penduduk]);
			/*$pdf = PDF::loadview('surat.SKusaha_cetak',['surat'=>$surat],['penduduk'=>$penduduk]);
			return $pdf->stream();*/
		}
		else if($judul_surat=="Surat Pengantar Imunisasi"){
			return view('surat.Spengantarimunisasi_cetak',['surat'=>$surat],['penduduk'=>$penduduk]);
			// $pdf = PDF::loadview('surat.Spengantarimunisasi_cetak',['surat'=>$surat],['penduduk'=>$penduduk]);
			// return $pdf->stream();
		}
		else if($judul_surat=="Surat Pernyataan Izin Keramaian"){
			return view('surat.SPizinkeramaian_cetak',['surat'=>$surat],['penduduk'=>$penduduk]);
			/*$pdf = PDF::loadview('surat.SPizinkeramaian_cetak',['surat'=>$surat],['penduduk'=>$penduduk]);
			return $pdf->stream();*/
		}
		else if($judul_surat=="Surat Keterangan Akte"){
			return view('surat.SKakte_cetak',['surat'=>$surat],['penduduk'=>$penduduk]);
			/*$pdf = PDF::loadview('surat.SKakte_cetak',['surat'=>$surat],['penduduk'=>$penduduk]);
			return $pdf->stream();*/
		}
			
	}
}
