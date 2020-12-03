<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ErrorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nik'=>'required|numeric|digits:16|unique:penduduks',
            'nama'=>'required',
            'jenis_kelamin'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=> 'required',
            'agama'  =>'required',
            'pendidikan' =>  'required',
            'jenis_pekerjaan'  =>'required',
            'status_perkawinan'   => 'required',
            'shdk'  =>'required',
            'kewarganegaraan'     =>'required',
            'nama_ayah'   =>'required',
            'nama_ibu'   =>'required',
            'nokk'      =>'required|numeric|digits:16',
           'dusun'     =>'required',
           'rt'     =>'required|numeric|digits:3',
           'rw'   =>'required|numeric|digits:3',
        ];
    }

    public function messages()
    {
        return [
        'nik.unique' => 'NIK Sudah Digunakan',
        'nik.digits' => 'Nik harus 16 Karakter',
        'nik.numeric' => 'NIK harus berupa Angka ',
        'nokk.digits' => 'Nomor KK harus 16 Karakter',
        'nokk.numeric' => ' Nomor KK harus berupa Angka ',
           

        ];
    }
}
