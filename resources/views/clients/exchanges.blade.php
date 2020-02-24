@extends('layouts.app')
@section('content')
 <div class="container">
{{ csrf_token() }}
<h1> ECHANGES</h1>
 <form method="POST">
    {{-- <div class="form-group">
        <label for="exampleInputEmail1"> Date</label>
        <input type="date" class="form-control" id="date" aria-describedby="date">
    </div> --}}
    <div class="form-group">
        <label for="exampleFormControlSelect1">Types de contact</label>
        <select class="form-control" id="exampleFormControlSelect1">
            @foreach($exchangesTypes as $exchangesType)
                <option>{{$exchangesType->id }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Operateurs</label>
        <select class="form-control" id="exampleFormControlSelect1">
            @foreach($users as $user)
            <option>{{$user->id}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Clients</label>
        <select class="form-control" id="exampleFormControlSelect1">
            @foreach($clients as $client)
        <option>{{$client->id}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Commentaire</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-outline-info">Ajouter</button>
    </form>
</div>
@endsection