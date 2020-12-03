<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ErrorRequest;
use Illuminate\Support\Facades\DB;;
use App\Penduduk;
use App\Pmeninggal;
use App\Ppindah;

class UserPendudukController extends Controller
{
    //read penduduk
    public function penduduk(Request $request)
    {
     
        $penduduk = Penduduk::all();
      
        return view('user.penduduk.tampil',['penduduk' => $penduduk]);
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
     return view('user.penduduk.tambahPmeninggal',['penduduk'=>$penduduk]);
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

        return redirect('/home/tampilPmeninggal')->with('sukses', 'Data Penduduk Berhasil Dipindahkan');
       // return redirect()->back();
     }

      //read penduduk meninggal
    public function pmeninggal(Request $request)
    {
      
        $pmeninggal = Pmeninggal::all();
      
        // mengirim data penduduk ke view tampil
        return view('user.penduduk.tampilPmeninggal',['pmeninggal' => $pmeninggal]);
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
 
       return view('user.penduduk.tambahPpindah',['penduduk'=>$penduduk]);
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
  
          return redirect('/home/tampilPpindah')->with('sukses', 'Data Penduduk Berhasil Dipindahkan');
       }

          //read penduduk pindah
    public function ppindah(Request $request)
    { 
      
            $ppindah = Ppindah::all();
   

        // mengirim data penduduk pindah  pindahke view tampil
        return view('user.penduduk.tampilPpindah',['ppindah' => $ppindah]);
    }

    public function cetak()
    {
     
        $penduduk = Penduduk::all();
      
        return view('user.penduduk.cetak',['penduduk' => $penduduk]);
    }
  
}