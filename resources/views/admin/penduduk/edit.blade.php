@extends('layouts.appuser')

@section('content')

<HTML>
<head>
</head>
<div class="card mt-0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Penduduk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrap.com/bootsrap/4.2.1/css/bootstrap.min.css">

<body>
<div class="container">
<a href="/admin/tampil" class="btn btn-primary btn-sm"> Kembali</a>
<div class="card-header text-center">
<h5>Edit Data Penduduk</h5>
</div>

<div class="card-body" width="50%">



    @foreach($penduduk as $p)

        <form method="post" action="/admin/tampil/update/{{$p->id}}">
        
 
        {{ csrf_field() }}
      

                      
        <div class="row"> 
                         <div class="form-group col-sm-4">
                            <label>NIK</label>
                            <input  type="text" name="nik" class="form-control" placeholder="Nik" value=" {{ $p->nik }}" >
                            @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group col-sm-4">
                            <label>Nama</label>
                            <input  type="text" name="nama" class="form-control" placeholder="Nama p" value=" {{ $p->nama }}" >
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Jenis Kelamin</label>
                             <select name="jenis_kelamin" class="form-control"  required="required" value="{{ old('jenis_kelamin') }}">
                                <option value="{{ $p->jenis_kelamin}}">{{ $p->jenis_kelamin}}</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select> </br>
                            @if($errors->has('jenis_kelamin'))
                                <div class="text-danger">
                                    {{ $errors->first('jenis_kelamin')}}
                                </div>
                            @endif
                        </div>
                        </div>
                <div class="row"> 
                        <div class="form-group col-sm-4">
                            <label>Tempat Lahir</label>
                            <input  type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value=" {{ $p->tempat_lahir}}" >
                            @if($errors->has('tempat_lahir'))
                                <div class="text-danger">
                                    {{ $errors->first('tenpat_lahir')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Tanggal Lahir</label>
                            <input  type="text" name="tanggal_lahir" class="form-control"  value=" {{ $p->tanggal_lahir}}" >
                            @if($errors->has('tanggal_lahir'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal_lahir')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Agama</label>
                            <select name="agama" class="form-control"  required="required" value="{{ old('$p->agama')}}">
                                <option value="{{$p->agama}}">{{$p->agama}}</option>
                                <option value="ISLAM">ISLAM</option>
                                <option value="KRISTEN">KRISTEN</option>
                                <option value="KATHOLIK">KATHOLIK</option>
                                <option value="HINDU">HINDU</option>
                                <option value="BUDHA">BUDHA</option>
                                <option value="KONGHUCU">KONGHUCU</option>
                                <option value="KEPERCAYAAN TERHADAP TUHAN YME / LAINYA">KEPERCAYAAN TERHADAP TUHAN YME / LAINYA</option>
                            </select>
                            @if($errors->has('agama'))
                                <div class="text-danger">
                                    {{ $errors->first('agama')}}
                                </div>
                            @endif
                        </div>
                        </div>
                  <div class="row"> 
                         <div class="form-group col-sm-4">
                            <label>Pendidikan</label>
                            <select name="pendidikan" class="form-control"  required="required" value="{{ old('pendidikan') }}">
                                <option value="{{$p->pendidikan}}">{{$p->pendidikan}}</option>
                                <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                                <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                                <option value="TAMAT SD/SEDERAJAT">TAMAT SD/SEDERAJAT</option>
                                <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                                <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                                <option value="DIPLOMA I/II">DIPLOMA I/II</option>
                                <option value="AKADEMI/DIPLOMA III/S.MUDA">AKADEMI/DIPLOMA III/S.MUDA</option>
                                <option value="DIPLOMA IV/STRATA I">DIPLOMA IV/STRATA I</option>
                                <option value="STRATA II">STRATA II</option>
                                <option value="STRATA III">STRATA III</option>
                            </select>
                            @if($errors->has('pendidikan'))
                                <div class="text-danger">
                                    {{ $errors->first('pendidikan')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Jenis Pekerjaan</label>
                            <input  type="text" name="jenis_pekerjaan" class="form-control" placeholder="Jenis Pekerjaan" value=" {{ $p->jenis_pekerjaan}}" >
                            @if($errors->has('jenis_pekerjaan'))
                                <div class="text-danger">
                                    {{ $errors->first('jenis_pekerjaan')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Status Perkawinan</label>
                           
                            <select name="status_perkawinan" class="form-control"  required="required" value="{{ old('status_perkawinan') }}">
                                <option value="{{$p->status_perkawinan}}">{{$p->status_perkawinan}}</option>
                                <option value="BELUM KAWIN">BELUM KAWIN</option>
                                <option value="KAWIN">KAWIN</option>
                                <option value="CERAI HIDUP">CERAI HIDUP</option>
                                <option value="CERAI MATI">CERAI MATI</option>
                            </select>
                            @if($errors->has('status_perkawinan'))
                                <div class="text-danger">
                                    {{ $errors->first('status_perkawinan')}}
                                </div>
                            @endif
                        </div>
                        </div>
<div class="row">            <div class="form-group col-sm-3">
                            <label>SHDK</label>
                            <select name="shdk" class="form-control"  required="required" value="{{ old('shdk') }}">
                                <option value="{{ $p->shdk}}">{{ $p->shdk}}</option>
                                <option value="KEPALA KELUARGA">KEPALA KELUARGA</option>
                                <option value="SUAMI">SUAMI</option>
                                <option value="ISTRI">ISTRI</option>
                                <option value="ANAK">ANAK</option>
                                <option value="MENANTU">MENANTU</option>
                                <option value="CUCU">CUCU</option>
                                <option value="ORANGTUA">ORANGTUA</option>
                                <option value="MERTUA">MERTUA</option>
                                <option value="FAMILI">FAMILI</option>
                                <option value="PEMBANTU">PEMBANTU</option>
                                <option value="LAINNYA">LAINNYA</option>
                            </select>
                            @if($errors->has('shdk'))
                                <div class="text-danger">
                                    {{ $errors->first('shdk')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-sm-3">
                            <label>Kewarganegaraan</label>
                            <select name="kewarganegaraan" class="form-control"  required="required" value="{{ old('kewarganegaraan') }}">
                                <option value="{{ $p->kewarganegaraan}} ">{{ $p->kewarganegaraan}}</option>
                                <option value="WNI">WNI</option>
                                <option value="WNA<">WNA</option>
                            </select>
                            @if($errors->has('kewarganegaraan'))
                                <div class="text-danger">
                                    {{ $errors->first('kewarganegaraan')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-sm-3">
                            <label>Nama Ayah</label>
                            <input  type="text" name="nama_ayah"  class="form-control" placeholder="Nama Ayah" value=" {{ $p->nama_ayah}}" >
                            @if($errors->has('nama_ayah'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_ayah')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-sm-3">
                            <label>Nama Ibu</label>
                            <input  type="text" name="nama_ibu"  class="form-control" placeholder="Nama Ibu" value=" {{ $p->nama_ibu}}" >
                            @if($errors->has('nama_ibu'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_ibu')}}
                                </div>
                            @endif
                        </div>
             </div>
  <div class="row"> 
                        <div class="form-group col-sm-3">
                            <label>No KK</label>
                            <input  type="text" name="nokk"  class="form-control" placeholder="No KK" value=" {{ $p->nokk}}" >
                            @if($errors->has('nokk'))
                                <div class="text-danger">
                                    {{ $errors->first('nokk')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-sm-3">
                            <label>Dusun</label>
                            <select name="dusun" class="form-control" required="required" value="{{ old('dusun') }}"> 
                                <option value="{{ $p->dusun}}">{{ $p->dusun}}</option>
                                <option value="Dusun Trikaton">Dusun Trikaton</option>
                                <option value="Dusun Digul">Dusun Digul</option>
                                <option value="Dusun Tanjung Agung">Dusun Tanjung Agung</option>
                                <option value="Dusun Tanjung Kejawen">Dusun Tanjung Kejawen</option>
                                <option value="Dusun Irian I">Dusun Irian I</option>
                                <option value="Dusun Irian II">Dusun Irian II</option>
                                <option value="Dusun Sukajadi">Dusun Sukajadi</option>
                                <option value="Dusun Mulyokaton">Dusun Mulyokaton</option>
                            </select>
                            @if($errors->has('dusun'))
                                <div class="text-danger">
                                    {{ $errors->first('dusun')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-sm-3">
                            <label>RT</label>
                            <select name="rt" class="form-control"  required="required" value="{{ old('rt') }}">
                                    <option value="{{ $p->rt}}">{{ $p->rt}}</option>
                                    <option value="001">001</option>
                                    <option value="002">002</option>
                                    <option value="003">003</option>
                                    <option value="004">004</option>
                                    <option value="005">005</option>
                                    <option value="006">006</option>
                                    <option value="007">007</option>
                                    <option value="008">008</option>
                                    <option value="009">009</option>
                                    <option value="010">010</option>
                                    <option value="011">011</option>
                                    <option value="012">012</option>
                                    <option value="013">013</option>
                                    <option value="014">014</option>
                                    <option value="015">015</option>
                                    <option value="016">016</option>
                                    <option value="017">017</option>
                                    <option value="018">018</option>
                                    <option value="019">019</option>
                                    <option value="020">020</option>
                                    <option value="021">021</option>
                                    <option value="022">022</option>
                                    <option value="023">023</option>
                                    <option value="024">024</option>
                                    <option value="025">025</option>
                                    <option value="026">026</option>
                                    <option value="027">027</option>
                                    <option value="028">028</option>
                                    <option value="029">029</option>
                                    <option value="030">030</option>
                                    <option value="031">031</option>
                                    <option value="032">032</option>
                                </select>
                                </div>

                        <div class="form-group col-sm-3">
                            <label>RW</label>
                            <select name="rw" class="form-control"  required="required" value="{{ old('rw') }}">
                                <option value="{{ $p->rw}}">{{ $p->rw}}</option>
                                <option value="001">001</option>
                                <option value="002">002</option>
                                <option value="003">003</option>
                                <option value="004">004</option>
                                <option value="005">005</option>
                                <option value="006">006</option>
                                <option value="007">007</option>
                                <option value="008">008</option>
                                <option value="009">009</option>
                                <option value="010">010</option>
                                <option value="011">011</option>
                                <option value="012">012</option>
                                <option value="013">013</option>
                                <option value="014">014</option>
                                <option value="015">015</option>
                                <option value="016">016</option>
                                <option value="017">017</option>
                                <option value="018">018</option>
                            </select>
                            @if($errors->has('rw'))
                                <div class="text-danger">
                                    {{ $errors->first('rw')}}
                                </div>
                            @endif
                        </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-sm" value="Simpan" style="margin-left:90%;">
                        </div>


        </form>
        @endforeach
        </div>
          </div>
</body>
</html>
@stop