<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\UserRole;

class PengelolaController extends Controller
{

    public function pengelola(Request $request)
    {
        
        $cek= UserRole::all('user_id');

        if($request->user_id==$cek){
            return redirect('/pengguna')->with('gagal', 'Pengguna Telah Menjadi Pengelola');
        }else{
            UserRole::create([
                'user_id'=>$request->user_id,
                'role_id'=>$request->role_id,
                'name'=>$request->name,
                'email'=>$request->email
            ]);
            return redirect('/pengguna')->with('sukses', 'Pengguna Berhasil Ditambahkan');

        }

    }
   
    public function pengelolahapus($user_id)
    {
        UserRole::where('user_id',$user_id)->delete();
    
        return redirect('/pengguna')->with('sukses', 'Data berhasil dihapus!');
    }
        

}