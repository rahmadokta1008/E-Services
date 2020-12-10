@extends('layouts.appuser')

@section('content')

<HTML>
<head>
</head>
<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<style>
.kotak{
    padding-left: 740px;
}
</style>
<div class="card mt-25" >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Surat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrap.com/bootsrap/4.2.1/css/bootstrap.min.css">

<body>
<div class="container mt-15">

<div class="card-header text-center">
<h5>Data Surat</h5>
</div>

<div class="col-6">
    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
</div>

<div class="card-body">

<form>
</div>

    <table cellpadding="5" id="laravel_datatable" class="table-bordered table-hover table-striped">
        <thead align="center">
		<tr>
           
            <th width="10%">tgl buat</th>
            <th width="10%">Judul</th>
			<th width="18%">Nama</th>
            <th width="5%">Nik</th>
            <th width="14%">No Surat</th>
            <th width="8%">Tanggal Surat</th>
            <th width="10%">Opsi</th>
		</tr>

        </thead>
        <tbody>
        @foreach($datasurat as $p)
		<tr>
        <td>{{$p->created_at}}</td>
            <td>{{$p->judul_surat}}</td>
            <td>{{$p->nama}}</td>
            <td align="center">{{$p->nik}}</td>
            <td align="center">{{$p->nosurat}}</td>
            <td align="center">{{$p->tglsurat}}</td>
           <!-- <td>{{$p->urusan}}
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
           fas fa-pencil-square-o
           </td>-->
         

            <td align="center">
            
                <a class="btn btn-info btn-sm fas fa-eye" title="Lihat Surat"href="/admin/datasurat/lihat/{{$p->id}},{{$p->nik}},{{$p->judul_surat}}"></a>
                        
				<a class="btn btn-primary btn-sm fa fa-print" title="Print Surat" href="/datasurat/cetaksurat/{{$p->id}},{{$p->nik}},{{$p->judul_surat}}" target="_blank"></a>
			
				<a class="btn btn-danger btn-sm fas fa-trash-alt " title="Hapus Data"href="/admin/datasurat/hapussurat/{{$p->id}}" onclick="return confirm('Yakin akan meghapus data ini?')"></a>
		
				<!--<a class="btn btn-warning" href="/tampil/tambahPmeninggal/{{$p->id}}">meninggal</a> -->
			</td>
		</tr>

       
		@endforeach
		</table>
    </br>
</div>
</div>
</div>
</body>
</HTML>
<script>
   $(document).ready( function () {
    $('#laravel_datatable').DataTable({
        order: [ [0, 'desc'] ],
        'columns' : [
        {'visible' : false},
        null,
        null,
        null,
        null,
        null,
        null,
       
    ]
        
        });
     });
  </script>

@stop

