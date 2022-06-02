@extends('layouts.app')

@section('content')
<h1>Création d'un nouveau livre</h1>

<form action="{{ route('novels.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="title">Titre de l'ouvrage</label>
        <input type="text" class="form-control" id="title" name="title" required autofocus>
    </div>
    <div class="form-group">
        <label for="author_firstname">Prénom de l'auteur</label>
        <input type="text" class="form-control" id="author" name="author_firstname" required>
    </div>
    <div class="form-group">
        <label for="author_lastname">Nom de l'auteur</label>
        <input type="text" class="form-control" id="author" name="author_lastname" required>
    </div>
    <div class="form-group">
        <label for="isbn">ISBN</label>
        <input type="number" class="form-control" id="isbn" name="isbn" placeholder="exemple : 2253257419">
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
        <select class="form-control" id="publication" name="book_type">
            <option>papier</option>
            <option>kindle</option>
        </select>
    </div>

    <div class="form-group">
        <label for="pages_nb">Nombre de pages : </label>
        <input type="number" class="form-control" id="page_count" name="pages_nb">
    </div>

    <div class="form-group">
        <label for="volumes_nb">Nombre de tomes :</label>
        <input type="text" class="form-control" id="count_volume" name="volumes_nb" value="0"">
        <small id="count_volumeHelp" class="form-text text-muted">Si aucun autre tome mettre 0</small>
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
        <button type="submit" class='bg-success'>Créer</button>
    </div>
</form>



@endsection