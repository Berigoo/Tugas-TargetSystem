@extends('template')

@section('title')
    Hello {{ $name }}
@endsection

@section('content')
    <h2>Hello, {{ $name }}</h2><br><br>
    <h4>{{ $name }} Spaces</h4>
@endsection
