@extends('layouts.app')
@section('content')

            
@foreach($exchanges as $exchange)
<div class="container mb-5 mt-5">
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">Commentaire</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
            </ul>
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">{{$exchange->commentaire}}</p>
        </div>
    </div>
</div>
@endforeach
@endsection