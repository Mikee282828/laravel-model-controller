@extends('layouts.app')
@section('title','Movie list')
@section('content')
    <ol>
        @foreach ($movies as $movie)
            <li>{{ $movie->title }}</li>
        @endforeach
    </ol>
@endsection
