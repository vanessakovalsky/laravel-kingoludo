@extends('welcome')

@section('content')
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
    <form action="{{url('party')}}" method="POST">
        @csrf
        <label>
            Titre :
        </label>
        <input type="text" name="title" />
        <label>
            Editeur :
        </label>
        <input type="text" name="editor" />
        <label>
            Date de sortie :
        </label>
        <input type="date" name="year_exit" />
        <input type="submit" value="Valider" />
    </form>

@endsection