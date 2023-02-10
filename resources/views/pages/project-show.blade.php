@extends('layouts.main-layout')

@section('content')
    <h1>{{$project -> name}}</h1>
    <li>{{$project -> main_image}}
        <br>
        Descrizione: {{$project -> description}}
        <br>
        Data Pubblicazione: {{$project -> release_date}}
        <br>
        Link Github: {{$project -> repo_link}}
        <br>--------------------- <br>
        @auth
        <a href="{{route('admin.project.edit', $project)}}">Correggi</a>
        <br>
        <a href="{{route('admin.project.delete', $project)}}">Cancella</a>
        @endauth
    </li>
@endsection