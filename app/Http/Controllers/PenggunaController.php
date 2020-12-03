<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use App\User;
use App\UserRole;
use Hash;



class PenggunaController extends Controller
{
    public function pengguna()
    {
        
        $users = User::all();
        $admin=UserRole::all();
        return view('admin.pengguna.pengguna', compact('users','admin'));
  
    }
    public function penggunatambah()
    {
        $users = User::all();
        return view('admin.pengguna.tambahpengguna');
  
    }
    public function penggunatambahkeep(UserRequest $request)
    {
        //
        $huruf=strtoupper($request->name);
        
        $users = new User;
        $users->name = $huruf;
        $users->email = $request->get('email');
        $users->password = Hash::make ($request->get('password'));
        $users->save();

        return redirect('/pengguna')->with('sukses', 'Data Berhasil Ditambahkan');

    }

  
    public function editpengguna($id)
    {
        $users=User::where('id',$id)->get();
        return view('admin.pengguna.editpengguna', compact('users'));
    }

   
    public function penggunaupdate(Request $request, $id)
    {
      
        $request['password'] = Hash::make($request['password']);
        $validasi = $request->validate([
            'name' => 'required',
            'email' => 'required',
          'password' => 'required'
        ]);
        

        User::whereId($id)->update($validasi);

        return redirect('/pengguna')->with('sukses', 'Data berhasil di update');
    }


    public function penggunadelete($id)
    {
        User::where('id',$id)->delete();

        return redirect('/pengguna')->with('sukses', 'Data berhasil dihapus!');
    }

    public function namaAjax($id){
		$nama=User::where('id', $id)->first();
		return $nama;
    }
    


   
}
