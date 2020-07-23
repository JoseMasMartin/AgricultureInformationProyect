@extends('layouts.app')
<body  style="background: url('https://images8.alphacoders.com/367/thumb-1920-367575.jpg'); background-repeat: repeat-x; background-size: 100%">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body" style="font-size: 20px; ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                       <b> Hola Mucho Gusto!!! Te damos la bienvenida {{$actualUser->name}}</b>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
