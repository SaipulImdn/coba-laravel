
@extends('layouts.main')

@section('container')

    @foreach ($posts as $posts)
    <h2>{{ $posts["title"] }}</h2>
    <p>{{ $posts["body"]}}</p>
        
    @endforeach
   
@endsection

