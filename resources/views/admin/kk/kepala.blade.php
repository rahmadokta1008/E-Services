@extends('layouts.appuser')

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
    <title>Kepala keluarga</title>
    <link rel="stylesheet" href="https://stackpath.bootstrap.com/bootsrap/4.2.1/css/bootstrap.min.css">

<body>
<div class="container">

<div class="card-header text-center">
<h5>Data Keluarga</h5>
</div>
 <div class="card-body">
 <div class="kotak">
<form>
    </div>
    <table class="table table-bordered" id="laravel_datatable">
        <thead align="center">
        
		<tr>
            <th width="5%">Aksi</th>
            <th width="12%">No KK</th>
            <th width="12%">NIK</th>
			<th width="25%">Nama</th>
            <th width="17%">SHDK</th>
            <th width="23%">Alamat</th>
    
		</tr>

        </thead>
        <tbody>
		@foreach($kepala as $p)
		<tr>
            <td align="center"><a class="btn btn-info btn-sm fas fa-eye" title="Lihat KK" href="/admin/lihat_kk/{{$p->nokk}}{{$p->id}}"></a></td>
            <td>{{ $p->nokk}}</td>
            <td>{{ $p->nik}}</td>
			<td>{{ $p->nama }}</td>
            <td>{{ $p->shdk}}</td>
            <td>{{ $p->dusun}}</td>
          
         

		</tr>

       
		@endforeach
	
	</table>
</form>
</div>
</div>
</div>
</body>
<script>
   $(document).ready( function () {
    $('#laravel_datatable').DataTable({
        });
     });
  </script>

@stop