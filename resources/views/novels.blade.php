@extends('layouts.app')

@section('content')
<h1>Liste des livres</h1>
@foreach ($novels as $novel )
    <h3><a href="{{ route('novels.show',['id'=> $novel->id]) }}"> {{  $novel->title }}</h3>
{{-- <div>
    <div>
        <div>Titre : {{ $novel->title }}</div>
    </div>
    <div>
        <div>Auteur : {{ $novel->author_firstname }} {{ $novel->author_lastname }}</div>
    </div>

</div> --}}
@endforeach

@endsection