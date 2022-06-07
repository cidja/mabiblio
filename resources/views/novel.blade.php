@extends('layouts.app')

@section('content')

<h1 class="mt-5">Titre : {{ $novel->title }}</h1>

<div class="container">
    <div class="row">
        <div class="col-sm">
            <div>
                Auteur : {{ $novel->author_firstname }} {{ $novel->author_lastname }} 
            </div>
            <div>
            Isbn : {{ $novel->isbn }}
            </div>

        </div>
        <div class="col-sm">
            <img src="{{ Storage::url($novel->image->path) }}" class="img-fluid"> {{-- pour afficher l'image qui est enregistré dans la base de données source: https://youtu.be/fh18mHPA5E8?t=1863--}}
            {{$novel->image ? $novel->image->path : "pas d'image"}} {{-- affiche le path --}}
        </div>
    </div>
</div> 


@endsection