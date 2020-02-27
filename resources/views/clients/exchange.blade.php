
@extends('layouts.app')
@section('content')
 <div class="container mb-5 mt-5">
<h1> AJOUT D'UN ECHANGE </h1>
 <form action="/echange" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="date_echange">Date</label>
        <input type="date" class="form-control" id="date_echange" name="date_echange">
    </div>
    <div class="form-group">
        <label for="id_exchanges_types">Types de contact</label>
        <select class="form-control" id="id_exchanges_types" name="id_exchanges_types">
            @foreach($exchangesTypes as $exchangesType)
                <option value="{{$exchangesType->id}}">{{$exchangesType->type }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="id_users">Operateurs</label>
        <select class="form-control" id="id_users" name="id_users">
            @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="id_clients">Clients</label>
        <select class="form-control" id="id_clients" name="id_clients">
            @foreach($clients as $client)
        <option value="{{$client->id}}">{{$client->nom}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="commentaire">Commentaire</label>
        <textarea class="form-control" id="commentaire" name="commentaire" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-outline-info">Ajouter</button>
    </form>
</div>
@endsection