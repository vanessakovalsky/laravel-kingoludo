<x-app-layout>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('game.liste_jeux')}}
        </h2>
    </x-slot>

<div class="main-content">
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
</div>
</x-app-layout>
