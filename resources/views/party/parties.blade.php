@extends('welcome')

@section('content')
    <h1>Ma super liste de parties :) </h1>
    <table>
    @forelse($games as $game)
            <tr><td>{{ $game->id }}</td><td>{{ $game->title }}</td></tr>
        @empty
            Pas de jeux
    @endforelse
    </table>
@endsection