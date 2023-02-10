@extends('layouts.main-layout')

{{-- form per creare il nuovo progetto  --}}
@section('content')
    <form action="{{route('admin.project.update', $project)}}" method="POST"  enctype="multipart/form-data">
    @csrf

    <label for="name">Nome</label>
    <input type="text" name="name" value={{$project-> name}}>
    <br>
    <label for="description">Descrizione</label>
    <textarea name="description" value={{$project-> description}}></textarea>
    <br>
    <label for="main_image">Immagine Pricipale</label>
    <input type="file" name="main_image" value={{$project-> main_image}}>
    <br>
    <label for="release_date">Data Pubblicazione</label>
    <input type="date" name="release_date" value={{$project-> release_date}}>
    <br>
    <label for="repo_link">Link Github</label>
    <input type="text" name="repo_link" value={{$project-> repo_link}}>
    <br>
    <input type="submit" value="Aggiorna il tuo Progetto">
    </form>
@endsection