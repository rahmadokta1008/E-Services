@extends('layouts.appuser')

@section('content')
<HTML>

<style>
label {
  
    float: left;
    width: 300px;
    padding-right: 24px;

}
</style>

<body>
<div class="container col-sm-12">
            <a href="/pengguna" class="btn btn-primary btn-sm">kembali</a><br><br>
    </div>
<div class="container">
<div class="card mt-1">
<div class="card-header text-center">
<h5><b>Edit Pengguna</b></h5>
</div>



<div class="card-body" width="50%">
@foreach($users as $p)
        <form action="/pengguna/update/{{$p->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="name" value="{{ $p->name }}" />
                    </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $p->email }}" />
                    </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" name="password" value="password">
                    </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                    <div class="form-group col-md-4" align="center">
                        <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
                    </div>
            </div>
@endforeach
</form>
</div>
</div>
</body>
</div>
@endsection