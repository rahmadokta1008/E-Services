@extends('layouts.appuser')

@section('content')
<HTML>
<head>
</head>
<style>
label {
  margin-left:20%;
  float: left;
  width: 300px;
  padding-right: 24px;

}
.kiri{
    float: left;
    padding-right: 24px;
    padding-left: 30%;
}
</style>

<body class="page">
    <div class="container col-sm-12">
            <a href="/admin/buatsurat" class="btn btn-primary btn-sm">kembali</a><br><br>
    </div>
<div class="container">
<div class="card mt-1">



<div class="card-header text-center">
<h5><b>Buat Surat</b></h5>
</div>


<div class="card-body" width="100%">
	<!--<a href="/tampil" class="btn btn-primary"> Kembali</a>-->

 
	@foreach($penduduk as $p)
       <form method="post" action="/admin/buatsurat/proses/{{$p->nik}}">
    @endforeach
    {{ csrf_field() }}
    {{ method_field('PUT') }}
		
        

                        <div class="form-group">
                            <label style="width:180px;">Jenis Surat</label>
                            <input type="text" name="judul_surat" class="form-control" value="Surat Izin Lingkungan" readonly style="width:400px;">
                       </div>
                        <div class="form-group">
                            <label style="width:180px;">Tanggal Surat</label>
                            <input type="date" name="tglsurat" class="form-control" required="required" style="width:400px;" >
                        </div>
                        
                        <div class="form-group">
                            <label style="width:180px;">Nik</label>
                            <select name="nik" id="nik" class="form-control" style="width:400px;">
                                <option value="">NIK</option>
                                @foreach($penduduk as $p)
                                <option value="{{$p->nik}}">{{$p->nik}} - {{$p->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label style="width:180px;">Nama</label>
                            <input  class="form-control" id="nama" name="nama" readonly style="width:400px;">
                          
                        </div>
                        <div class="form-group">
                            <label style="width:180px;">Alamat</label>
                            <input  class="form-control" id="dusun" name="dusun" readonly style="width:400px;">
                        </div>
            
                                    

                    <div class="form-group">
                       <input type="submit" style="margin-left: 68%;" class="btn btn-success" value="Simpan">
                     </div>
       
       </form>
       </div>
</div>
</div>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $(document).on('change','#nik', function(e){
                var id = e.target.value;
                console.log(id);
                $.get('{{ url('admin/pengguna')}}/'+id, function(data){
                    document.getElementById('nama').value = data.nama;
                    document.getElementById('dusun').value = data.dusun;
                  
                });
            });
        });
    </script>

    
</body>
</div>
</html>
@stop