@extends('layouts.appuser')

@section('content')

 
<head>
  
<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
           
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

</head>
<style>

.kotak{
    padding-left: 17%;
}
</style>
<div class="card mt-25" >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>penduduk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrap.com/bootsrap/4.2.1/css/bootstrap.min.css">

<body>
<div class="container mt-1">
<div class="card-header text-center">
<h5>Data Pengguna</h5>
</div>
<br>
          <div> 
            <a href="/pengguna/tambah" class="btn btn-primary btn-sm fa fa-plus" title="Tambah data">Tambah</a>
            </div>
        <br>
            <div class="kotak">
              <table style="width:80%;" id="example1" class="table table-bordered table-striped">
                <thead align="center">
                <tr>
                <th width="5%">No</th>
                <th width="26%">NAMA</th>
                <th width="45%">EMAIL</th>
          
                </tr>
                </thead>
                <tbody>
                @php
                $no = 1;
                @endphp
                @foreach($admin as $p)
                <tr>
                <td>{{ $no++ }}</td>
                <td>{{$admin['name']}}</td>
                <td>{{$admin['email']}}</td>
                <td>
               
                @csrf
				@method('DELETE')
		      	</td>
				</form>
				</tr>
                @endforeach
                  </tbody>
				  </table>
          </div>
</div>
</div>
</body>
@endsection