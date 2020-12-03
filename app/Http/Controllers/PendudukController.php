<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ErrorRequest;
use Illuminate\Support\Facades\DB;;
use App\Penduduk;
use App\Pmeninggal;
use App\Ppindah;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;

class PendudukController extends Controller
{
    //read penduduk
    public function penduduk(Request $request)
    {
     
        $penduduk = Penduduk::all();
      
        return view('admin.penduduk.tampil',['penduduk' => $penduduk]);
    }



    //create    
    public function tambah()
    {
        // memanggil view tambah
        return view('admin.penduduk.tambah');
    
    }
    
    //keep data setelah create
    public function keep(ErrorRequest $request)
    {

       $huruf=strtoupper($request->nama);
        // insert data ke table pegawai
        Penduduk::create([
            'nik'=>$request ->nik,
            'nama'=>$huruf,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'agama'=>$request->agama,
            'pendidikan'=>$request->pendidikan,
            'jenis_pekerjaan'=>$request->jenis_pekerjaan,
            'status_perkawinan'=> $request->status_perkawinan,
            'shdk'=>$request->shdk,
            'kewarganegaraan'=>$request->kewarganegaraan,
            'nama_ayah'=>$request->nama_ayah,
            'nama_ibu'=>$request->nama_ibu,
            'nokk'=>$request->nokk,
           'dusun'=>$request->dusun,
           'rt'=>$request->rt,
           'rw'=>$request->rw

        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/admin/tampil')->with('sukses', 'Data Penduduk Berhasil Ditambahkan');
    
    }
    
    public function edit($id)
    {
        $penduduk=Penduduk::where('id',$id)->get();
        return view('admin.penduduk.edit',['penduduk'=>$penduduk]);
    }
    public function update($id, Request $request)
    {
        $huruf=strtoupper($request->nama);
        $penduduk=Penduduk::find($id);
        $penduduk->nik =$request->nik;
        $penduduk->nama =$huruf;
        $penduduk->jenis_kelamin=$request->jenis_kelamin;
        $penduduk->tempat_lahir=$request->tempat_lahir;
        $penduduk->tanggal_lahir=$request->tanggal_lahir;
        $penduduk->agama=$request->agama;
        $penduduk->pendidikan=$request->pendidikan;
        $penduduk->jenis_pekerjaan=$request->jenis_pekerjaan;
        $penduduk->status_perkawinan=$request->status_perkawinan;
        $penduduk->shdk=$request->shdk;
        $penduduk->kewarganegaraan=$request->kewarganegaraan;
        $penduduk->nama_ayah=$request->nama_ayah;
        $penduduk->nama_ibu=$request->nama_ibu;
        $penduduk->nokk=$request->nokk;
        $penduduk->dusun=$request->dusun;
        $penduduk->rt=$request->rt;
        $penduduk->rw=$request->rw;
        $penduduk->save();
        return redirect('/admin/tampil')->with('sukses', 'Data Berhasil Diedit');;

    }

    //tambah penduduk meninggal
    public function tambahPmeninggal($id)
    {
        $penduduk=Penduduk::find($id);
        $penduduk->nik;
        $penduduk->nama;
        $penduduk->jenis_kelamin;
        $penduduk->tempat_lahir;
        $penduduk->tanggal_lahir;
        $penduduk->agama;
        $penduduk->pendidikan;
        $penduduk->jenis_pekerjaan;
        $penduduk->status_perkawinan;
        $penduduk->shdk;
        $penduduk->kewarganegaraan;
        $penduduk->nama_ayah;
        $penduduk->nama_ibu;
        $penduduk->nokk;
        $penduduk->dusun;
        $penduduk->rt;
        $penduduk->rw;
     //   $penduduk->save();
     return view('admin.penduduk.tambahPmeninggal',['penduduk'=>$penduduk]);
    }

    //pindah ke pmeninggal
    public function masuk_pmeninggal($id, Request $request){


        $penduduk=Penduduk::find($id);
        
        Pmeninggal::create([
            'nik'=>$request->nik,
            'nama'=>$request->nama,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'agama'=>$request->agama,
            'pendidikan'=>$request->pendidikan,
            'jenis_pekerjaan'=>$request->jenis_pekerjaan,
            'status_perkawinan'=> $request->status_perkawinan,
            'shdk'=>$request->shdk,
            'kewarganegaraan'=>$request->kewarganegaraan,
            'nama_ayah'=>$request->nama_ayah,
            'nama_ibu'=>$request->nama_ibu,
            'nokk'=>$request->nokk,
           'dusun'=>$request->dusun,
           'rt'=>$request->rt,
           'rw'=>$request->rw,
           'tanggal_meninggal'=>$request->tanggal_meninggal
        ]);

        Penduduk::where('id',$id)->delete();

        return redirect('/admin/tampilPmeninggal')->with('sukses', 'Data Berhasil dipindahkan');
       // return redirect()->back();
     }

      //read penduduk meninggal
    public function pmeninggal(Request $request)
    {
      
        $pmeninggal = Pmeninggal::all();
      
        // mengirim data penduduk ke view tampil
        return view('admin.penduduk.tampilPmeninggal',['pmeninggal' => $pmeninggal]);
    }


      //tambah penduduk pindah
      public function tambahPpindah($id)
      {
          $penduduk=Penduduk::find($id);
          $penduduk->nik;
          $penduduk->nama;
          $penduduk->jenis_kelamin;
          $penduduk->tempat_lahir;
          $penduduk->tanggal_lahir;
          $penduduk->agama;
          $penduduk->pendidikan;
          $penduduk->jenis_pekerjaan;
          $penduduk->status_perkawinan;
          $penduduk->shdk;
          $penduduk->kewarganegaraan;
          $penduduk->nama_ayah;
          $penduduk->nama_ibu;
          $penduduk->nokk;
          $penduduk->dusun;
          $penduduk->rt;
          $penduduk->rw;
 
       return view('admin.penduduk.tambahPpindah',['penduduk'=>$penduduk]);
      }


      public function masuk_ppindah($id, Request $request){

          $penduduk=Penduduk::find($id);
          
          Ppindah::create([
            'nik'=>$request->nik,
            'nama'=>$request->nama,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'agama'=>$request->agama,
            'pendidikan'=>$request->pendidikan,
            'jenis_pekerjaan'=>$request->jenis_pekerjaan,
            'status_perkawinan'=> $request->status_perkawinan,
            'shdk'=>$request->shdk,
            'kewarganegaraan'=>$request->kewarganegaraan,
            'nama_ayah'=>$request->nama_ayah,
            'nama_ibu'=>$request->nama_ibu,
            'nokk'=>$request->nokk,
           'dusun'=>$request->dusun,
           'rt'=>$request->rt,
           'rw'=>$request->rw,
           'tanggal_pindah'=>$request->tanggal_pindah
          ]);
  
          Penduduk::where('id',$id)->delete();
  
          return redirect('/admin/tampilPpindah')->with('sukses', 'Data Berhasil dipindahkan');;
       }

          //read penduduk pindah
    public function ppindah(Request $request)
    { 
      
            $ppindah = Ppindah::all();
   

        // mengirim data penduduk pindah  pindahke view tampil
        return view('admin.penduduk.tampilPpindah',['ppindah' => $ppindah]);
    }


    public function hapus_meninggal($nik)
    {
        Pmeninggal::where('nik',$nik)->delete();

        return redirect('/admin/tampilPmeninggal')->with('sukses', 'Data berhasil dihapus!');
    }

    public function cetak(Request $request)
    {
        $penduduk = Penduduk::all();
        $pdf = PDF::loadview('admin.penduduk.cetak',['penduduk'=>$penduduk]);
			return $pdf->setPaper('F4','landscape')->stream();
	}

 
  
}