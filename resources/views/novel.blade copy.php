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
            <div>
                Nombre de pages : {{ $novel->pages_nb }}
            </div>
            <div>
                Support : {{ $novel->book_type }}
            </div>
            <div>
                Date de démarrage de lecture : {{ $novel->begin_at }}
            </div>
            <div>
                Livre lu : {{ $novel->finish ? 'oui' : 'non'}} {{-- si finish 1 sinon 0 alors pas fini --}}
            </div>
            <div>
                Nombre de volume(s) : {{ $novel->volumes_nb !=0 ? $novel->volumes_nb : 'un seul volume'}} {{-- si volume_nb différent de 0 alors on affiche volume_nb sinon affiche un seul volume --}}
            </div>
            <div>
                Livre ajouté le : {{ $novel->created_at}}
            </div>


        </div>
        <div class="col-sm">
            <img src="{{ Storage::url($novel->image->path) }}" class="img-fluid"> {{-- pour afficher l'image qui est enregistré dans la base de données source: https://youtu.be/fh18mHPA5E8?t=1863--}}
            {{$novel->image ? $novel->image->path : "pas d'image"}} {{-- affiche le path --}}
        </div>
    </div>
</div> 



@endsection