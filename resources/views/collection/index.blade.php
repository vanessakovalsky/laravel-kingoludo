@extends('welcome')

@section('content')
    <h1>Ma super liste de parties :) </h1>
    <table>
    @forelse($game_collec as $collection)
        @foreach($collection->modelGame as $game)
            <tr><td>{{ $game->id }}</td><td>{{ $game->title }}</td><td>{{ $game->editor }}</td></tr>
        @endforeach
    @empty
        Pas de jeux
    @endforelse
    </table>
@stop