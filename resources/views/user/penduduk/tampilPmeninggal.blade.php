@extends('layouts.appuser2')

@section('content')


<head>
  
<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

</head>
<style>
.kotak{
    padding-left: 740px;

}
</style>

<div class="card mt-3">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>penduduk meninggal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrap.com/bootsrap/4.2.1/css/bootstrap.min.css">

    <body>
<div class="container">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item active" arrial-current="page"><a href="/home/tampil">Data Penduduk Aktif</a></li>
<li class="breadcrumb-item"><a href="/home/tampilPpindah">Data Penduduk Pindah</a></li>
<li class="breadcrumb-item"><a href="/home/tampilPmeninggal">Data Penduduk Meninggal</a></li>
</ol>
</nav>
<div class="card-header text-center">
<h5>Data Penduduk Meninggal</h5>
</div>
 <div class="card-body">
	
<div class="kotak">

<form>
    </div>

    <table cellpadding="5" id="laravel_datatable" class="table-bordered table-hover table-striped">
        <thead align="center">
		<tr>
            <th width="150px">NIK</th>
			<th width="150px">Nama</th>
            <th width="150px">Tanggal Lahir</th>
			<th width="140px">Jenis Kelamin</th>
            <th width="160px">Alamat</th>
            <th width="160px">Tanggal Meninggal</th>
            <th width="140px">opsi</th>
		</tr>

        </thead>
        <tbody>

		@foreach($pmeninggal as $p)
		<tr>
            <td>{{ $p->nik}}</td>
			<td>{{ $p->nama }}</td>
            <td>{{ $p->tanggal_lahir}}</td>
			<td>{{ $p->jenis_kelamin}}</td>
            <td>{{ $p->dusun}}</td>
            <td>{{ $p->tanggal_meninggal}}</td>
            <td align="center">
              

                <a class="btn btn-info btn-sm" href="{{ url('user/tampilPmeninggal/'.$p->nik) }}" class="btn btn-xs btn-success btn-lg"  data-toggle="modal" data-target="#myModal{{ $p->id }}" title="Show Data" data-toggle="modal">Detail</a>

<!-- Modal -->
            <div id="myModal{{ $p->id }}" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- konten modal-->
                                <div class="modal-content modal-lg" role="document">
                                    <!-- heading modal -->
                                    <div class="modal-header" >
                                        
                                        <h4 class="modal-title"><center><b>Detail Penduduk</b></center></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- body modal -->
                                    <div class="modal-body">
                                    <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-700">
                                        <div class="box box-info">
                                       

                                            <table align="center" cellpadding="7" id="data_users_reguler" class="table-bordered table-hover table-striped">
                                                <thead >
                                                <div class="col-md-4">
                                                <tr>
                                                    <th width="700px">NIK</th>
                                                    <td width="600px">{{ $p->nik}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Nama</th>
                                                    <td>{{ $p->nama }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Jenis Kelamin</th>
                                                    <td>{{ $p->jenis_kelamin}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Tempat Lahir</th>
                                                    <td>{{ $p->tempat_lahir }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal Lahir</th>
                                                    <td>{{ $p->tanggal_lahir}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Agama</th>
                                                    <td>{{ $p->agama}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Pendidikan</th>
                                                    <td>{{ $p->pendidikan}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Jenis Pekerjaan</th>
                                                    <td>{{ $p->jenis_pekerjaan}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Status Perkawinan</th>
                                                    <td>{{ $p->status_perkawinan}}</td>
                                                </tr>
                                                <tr>
                                                    <th>SHDK</th>
                                                    <td>{{ $p->shdk}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Kewarganegaraan</th>
                                                    <td>{{ $p->kewarganegaraan}}</td>
                                                </tr>
                                                <tr>

                                                <div class="col-md-4 ml-auto">
                                                    <th>Nama Ayah</th>
                                                    <td>{{ $p->nama_ayah}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Nama Ibu</th>
                                                    <td>{{ $p->nama_ibu}}</td>
                                                </tr>
                                                <tr>
                                                    <th>No KK</th>
                                                    <td>{{ $p->nokk}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Dusun</th>
                                                    <td>{{ $p->dusun}}</td>
                                                </tr>
                                                <tr>
                                                    <th>RT</th>
                                                    <td>{{ $p->rt}}</td>
                                                </tr>
                                                <tr>
                                                    <th>RW</th>
                                                    <td>{{ $p->rw}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal Meninggal</th>
                                                    <td>{{ $p->tanggal_meninggal}}</td>
                                                </tr>
                                             
                                                </thead >
                                            </table>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                    </div>
                                    <!-- footer modal -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
<!-- Modal -->  





			</td>
        
		</tr>

       
		@endforeach
	</table>
</div>
</div>
</div>
</body>
</HTML>
<script>
   $(document).ready( function () {
    $('#laravel_datatable').DataTable({
        });
     });
  </script>

@stop