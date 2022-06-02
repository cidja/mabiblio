@extends('layouts.app')

@section('content')
<h1>Liste des livres</h1>
@foreach ($novels as $novel )
{{ $novel }}
@endforeach

@endsection