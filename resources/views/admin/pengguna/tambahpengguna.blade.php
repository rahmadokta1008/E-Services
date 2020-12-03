@extends('layouts.appuser')

@section('content')
<HTML>

<style>
label {
  
    float: left;
    width: 300px;
    padding-right: 24px;

}
.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  padding-right: 5%;
  position: relative;
  z-index: 2;
}
</style>

    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

<body>
<div class="container col-sm-12">
            <a href="/pengguna" class="btn btn-primary btn-sm">kembali</a><br><br>
    </div>
<div class="container">
<div class="card mt-1">
<div class="card-header text-center">
<h5><b>Tambah Pengguna</b></h5>
</div>


<div class="card-body" width="50%">
	<!--<a href="/tampil" class="btn btn-primary"> Kembali</a>-->
        <form method="post" action="/penggunatambah/keep" enctype="multipart/form-data">
           </div> @csrf
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="Name">Nama:</label>
                    <input type="text" class="form-control" name="name" required="required">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="Email">Email:</label>
                    <input type="text"  name="email" class="form-control @error('email') is-invalid @enderror" required="required">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              
                
            </div>
           
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="Password">Password</label>
                    <input id="password-field" type="text" class="form-control @error('password') is-invalid @enderror" name="password" required="required">
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4" align="center">
                    <button  type="submit" class="btn btn-success btn-sm">Simpan</button>
                </div>
            </div>
        </form>
    </div>
    </div>
</body>
<script>
    $(".toggle-password").click(function() {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
        input.attr("type", "text");
        } else {
        input.attr("type", "password");
        }
        });
    
    </script>
@endsection