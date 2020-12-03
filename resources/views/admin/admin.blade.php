@extends('layouts.appuser')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('admin beda') }}
                </div>

                

            </div>
            <br>
            <button type="submit" class="btn btn-primary" data-target="#modal-detail">pop up</button>
        </div>
    </div>
</div>
@stop
