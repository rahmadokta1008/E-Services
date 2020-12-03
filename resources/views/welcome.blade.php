@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="en" class="h-100">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>SIMAYAN</title>
<link href="/public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
.body{
    background: #f0f2f5;/*url('AdminLTE/dist/img/background-red.png') no-repeat fixed;*/
    -webkit-background-size: 100% 100%;
   -moz-background-size: 100% 100%;
   -o-background-size: 100% 100%;
   background-size: 100% 100%;
}
.container{
    padding-left: 4px;
    padding-top: 60px;
    width: 600px;
}
.button{
  background-color: 	#dc3545; /* red*/
  border: none;
  color: white;
  float: center;
  width: 100%;
  padding: 10px 203px;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 120px;
  padding-right: 120px;
  margin-left: 5%;
  text-align: center;
  cursor: pointer;
}
.button:hover{
        /*
        background-color: #6124e3;
        
        color: white;*/
      }

form {
    display: grid;
    grid-template-columns: 1fr;
    grid-gap: 16px;
    background-color: 	#FFFFFF;
}
</style>

<center>
<body class="body">
<div class="container align-items-center" style="width: 100%; padding-top:0%; border-radius: 5px;">
<h5 class="text-center col-sm-25 col-md-25 pb-2 mb-2 border-bottom" style="width: 100%; padding-top:1%;"><b>Sistem Manajemen Pelayanan Surat Desa <b></h5>
 <div class="row">
 <div class="col-sm-1 col-md-8 mx-auto p-3" style="background-color: #FFFFFF; border-radius: 7px;">
             
        <div class="form-group row" style="padding-left:38%;  background-color: #FFFFFF;">
                              
            
            
            <h1 class="text-center text-danger border-bottom"><b>&nbsp;LOGIN<b><font size="5" face="Times New Roman" ></font></h1>
        </div>
 
            @if(\Session::has('message'))
                <p class="alert alert-info">
                    {{ \Session::get('message') }}
                </p>
            @endif
            <form action="{{ route('login') }}" method="POST">
                {{ csrf_field() }}

        <div class="form-group" style="margin-bottom:1%;  padding-top:1%; background-color: #FFFFFF;">
            <div class="col-sm-12">
                    <div class="input-group">
                        <input type="email" class="form-control form-control-lg mb-6 @error('email') is-invalid @enderror" style="background-color: #f0f2f5;" placeholder="{{ trans('Email') }}" name="email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
            </div>
        </div>
        <div class="form-group row-sm-1" style="margin-top:1%;   padding-top:1%  ;">
            <div class="col-sm-12">
                    <div class="input-group">
                        <input type="password" class="form-control form-control-lg mb-6 @error('password') is-invalid @enderror" style="background-color: #f0f2f5;" placeholder="{{ trans('Password') }}" name="password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    </div>
        </div>
               
                <div class=" form-group row">
                <div class="col-sm-11">
                 <!--
                    <div class="col-8">
                        <input type="checkbox" name="remember"> {{ trans('ingat saya') }}
                    </div>
                     /.col -->
                    
                        <button type="submit" class="button"><b>{{ trans('Login') }}</b></button>
                    </div>
                    <!-- /.col -->
      
    
                </div>
            </form>


            <p class="mb-0">

            </p>
            <p class="mb-1">

            </p>
            </div>
        </div>
        <!-- /.login-card-body -->
    </div>
    </div>
    </div>
    </div>
</div>
</center>
</body>
</html>
@endsection