<x-app-layout>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('game.liste_jeux')}}
        </h2>
    </x-slot>
<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    @can('create', App\Models\JeuModel::class)
        <a href="/jeu/create"><button>Ajouter un jeu</button></a>
    @endcan
    <table>
        <tr>
            <th>Id du jeu</th>
            <th>Nom du jeu</th>
            <th>Editeur</th>
            <th>Année de sortie</th>
        </tr>
        @forelse($jeux as $jeu)
        <tr>
            <td> {{ $jeu['id'] }}</td>
            <td>{{ $jeu->nom}}</td>
            <td>{{ $jeu->editeur}}</td>
            <td>{{ $jeu->annee}}</td>

        </tr>
    @empty
        Pas encore de jeux, voulez vous en ajouter ?
    @endforelse
    </table>
    </div>
</div>
</div>

</x-app-layout>
