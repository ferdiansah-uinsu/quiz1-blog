@extends('tamplate.index')

@section('content')


    <nav class="navbar-expand-sm">
        <div class="navbar-nav">
            <h1 align="center">SELAMAT DATANG DI</h1>
            <h4 align="center">ALBUM FOTO RANGKUTI</h4>
            <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
            </div>
        </div>
    </div>
</div>
@endsection
