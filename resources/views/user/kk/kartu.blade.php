@extends('layouts.appuser2')

@section('content')
<HTML>
<head>
</head>
<script type="text/javascript" src="../plugins/jquery/jquery.min.js"></script>
<style type="text/css">
	.pdf{
		margin-top: 10px;
    margin-left: 1px;
	}
	.css_tabel{
		border: none;
    margin-left: 0px;
	}
	.css_tabel_ttd{
		text-align: center;
		border: none;
	}
</style>


 <body class="page">
 <div class="card-body">
 <div class="container col-sm-13">
   <a href="/home/kk" class="btn btn-primary btn-sm"> kembali</a>
   </div>
   <br>
   
	<div class="container card col-sm-15">
		
  @foreach($kepala as $k)
		<div class="pdf">
		<center>
			<font size="4" face="Times New Roman"><b>SALINAN KARTU KELUARGA</font><br>
			<font size="3" face="Times New Roman">No.{{ $k->nokk}}</b></font><br>
	

		</center>
		</div>
		<br/>
            <table class="css_tabel" id="laravel_datatable">
                      <thead>
                          <tr>
                            <th width="13%">ALAMAT</th>
                            <td width="50%"> : {{ $k->dusun}}</td>
                            <th width="13%">KABUPATEN</th>
                            <td> : Lampung Tengah</td>
                          </tr>
                          <tr>
                            <th>RT/RW</th>
                            <td> : {{ $k->rt}}/{{ $k->rt}}</td>
                            <th>KODE POS</th>
                            <td> : -</td>
                          </tr>
                          <tr>
                            <th width="15%">DESA/KELURAHAN</th>
                            <td> : Ngestirahayu</td>
                            <th>PROVINSI</th>
                            <td> : Lampung</td>
                          </tr>
                          @endforeach
            
                          <tr>
                            <th>KECAMATAN</th>
                            <td> : Punggur</td>
                            <th width="15%">JUMLAH ANGGOTA</th>
                            <td> : {{$count}} </td>
                          </tr>
                      </thead>
                </table>
                <br>
    


            <table class="table table-bordered" id="laravel_datatable">
                      <thead align="center">
                          <tr>
                            <td width="1%">No</td>
                            <td>Nama Lengkap</td>
                            <td width="5%">NIK</td>
                            <td>Jenis Kelamin</td>
                            <td>Tempat Lahir</td>
                            <td>Tanggal Lahir</td>
                            <td>Agama</td>
                            <td>Pendidikan</td>
                            <td>Jenis Pekerjaan</td>
                            <td>Golongan Darah</td>
                          </tr>
                      </thead>
                      <tbody>
                      <?php $no = 0;?>
                        @foreach($anggota as $p)
                        <?php $no++ ;?>
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{$p->nama}}</td>
                                <td>{{$p->nik}}</td>
                                <td>{{$p->jenis_kelamin}}</td>
                                <td>{{$p->tempat_lahir}}</td>
                                <td>{{$p->tanggal_lahir}}</td>
                                <td>{{$p->agama}}</td>
                                <td>{{$p->pendidikan}}</td>
                                <td>{{$p->jenis_pekerjaan}}</td>
                                <td>-</td>

                            </tr>
                            @endforeach
                      </tbody>
                </table>
                <br>
              
                <table class="table table-bordered" id="laravel_datatable">
                      <thead align="center">
                          <tr>
                            <td>No</td>
                            <td>Status Perkawinan</td>
                            <td>Tanggal Perkawinan</td>
                            <td>Status Hubungan Dalam Keluarga</td>
                            <td>Kewarganegaraan</td>
                            <td>No.paspor</td>
                            <td>No.KITAS/KITAP</td>
                            <td>Nama Ayah</td>
                            <td>Nama Ibu</td>
                          </tr>
                      </thead>
                      <tbody>
                      <?php $no = 0;?>
                        @foreach($anggota as $p)
                        <?php $no++ ;?>
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{$p->status_perkawinan}}</td>
                                <td>-</td>
                                <td>{{$p->shdk}}</td>
                                <td>{{$p->kewarganegaraan}}</td>
                                <td>-</td>
                                <td>-</td>
                                <td>{{$p->nama_ayah}}</td>
                                <td>{{$p->nama_ibu}}</td>	

                            </tr>
                            @endforeach
                      </tbody>
                </table>
                <br>
                <br>
                @foreach($kepala as $k)
                <table class="css_tabel_ttd" id="laravel_datatable">
                      <thead>
                          <tr>
                            <td width="50%";>KEPALA KELUARGA</td>
                            <td width="50%">KEPALA KAMPUNG</td>
                          </tr>
                          <tr>
                            <td height="100px"> </td>
                          </tr>
                          <tr>
                            <td>{{ $k->nama}}</td>
                            <td>Subagio</td>
                          </tr>
                      </thead>
                </table>
		<br>
    <br>
		@endforeach
	</div>
  </div>
  </body>
 
@stop
