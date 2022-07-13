@extends('layouts.app')

@section('content')

<h1>Liste des {{$count}} livres</h1>

    {{-- <h3><a href="{{ route('novels.show',['id'=> $novel->id]) }}"> {{  $novel->title }}</h3>
        <div class="cover text-center">
            <img class="img-thumbnail" src="{{ Storage::url($novel->image->path) }}" alt="image de couverture du livre" title="image de couverture du livre {{ $novel->title }}">{{-- pour afficher l'image qui est enregistré dans la base de données source: https://youtu.be/fh18mHPA5E8?t=1863--
        </div> --}}
        <div class="message">
            @if(Session::has('success')) {{-- pour informer l'utilisateur que le lire a bient était ajouté --}}
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            @if(Session::has('info')) {{-- Pour informer l'utilisateur que le livre a bien était supprimé --}}
                <div class="alert alert-info" role='alert'>
                    {{Session::get('info')}}
                </div>
            @endif
        </div>
        <div class="container">
            
            <div class="row">
                @foreach ($novels as $novel )
                <div class="card col-lg-3 col-md-4 col-sm-6 mx-3" style="width: 18rem;">
                    <img class="card-img-top" src="{{ Storage::url($novel->image->path) }}" alt="image de couverture du livre" title="image de couverture du livre {{ $novel->title }}">
                    <div class="card-header">
                        {{ $novel->title }}
                    </div>
                    <div class="card-body">
                     {{--  <h5 class="card-title">{{ $novel->title }}</h5> --}}
                      <p class="card-text">type : {{ $novel->book_type}} / Fini : {{ $novel->finish ? 'oui' : 'non'}} </p>
                      <a href="{{ route('novels.show',['id'=> $novel->id]) }}" class="btn btn-success">Fiche du livre</a>
                    </div>
                  </div>

                
                @endforeach

            </div>
        </div>
       
{{-- <div>
    <div>
        <div>Titre : {{ $novel->title }}</div>
    </div>
    <div>
        <div>Auteur : {{ $novel->author_firstname }} {{ $novel->author_lastname }}</div>
    </div>

</div> --}}


@endsection