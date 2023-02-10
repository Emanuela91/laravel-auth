@extends('layouts.main-layout')

@section('content')
    <h1>{{$project -> name}}</h1>
    <li><img class="main-img" src="{{asset('storage/' . $project -> main_image)}}" alt="">
        <br>
        Descrizione: {{$project -> description}}
        <br>
        Data Pubblicazione: {{$project -> release_date}}
        <br>
        Link: <a href="{{$project -> repo_link}}">Github</a>
        <br>--------------------- <br>
        @auth
        <a href="{{route('admin.project.edit', $project)}}">Correggi</a>
        <br>
        <a href="{{route('admin.project.delete', $project)}}">Cancella</a>
        @endauth
    </li>
@endsection