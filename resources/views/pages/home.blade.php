@extends('layouts.main-layout')

@section('content')
    <h1>Progetti</h1>
    <ul>
        @foreach ($projects as $project)
            <li>{{ $project -> name }}</li>
        @endforeach
    </ul>
@endsection