@extends('welcome')

@section('menu')
    <div id="menu">
        <ul>
            <li><a href="{{ route('party.index') }}">Jeux</a></li>
            <li><a href="{{ route('login') }}">Membres</a></li>
            <li><a href="{{ route('collection.index') }}">Collection</a></li>
        </ul>
    </div>
@endsection