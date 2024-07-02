@extends('layouts.app')

@section('content')
    @foreach ($movies as $movie)
        <pre>{{ $movie['title'] }}</pre>
    @endforeach
    
@endsection
