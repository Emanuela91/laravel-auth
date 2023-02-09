@extends('layouts.main-layout')

@section('content')
    <h1>{{$project -> name}}</h1>
    <li>{{$project -> main_image}}
        <br>
        Descrizione: {{$project -> description}}
        <br>
        Data Pubbilcazione: {{$project -> release_date}}
        <br>
        Link Github: {{$project -> repo_link}}
        <br>--------------------- <br>
    </li>
@endsection