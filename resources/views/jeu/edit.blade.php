@extends('template')

@section('contenu')
Edition du jeu {{ $jeu->nom }}
    <form action={{ route('jeu.update', ['jeu' => $jeu->id]) }} method="POST">
        @csrf
        <label for="nom">Nom du jeu :</label>
        <input type="text" name="nom" />
        @error('nom')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <div class="select">
            <select name="categorie_id">
                @foreach($categories as $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="select">
            <select name="collection[]" multiple>
                @foreach($collections as $collection)
                    <option value="{{ $collection->id }}">{{ $collection->id }}</option>
                @endforeach
            </select>
        </div>
        <br />
        <input type="submit" value="Enregistrer" />
    </form>
@endsection