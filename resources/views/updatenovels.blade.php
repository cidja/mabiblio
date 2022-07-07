@extends('layouts.app')

@section('content')
<h1>Modification d'un livre</h1>

@if ($errors->any()) {{-- variable crée automatiquement après la vérification dans le post controller --}}
    @foreach ($errors->all() as $error )
        <div class="text-red-600"> {{ $error }} </div>
        @endforeach
@endif
<div class="container">
    <div class="row">
        <div class="col-4 d-flex align-items-center">
            <div>
                <h3 class="text-center">Couverture du livre </h3>
                <img class="img-thumbnail" src="{{ Storage::url($novel->image->path) }}" alt="image de couverture du livre" title="image de couverture du livre {{ $novel->title }}">{{-- pour afficher l'image qui est enregistré dans la base de données source: https://youtu.be/fh18mHPA5E8?t=1863--}}
            </div>
        </div>
        <div class="col-8">
            <form action="{{ route('novels.storeupdate', ['id'=> $novel->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Titre de l'ouvrage</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ $novel->title ? $novel->title : old('title') }}">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="author_firstname">Prénom de l'auteur</label>
                    <input type="text" class="form-control" id="author" name="author_firstname" value="{{ $novel->author_firstname ? $novel->author_firstname : old('author_firstname') }}" required> {{-- {{old}} pour récupérer les value quand on valide un formulaire et qu'il ne passe pas le validator https://laravel.com/docs/9.x/validation#quick-displaying-the-validation-errors  --}}
                </div>
                <div class="form-group">
                    <label for="author_lastname">Nom de l'auteur</label>
                    <input type="text" class="form-control" id="author" name="author_lastname" value="{{ $novel->author_lastname ? $novel->author_lastname :old('author_lastname') }}" required>
                </div>
                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <input type="number" class="form-control" id="isbn" name="isbn" placeholder="exemple : 2253257419" value="{{ $novel->isbn ? $novel->isbn : old('isbn') }}">
                    <small id="isbnHelp" class="form-text text-muted">Si ISBN inconnu ne rien mettre</small>
                </div>
                {{-- <div class="form-group">
                    <label for="genre">Genre</label>
                    <select class="form-control" id="genre" name="genre">
                    <option>Auto biographie</option>
                        <option>Biographie</option>
                        <option>Classique</option>
                        <option>Developpement personnel</option>
                        <option>Essais</option>
                        <option>Fantastique</option>
                        <option>Policier</option>
                        <option>Roman</option>
                        <option>Science-fiction</option>
                        <option>Traité</option>
                        <option>Thriller</option>
                        <option>Vie quotidienne</option>
                    </select>
                </div> --}}
            
                <div class="form-group">
                    <label for="book_type">format : </label>
                    <select class="form-control" id="publication" name="book_type" value="{{ $novel->book_type ? $novel->book_type : old('book_type') }}">
                        <option>papier</option>
                        <option>kindle</option>
                    </select>
                </div>
            
                <div class="form-group">
                    <label for="pages_nb">Nombre de pages : </label>
                    <input type="number" class="form-control" id="page_count" name="pages_nb" value="{{ $novel->pages_nb ? $novel->pages_nb : old('pages_nb') }}">
                </div>
            
                
                <div class="form-group">
                    <label for="begin_at">Date de démarrage de lecture :</label>
                    <input type="date" class="form-control" id="begin_at" name="begin_at" value="{{ $novel->begin_at ? $novel->begin_at :old('begin_at')??Carbon\Carbon::now()->format('d/m/Y') }}" >
                </div>
            
                
                {{-- <div class="form-group">
                    <label for="cover">Image de couverture :</label>
                    <input type="file" class="block"
                    id="cover" name="cover" 
                    accept="image/png, image/jpeg, image/jpg">
                </div> --}}
                <div class="form-check">
                    <fieldset  @error('finish') is-invalid @enderror">
                        <legend>Avez-vous fini ce livre : </legend>
                        @error('finish')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
                        <div>
                          <input class="form-check-input" type="radio" id="yes" name="finish" value="1" checked>
                          <label for="yes">oui j'ai déjà lu ce livre</label>
                        </div>
                    
                        <div>
                          <input class="form-check-input" type="radio" id="no" name="finish" value="0">
                          <label for="no">Non je n'ai pas encore lu ce livre</label>
                        </div>
            
                    </fieldset>
                </div>
                
            
                {{-- <div class="form-group">
                    <label for="rate">Une note </label>
                    <select class="form-control" id="rate" name="rate">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            
                <div class="form-group">
                    <label for="comment">Un commentaire (pour s'en rappeler pour plus tard :))</label>
                    <textarea class="form-control" id="comment" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="cover">Une image de couverture (ça marque bien les images ):</label>
                    <input type="text" class="form-control" id="cover" name="cover" placeholder="rentrez l'adresse du lien de l'image">
                </div> --}}
                <div class="d-flex justify-content-center">
                    <button type="submit" class='bg-success px-3 py-2'>Modifier</button>
                </div>
            </form>
        </div>

    </div>
    
</div>




@endsection