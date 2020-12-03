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
    padding-left: 2%;
    padding-right: 2%;
}
</style>
<div class="card mt-25" >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>penduduk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrap.com/bootsrap/4.2.1/css/bootstrap.min.css">


<body>

<!--modal-->
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- konten modal-->
                                <div class="modal-content modal-lg" role="document">
                                    <!-- heading modal -->
                                  <div class="modal-header" >
                                      <h4 class="modal-title"><center><b>Tambah Pengelola</b></center></h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>
                                    <!-- body modal -->
                                    <div class="modal-body">
                               
                           
                                      <form action="/pengelola/tambah" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                                  <div class="form-group">
                                                      <label style="width:180px;">Nama</label>
                                                      <select name="user_id" id="id" class="form-control" style="width:400px;" required="required">
                                                          <option value="">Nama</option>
                                                          @foreach($users as $user)
                                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                                          @endforeach
                                                      </select>
                                                  </div>
                                                  <div class="form-group">
                                                    <input  type="hidden"class="form-control"  id="name" name="name" readonly style="width:400px;" required="required">
                                                  </div>
                                                  <div class="form-group">
                                                    <label style="width:180px;">Email</label>
                                                    <input  class="form-control" id="email" name="email" required="required" readonly style="width:400px;">
                                                  </div>
                                                  <div class="form-group">
                                                    <input  type="hidden"class="form-control" name="role_id" value="1" required="required">
                                                  </div>
                                                  <div class="form-group">
                                                      <input type="submit" class="btn btn-success" value="Simpan">
                                                  </div>  
                                      </form>
                                    </div>
                                </div>
                            </div>
                        </div>

<!-- Tutup Modal -->  


<div class="container mt-1">
<br>
<table style="width:100%;">
  <tr>
    <td>
      <div class="card mt-25 width:50%" >
        <div class="card-header text-center">
        <h5>Data Pengguna</h5>
        </div>
        
        <form style="width:100%;">
            <div class="kotak"> 
              <a href="/pengguna/tambah" class="btn btn-primary btn-sm fa fa-plus" title="Tambah data">Pengguna</a>
            </div><br>
            <div class="kotak">
              <table style="width:100%;" id="example1" class="table table-bordered table-striped">
                <thead align="center">
                        <tr>
                        <th width="1%">No</th>
                        <th width="20%">NAMA</th>
                        <th width="15%">EMAIL</th>
                        <th width="14%">OPSI</th>
                        </tr>
                </thead>
                <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach($users as $user)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{$user['name']}}</td>
                        <td>{{$user['email']}}</td>
                        <td>
                         <a class="btn btn-primary btn-sm  fas fa-pencil-square-o" title="Edit Data"href="/pengguna/edit/{{$user->id}}"></a>
		
                        <a class="btn btn-danger btn-sm fas fa-trash-alt " title="Hapus Data"href="/pengguna/hapus/{{$user->id}}" onclick="return confirm('Yakin akan meghapus data ini?')"></a>
		
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
        </form>
      </div>
    </td>
    <td></td>
    <td valign="top">
      <div class="card mt-25 ">
      <div class="card-header text-center">
      <h5>Data Pengelola</h5>
      </div>
        <form style="width:100%;">
          <div class="kotak"> 
          <button type="button"  data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-sm fa fa-plus" title="Tambah data">Pengelola</button>
          <!-- ke Modal -->
          </div><br>

          <div class="kotak">
            <table style="width:100%;" id="example1" class="table table-bordered table-striped">
              <thead align="center">
                        <tr>
                        <th width="1%">No</th>
                        <th width="15%">NAMA</th>
                        <th width="32%">EMAIL</th>
                        <th align="center" valign ="middle" width="2%">OPSI</th>
                        </tr>
              </thead>
              <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach($admin as $admin)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{$admin['name']}}</td>
                        <td>{{$admin['email']}}</td>
                        <td>
                        <a class="btn btn-danger btn-sm fas fa-trash-alt " title="Hapus Data"href="/pengelola/hapus/{{$admin->user_id}}" onclick="return confirm('Yakin akan meghapus data ini?')"></a>
		
                      
                  
                        </td>
          
                      </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </form>
      </div>
    </td>
  </tr>
</table>
</div>


</div>
</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script type="text/javascript">
        $(document).ready(function(){
          $(document).on('change','#id', function(e){
                var id = e.target.value;
                console.log(id);
                $.get('{{ url('pengelola')}}/'+id, function(data){
                  document.getElementById('name').value = data.name;
                    document.getElementById('email').value = data.email;
                });
            });
        });
    </script>
@stop