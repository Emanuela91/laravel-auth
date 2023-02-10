@extends('layouts.main-layout')

@section('content')
    <h1>Progetti</h1>
    <a href="{{route('admin.project.store')}}">
    Crea un nuovo progetto
    </a>
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