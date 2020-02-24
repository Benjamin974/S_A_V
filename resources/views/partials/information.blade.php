@extends('layouts.app')
@section('content')


<div class="jumbotron bg-light">
    <h1 class="display-4">{{$client->nom}}</h1>
    <h2 class="display-4">{{$client->prenom}}</h2>
        <p class="lead">{{$client->mail}}</p>
        <p class="lead">{{$client->telephone}}</p>
    <a class="btn btn-primary btn-lg" href="/clients" role="button">Tout les clients</a>
</div>
@endsection    
