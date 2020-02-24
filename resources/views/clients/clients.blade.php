@extends('layouts.app')
@section('content')
<div class="row">
@foreach($clients as $client)
<div class="card col-md-3 mx-5 mt-5" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{ $client->nom }}</h5>
        <h5 class="card-title">{{ $client->prenom }}</h5>
        <a href="/clients/{{ $client->id }}"><button class="btn btn-outline-info">Plus d'informations</button></a>
    </div>
</div>
@endforeach

</div>
@endsection    

