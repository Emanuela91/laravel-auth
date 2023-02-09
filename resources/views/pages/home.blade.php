@extends('layouts.main-layout')

@section('content')
    <h1>Progetti</h1>
    <ul>
        @foreach ($projects as $project)
            <li>{{$project -> main_image}}
                <br>
                {{$project -> name}}
                <br>
                Descrizione: {{$project -> description}}
                <br>
                Data Pubbilcazione: {{$project -> release_date}}
                <br>
                Link Github: {{$project -> repo_link}}
                <br>--------------------- <br>
            </li>
        @endforeach
    </ul>
@endsection