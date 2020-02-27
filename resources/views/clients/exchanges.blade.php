@extends('layouts.app')
@section('content')
<div class="container mt-5 mb-5">
    <h1 class="display-4">{{$clients->nom}}</h1>
    @foreach($exchanges as $exchange)
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <p class="lead">{{$exchange->commentaire}}</p>
        </div>
    </div>
@endforeach
</div>
@endsection