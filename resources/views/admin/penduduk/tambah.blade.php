@extends('layouts.appuser')

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

<body>
<div class="container col-sm-12">
<a href="/admin/tampil" class="btn btn-primary btn-sm"> Kembali</a>
</div>
<div class="container">
<div class="card mt-3">

<div class="card-header text-center" >
<h5>Tambah Data Penduduk </h5>
</div>


<div class="card-body" width="50%">
	

	<form method="post" action="/admin/tampil/keep">
		{{ csrf_field() }}
        

<div class="row" style="height: 1%;">    
        <div class="form-group col-sm-4">
        <label>NIK</label>
		<input type="numeric" name="nik" placeholder="nik" class="form-control @error('nik') is-invalid @enderror" autocomplete="off" autofocus required="required" value="{{ old('nik') }}">
            @error('nik')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
		</div>
        <div class="form-group col-sm-4">
        <label>Nama Lengkap</label>
		<input type="text" name="nama" placeholder="nama" class="form-control @error('nama') is-invalid @enderror" autocomplete="off" autofocus required="required" value="{{ old('nama') }}" onkeypress="return event.charCode < 48 || event.charCode  >57">
            @error('nama')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group col-sm-4">
        <label>Jenis Kelamin</label>
		<select name="jenis_kelamin" class="form-control"  required="required" value="{{ old('jenis_kelamin') }}">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select> </br>
        </div>
 </div>
 <div class="row" style="height: 1%;"> 
        <div class="form-group col-sm-4">
        <label>Tempat Lahir</label>
		<input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control" autocomplete="off" required="required" value="{{ old('tempat_lahir') }}"> <br/>
		</div>

        <div class="form-group col-sm-4">
        <label>Tanggal Lahir</label>
		<input type="date" name="tanggal_lahir" class="form-control" autocomplete="off" required="required" value="{{ old('tanggal_lahir') }}"> <br/>
		</div>
        <div class="form-group col-sm-4">
        <label>Agama</label>
		<select name="agama" class="form-control"  required="required">
            <option value="">Pilih Agama</option>
            <option value="ISLAM">ISLAM</option>
            <option value="KRISTEN">KRISTEN</option>
            <option value="KATHOLIK">KATHOLIK</option>
            <option value="HINDU">HINDU</option>
            <option value="BUDHA">BUDHA</option>
            <option value="KONGHUCU">KONGHUCU</option>
            <option value="KEPERCAYAAN TERHADAP TUHAN YME / LAINYA">KEPERCAYAAN TERHADAP TUHAN YME / LAINYA</option>
        </select>
        </div>
</div>
<div class="row" style="height: 1%;"> 
        <div class="form-group col-sm-4">
        <label>Pendidikan</label>
		<select name="pendidikan" class="form-control"  required="required" value="{{ old('pendidikan') }}">
            <option value="">Pilih Pendidikan</option>
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
        </div>

        <div class="form-group col-sm-4">
        <label>Jenis Pekerjaan</label>
		<input type="text" name="jenis_pekerjaan" placeholder="Jenis Pekerjaan" class="form-control" autocomplete="off" required="required" value="{{ old('jenis_pekerjaan') }}"> <br/>
        </div>
        
        <div class="form-group col-sm-4">
        <label>Status Perkawinan</label>
		<select name="status_perkawinan" class="form-control"  required="required" value="{{ old('status_perkawinan') }}">
            <option value="">Pilih Status Perkawinan</option>
            <option value="BELUM KAWIN">BELUM KAWIN</option>
            <option value="KAWIN">KAWIN</option>
            <option value="CERAI HIDUP">CERAI HIDUP</option>
            <option value="CERAI MATI">CERAI MATI</option>
        </select>
        </div>
</div>
<div class="row" style="height: 1%;"> 
        <div class="form-group col-sm-3">
        <label>Status Hubungan</label>
		<select name="shdk" class="form-control"  required="required" value="{{ old('shdk') }}">
            <option value="">Pilih Hubungan Keluarga</option>
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
        </div>

        <div class="form-group col-sm-3">
        <label>Kewarganegaraan</label>
		<select name="kewarganegaraan" class="form-control"  required="required" value="{{ old('kewarganegaraan') }}">
            <option value="">Pilih Warga Negara</option>
            <option value="WNI">WNI</option>
            <option value="WNA<">WNA</option>
        </select>
        </div>

        <div class="form-group col-sm-3">
        <label>Nama Ayah</label>
		<input type="text" name="nama_ayah" placeholder="Nama Ayah" class="form-control @error('nama_ayah') is-invalid @enderror" autocomplete="off" autofocus required="required" value="{{ old('nama_ayah') }}" onkeypress="return event.charCode < 48 || event.charCode  >57"> <br/>
            @error('nama_ayah')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group col-sm-3">
        <label>Nama Ibu</label>
        <input type="text" name="nama_ibu" placeholder="Nama Ibu" class="form-control @error('nama_ibu') is-invalid @enderror" autocomplete="off" autofocus required="required" value="{{ old('nama_ibu') }}" onkeypress="return event.charCode < 48 || event.charCode  >57"> <br/>
            @error('nama_ibu')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
</div>
<div class="row" style="height: 1%;"> 
       <div class="form-group col-sm-3">
        <label>No KK</label>
        <input type="numeric" name="nokk" placeholder="Nomor Kartu Keluarga" class="form-control @error('nokk') is-invalid @enderror" autocomplete="off" autofocus required="required" value="{{ old('nokk') }}"> 
            @error('nokk')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group col-sm-3">
        <label> Dusun</label>
        <select name="dusun" class="form-control" required="required" value="{{ old('dusun') }}"> 
            <option value="">Pilih Dusun</option>
            <option value="Dusun Tanjung Kejawen">Dusun Tanjung Kejawen</option>
            <option value="Dusun Sukajadi">Dusun Sukajadi</option>
            <option value="Dusun Irian I">Dusun Irian I</option>
            <option value="Dusun Trikaton">Dusun Trikaton</option>
            <option value="Dusun Irian II">Dusun Irian II</option>
            <option value="Dusun Mulyokaton">Dusun Mulyokaton</option>
            <option value="Dusun Digul">Dusun Digul</option>
            <option value="Dusun Tanjung Agung">Dusun Tanjung Agung</option>
        </select>
        </div>

        <div class="form-group col-sm-3">
        <label>RT</label>
		<select name="rt" class="form-control"  required="required" value="{{ old('rt') }}">
            <option value="">Pilih RT</option>
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
            <option value="">Pilih RW</option>
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
        </div>
</div >
        <div class="form-group">
            <input type="submit"style="margin-left:90%;" class="btn btn-success btn-sm" value="Simpan">
        </div>
	</form>
    </div>
    </div>

</body>
</div>
</html>
@endsection