@extends('layouts.appuser2')

@section('content')

<HTML>
<head>
</head>
<style>
label {
    float: left;
    width: 200px;
    padding-right: 24px;
}
</style>


<div class="card mt-0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>detail penduduk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrap.com/bootsrap/4.2.1/css/bootstrap.min.css">

<body>
<div class="container">
<!--<div class="card mt-5"> -->
<a href="/home/tampil" class="btn btn-primary btn-sm"> Kembali</a>
<div class="card-header text-center">
<h5>Tambah Data Penduduk Meninggal</h5>
</div>

<div class="card-body" width="50%">


       <form method="post" action="/home/tambahPmeninggal/masuk_pmeninggal/{{$penduduk->id}}">
       

       {{ csrf_field() }}
        {{ method_field('PUT') }}

        <div class="row"> 
                         <div class="form-group col-sm-4">
                            <label>NIK</label>
                            <input style="width:80%;" type="text" name="nik" class="form-control" value=" {{ $penduduk->nik }}" readonly>
                            @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group col-sm-4">
                            <label>Nama</label>
                            <input style="width:80%;" type="text" name="nama" class="form-control" placeholder="Nama penduduk" value=" {{ $penduduk->nama }}" readonly>
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Jenis Kelamin</label>
                            <input style="width:80%;" type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin" value=" {{ $penduduk->jenis_kelamin}}" readonly>
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
                            <input style="width:80%;" type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value=" {{ $penduduk->tempat_lahir}}" readonly>
                            @if($errors->has('tempat_lahir'))
                                <div class="text-danger">
                                    {{ $errors->first('tenpat_lahir')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Tanggal Lahir</label>
                            <input style="width:80%;" type="text" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" value=" {{ $penduduk->tanggal_lahir}}" readonly>
                            @if($errors->has('tanggal_lahir'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal_lahir')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Agama</label>
                            <input style="width:80%;" type="text" name="agama" class="form-control" placeholder="Agama" value=" {{ $penduduk->agama}}" readonly>
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
                            <input style="width:80%;" type="text" name="pendidikan" class="form-control" placeholder="Pendidikan" value=" {{ $penduduk->pendidikan}}" readonly>
                            @if($errors->has('pendidikan'))
                                <div class="text-danger">
                                    {{ $errors->first('pendidikan')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Jenis Pekerjaan</label>
                            <input style="width:80%;" type="text" name="jenis_pekerjaan" class="form-control" placeholder="Jenis Pekerjaan" value=" {{ $penduduk->jenis_pekerjaan}}" readonly>
                            @if($errors->has('jenis_pekerjaan'))
                                <div class="text-danger">
                                    {{ $errors->first('jenis_pekerjaan')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Status Perkawinan</label>
                            <input style="width:80%;" type="text" name="status_perkawinan" class="form-control" placeholder="Status Perkaeinan" value=" {{ $penduduk->status_perkawinan}}" readonly>
                            @if($errors->has('status_perkawinan'))
                                <div class="text-danger">
                                    {{ $errors->first('status_perkawinan')}}
                                </div>
                            @endif
                        </div>
                        </div>
<div class="row">            <div class="form-group col-sm-3">
                            <label>SHDK</label>
                            <input style="width:80%;" type="text" name="shdk"  class="form-control" placeholder="SHDK" value=" {{ $penduduk->shdk}}" readonly>
                            @if($errors->has('shdk'))
                                <div class="text-danger">
                                    {{ $errors->first('shdk')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-sm-3">
                            <label>Kewarganegaraan</label>
                            <input style="width:80%;" type="text" name="kewarganegaraan"  class="form-control" placeholder="Kewarganegaraan" value=" {{ $penduduk->kewarganegaraan}}" readonly>
                            @if($errors->has('kewarganegaraan'))
                                <div class="text-danger">
                                    {{ $errors->first('kewarganegaraan')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-sm-3">
                            <label>Nama Ayah</label>
                            <input style="width:80%;" type="text" name="nama_ayah"  class="form-control" placeholder="Nama Ayah" value=" {{ $penduduk->nama_ayah}}" readonly>
                            @if($errors->has('nama_ayah'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_ayah')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-sm-3">
                            <label>Nama Ibu</label>
                            <input style="width:80%;" type="text" name="nama_ibu"  class="form-control" placeholder="Nama Ibu" value=" {{ $penduduk->nama_ibu}}" readonly>
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
                            <input style="width:80%;" type="text" name="nokk"  class="form-control" placeholder="No KK" value=" {{ $penduduk->nokk}}" readonly>
                            @if($errors->has('nokk'))
                                <div class="text-danger">
                                    {{ $errors->first('nokk')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-sm-3">
                            <label>Dusun</label>
                            <input style="width:80%;" type="text" name="dusun"  class="form-control" placeholder="Dusun" value=" {{ $penduduk->dusun}}" readonly>
                            @if($errors->has('dusun'))
                                <div class="text-danger">
                                    {{ $errors->first('dusun')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-sm-3">
                            <label>RT</label>
                            <input style="width:80%;" type="text" name="rt"  class="form-control" placeholder="RT" value=" {{ $penduduk->rt}}" readonly>
                            @if($errors->has('rt'))
                                <div class="text-danger">
                                    {{ $errors->first('rt')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-sm-3">
                            <label>RW</label>
                            <input style="width:80%;" type="text" name="rw"  class="form-control" placeholder="RW" value=" {{ $penduduk->rw}}" readonly>
                            @if($errors->has('rw'))
                                <div class="text-danger">
                                    {{ $errors->first('rw')}}
                                </div>
                            @endif
                        </div>
                        </div>
     <div class="row">  
                        <div class="form-group col-sm-3">
                            <label>Tanggal Meninggal</label>
                            <input style="width:80%;" type="date" name="tanggal_meninggal" required="required"> <br/>
                            @if($errors->has('tanggal_meninggal'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal_meninggal')}}
                                </div>
                            @endif
                        </div>
                        <br/>

                        <div class="form-group col-md-8">
                            <label style="width:100%;"></label>
                            <input type="submit" class="btn btn-success btn-sm" value="Simpan" style="margin-left:95%;">
                        </div>
                        </div>
                        </form>
                        </div>
        </div>
</body>
</div>
</html>
@stop