<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SuratRequest;
use Illuminate\Support\Facades\DB;;
use App\Penduduk;
use App\Pmeninggal;
use App\CetakSurat;
use PDF;
use RealRashid\SweetAlert\Facades\Alert;

class SuratController extends Controller
{
    public function buatsurat()
    {
		
		$penduduk =Penduduk::get();
   		return view('admin.buatsurat.buatsurat',['penduduk'=>$penduduk]);
	} 



	 public function buatSKtidakmampu()
	 {
		 $penduduk =Penduduk::get();
		 return view('admin.buatsurat.buatSKtidakmampu',['penduduk'=>$penduduk]);
	  }
	 



	public function namaAjax($id){
		$nama= Penduduk::where('nik', $id)->first();
		return $nama;
	}
	public function namaAjax2($id){
		$nama= Pmeninggal::where('nik', $id)->first();
		return $nama;
    }

	
	public function buatsuratproses($nik, SuratRequest $request){

        CetakSurat::create([
				'judul_surat'=>$request->judul_surat,
				'nama'=>$request->nama,
				'nik'=>$request->nik,
				'nosurat'=>$request->nosurat,
				'tglsurat'=>$request->tglsurat,
				'keperluan'=>$request->keperluan,
				'pihakkedua'=>$request->pihakkedua,
				'usaha'=>$request->usaha,
				'noktp'=>$request->noktp,
				'notlp'=>$request->notlp,
				'alamat'=>$request->alamat,
				'tempat'=>$request->tempat,
				'hari'=>$request->hari,
				'tgl'=>$request->tgl,
				'tahun'=>$request->tahun,
				'hubungan'=>$request->hubungan,
				'statusnikah'=>$request->statusnikah,
				'hiburan'=>$request->hiburan,
				'sebabninggal'=>$request->sebabninggal
			]);
			
	
			return redirect('/admin/datasurat')->with('sukses', 'Data Surat Berhasil Ditambahkan');
		
		}

	public function datasurat()
	{
			$datasurat = \App\CetakSurat::all()->sortByDesc('created_at');
			//$datasurat = DB::table('cetak_surats')->all();
			return view('admin.surat.datasurat',['datasurat' => $datasurat]);
				
	}

	public function lihatsurat($id,$nik,$judul_surat){
		$penduduk=DB::table('penduduks')->where('nik',$nik)->get();
		$surat=DB::table('cetak_surats')->where('id',$id)->first();


		if($judul_surat=="Surat Pengantar Covid-19"){
			return view('admin.surat.pengantarcovid19_pdf',['surat'=>$surat],['penduduk'=>$penduduk]);

		 }else if($judul_surat=="Surat Keterangan Tidak Mampu"){
			return view('admin.surat.SKtidakmampu',['surat'=>$surat],['penduduk'=>$penduduk]);
			
		}else if($judul_surat=="Surat Keterangan Berdomisili"){
			return view('admin.surat.SKberdomisili',['surat'=>$surat],['penduduk'=>$penduduk]);

		}else if($judul_surat=="Surat Keterangan Usaha"){
			return view('admin.surat.SKusaha',['surat'=>$surat],['penduduk'=>$penduduk]);

		}else if($judul_surat=="Surat Keterangan KTP Sementara"){
			return view('admin.surat.SKktpsementara',['surat'=>$surat],['penduduk'=>$penduduk]);

		}else if($judul_surat=="Surat Pengantar Imunisasi"){
			return view('admin.surat.Spengantarimunisasi',['surat'=>$surat],['penduduk'=>$penduduk]);

		}else if($judul_surat=="Surat Izin Lingkungan"){
			return view('admin.surat.Sizinlingkungan',['surat'=>$surat],['penduduk'=>$penduduk]);

		}else if($judul_surat=="Surat Keterangan Kematian"){
			$pmeninggal=DB::table('pmeningggals')->where('nik',$nik)->get();
			return view('admin.surat.SKkematian',['surat'=>$surat],['pmeninggal'=>$pmeninggal]);

		}else if($judul_surat=="Surat Keterangan Belum Menikah"){
			return view('admin.surat.SKbelumnikah',['surat'=>$surat],['penduduk'=>$penduduk]);

		}else if($judul_surat=="Surat Pernyataan Izin Keramaian"){
			return view('admin.surat.SPizinkeramaian',['surat'=>$surat],['penduduk'=>$penduduk]);

		}else if($judul_surat=="Surat Keterangan Menikah"){
			return view('admin.surat.SKmenikah',['surat'=>$surat],['penduduk'=>$penduduk]);

		}else if($judul_surat=="Surat Keterangan Akte"){
			return view('admin.surat.SKakte',['surat'=>$surat],['penduduk'=>$penduduk]);

		}
		
	}


	
	
    public function hapusdatasurat($id){
     
        CetakSurat::where('id',$id)->delete();
     
		return redirect('/admin/datasurat')->with('sukses', 'Data Surat Berhasil Dihapus');
    }
        

}
