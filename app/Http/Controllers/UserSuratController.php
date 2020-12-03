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

class UserSuratController extends Controller
{
    public function buatsurat()
    {
		
		$penduduk =Penduduk::get();
   		return view('user.buatsurat.buatsurat',['penduduk'=>$penduduk]);
	} 


	public function buatsuratcovid()
    {
		$penduduk =Penduduk::get();
   		return view('user.buatsurat.buatsuratCovid',['penduduk'=>$penduduk]);
	} 
	public function buatsuratIzinlingkungan()
	{
		$penduduk =Penduduk::get();
		return view('user.buatsurat.buatSizinlingkungan',['penduduk'=>$penduduk]);
	 }
	 public function buatSKbelumnikah()
	{
		$penduduk =Penduduk::get();
		return view('user.buatsurat.buatSKbelumnikah',['penduduk'=>$penduduk]);
	 }
	 public function buatSKberdomisili()
    {
		$penduduk =Penduduk::get();
   		return view('user.buatsurat.buatSKberdomisili',['penduduk'=>$penduduk]);
	} 
	public function buatSKkematian()
	{
		$pmeninggal =Pmeninggal::get();
		return view('user.buatsurat.buatSKkematian',['pmeninggal'=>$pmeninggal]);
	 }
	 public function buatSKktpsementara()
	{
		$penduduk =Penduduk::get();
		return view('user.buatsurat.buatSKktpsementara',['penduduk'=>$penduduk]);
	 }
	 public function buatSKmenikah()
	 {
		 $penduduk =Penduduk::get();
			return view('user.buatsurat.buatSKmenikah',['penduduk'=>$penduduk]);
	 } 
	 public function buatSKtidakmampu()
	 {
		 $penduduk =Penduduk::get();
		 return view('user.buatsurat.buatSKtidakmampu',['penduduk'=>$penduduk]);
	  }
	  public function buatSKusaha()
	 {
		 $penduduk =Penduduk::get();
		 return view('user.buatsurat.buatSKusaha',['penduduk'=>$penduduk]);
	  }
	  public function buatSpengantarImunisasi()
	  {
		  $penduduk =Penduduk::get();
		  return view('user.buatsurat.buatSpengantarImunisasi',['penduduk'=>$penduduk]);
	   }
	   public function buatSPizinkeramaian()
	   {
		   $penduduk =Penduduk::get();
		   return view('user.buatsurat.buatSPizinkeramaian',['penduduk'=>$penduduk]);
		}
		
		public function buatSKakte()
		{
			$penduduk =Penduduk::get();
			return view('user.buatsurat.buatSKakte',['penduduk'=>$penduduk]);
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
			
	
			
			return redirect('/home/datasurat')->with('sukses', 'DataSurat Berhasil Ditambahkan');
		}


		public function datasurat()
	{
			$datasurat = \App\CetakSurat::all()->sortByDesc("created_at");
			return view('user.surat.datasurat',['datasurat' => $datasurat]);
				
	}

	public function lihatsurat($id,$nik,$judul_surat){
		$penduduk=DB::table('penduduks')->where('nik',$nik)->get();
		$surat=DB::table('cetak_surats')->where('id',$id)->first();


		if($judul_surat=="Surat Pengantar Covid-19"){
			return view('user.surat.pengantarcovid19_pdf',['surat'=>$surat],['penduduk'=>$penduduk]);

		 }else if($judul_surat=="Surat Keterangan Tidak Mampu"){
			return view('user.surat.SKtidakmampu',['surat'=>$surat],['penduduk'=>$penduduk]);
			
		}else if($judul_surat=="Surat Keterangan Berdomisili"){
			return view('user.surat.SKberdomisili',['surat'=>$surat],['penduduk'=>$penduduk]);

		}else if($judul_surat=="Surat Keterangan Usaha"){
			return view('user.surat.SKusaha',['surat'=>$surat],['penduduk'=>$penduduk]);

		}else if($judul_surat=="Surat Keterangan KTP Sementara"){
			return view('user.surat.SKktpsementara',['surat'=>$surat],['penduduk'=>$penduduk]);

		}else if($judul_surat=="Surat Pengantar Imunisasi"){
			return view('user.surat.Spengantarimunisasi',['surat'=>$surat],['penduduk'=>$penduduk]);

		}else if($judul_surat=="Surat Izin Lingkungan"){
			return view('user.surat.Sizinlingkungan',['surat'=>$surat],['penduduk'=>$penduduk]);

		}else if($judul_surat=="Surat Keterangan Kematian"){
			
			$pmeninggal=DB::table('pmeningggals')->where('nik',$nik)->get();
			return view('user.surat.SKkematian',['surat'=>$surat],['pmeninggal'=>$pmeninggal]);

		}else if($judul_surat=="Surat Keterangan Belum Menikah"){
			return view('user.surat.SKbelumnikah',['surat'=>$surat],['penduduk'=>$penduduk]);

		}else if($judul_surat=="Surat Pernyataan Izin Keramaian"){
			return view('user.surat.SPizinkeramaian',['surat'=>$surat],['penduduk'=>$penduduk]);

		}else if($judul_surat=="Surat Keterangan Menikah"){
			return view('user.surat.SKmenikah',['surat'=>$surat],['penduduk'=>$penduduk]);

		}else if($judul_surat=="Surat Keterangan Akte"){
			return view('user.surat.SKakte',['surat'=>$surat],['penduduk'=>$penduduk]);

		}
		
	}


	public function hapusdatasurat($id){
     
        CetakSurat::where('id',$id)->delete();
     
		return redirect('/home/datasurat')->with('sukses', 'Data Surat Di hapus');
    }
        


}