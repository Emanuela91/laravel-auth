@extends('layouts.main-layout')

@section('content')
    <h1>Progetti</h1>
    {{-- con @auth @endauth mostro ciò che c'è all'interno solo quando sono loggata --}}
    @auth
    <a href="{{route('admin.project.store')}}">
    Crea un nuovo progetto
    </a>        
    @endauth
    <ul>
        @foreach ($projects as $project)
            <li><img src="{{$project -> main_image}}" alt="">
                <br>
                <a href="{{ route('project.show', $project) }}">
                    {{ $project -> name }}
                </a>
                <br>--------------------- <br>
            </li>
        @endforeach
    </ul>
@endsection