@extends('welcome')

@section('content')
    <h1> {{ $game->title }}</h1>
    {{ $game->id }}<br />
@endsection