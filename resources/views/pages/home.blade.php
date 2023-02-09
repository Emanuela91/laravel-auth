@extends('layouts.main-layout')

@section('content')
    <h1>Progetti</h1>
    <ul>
        @foreach ($projects as $project)
            <li>{{$project -> main_image}}
                <br>
                <a href="{{ route('project.show', $project) }}">
                    {{ $project -> name }}
                </a>
                <br>--------------------- <br>
            </li>
        @endforeach
    </ul>
@endsection