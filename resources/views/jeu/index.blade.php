@extends('template')

@section('titre')
    {{ __('game.liste_jeux')}}
@endsection

@section('contenu')
    @can('create', App\Models\JeuModel::class)
        <a href="/jeu/create"><button>Ajouter un jeu</button></a>
    @endcan
    @forelse($jeux as $jeu)
        Id du jeu : {{ $jeu['id'] }}
        Nom du jeu : {{ $jeu->nom}}
        <br />
    @empty
        Pas encore de jeux, voulez vous en ajouter ?
    @endforelse
@endsection