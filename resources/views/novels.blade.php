@extends('layouts.app')

@section('content')
<h1>Liste des livres</h1>

    {{-- <h3><a href="{{ route('novels.show',['id'=> $novel->id]) }}"> {{  $novel->title }}</h3>
        <div class="cover text-center">
            <img class="img-thumbnail" src="{{ Storage::url($novel->image->path) }}" alt="image de couverture du livre" title="image de couverture du livre {{ $novel->title }}">{{-- pour afficher l'image qui est enregistré dans la base de données source: https://youtu.be/fh18mHPA5E8?t=1863--
        </div> --}}
        <div class="container">
            
            <div class="row">
                @foreach ($novels as $novel )
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a class="linkCover" href="{{ route('novels.show',['id'=> $novel->id]) }}">
                        <img class="img-thumbnail" src="{{ Storage::url($novel->image->path) }}" alt="image de couverture du livre" title="image de couverture du livre {{ $novel->title }}">{{-- pour afficher l'image qui est enregistré dans la base de données source: https://youtu.be/fh18mHPA5E8?t=1863--}}
                        <div class="d-flex align-items-center flex-column">
                            <div class="p-1">
                                <div>{{ $novel->title }}</div>
                            </div>
                            <div class="p-1"> 
                                Format : {{ $novel->book_type}}
                            </div>
                            <div class="p-1 mt-1">
                                Livre lu : {{ $novel->finish ? 'oui' : 'non'}} {{-- si finish 1 sinon 0 alors pas fini --}}
                                
                            </div>
                        </div>
                        
                           
                        
                        {{-- <div class="row justify-content-center">
                            <div class="fieldDescription">
                               ?php 
                                $bDate = date_create($data["begin_date"]);
                                $eDate = date_create($data["end_date"]);
                                if($data["end_date"] == "0000-00-00"){ //to check if end date ok 
                                ?> <div id="notFinish" class="text-uppercase">pas fini</div>?php
                                } else{
                                $interval = date_diff($bDate, $eDate);
                                ?>
                                <div id="finish">
                                    ?= $interval->format("Fini en %a jours");?>
                                </div>
                                ?php
                                }?
                            </div>
                        </div> --}}
                    
                    
                    </a>
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