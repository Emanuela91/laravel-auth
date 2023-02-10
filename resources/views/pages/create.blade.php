@extends('layouts.main-layout')

{{-- form per creare il nuovo progetto  --}}
@section('content')
    <form action="{{route('admin.project.create')}} " method="POST">
    @csrf

    <label for="name">Nome</label>
    <input type="text" name="name">
    <br>
    <label for="description">Descrizione</label>
    <textarea name="description"></textarea>
    <br>
    <label for="main_image">Immagine Pricipale</label>
    <input type="text" name="main_image">
    <br>
    <label for="release_date">Data Pubblicazione</label>
    <input type="date" name="release_date">
    <br>
    <label for="repo_link">Link Github</label>
    <input type="text" name="repo_link">
    <br>
    <input type="submit" value="Crea Nuovo Progetto">
    </form>
@endsection