@extends('template')

@section('title')
    Login Page
@endsection

@section('content')
    <h1>Login Page</h1>
    <form action="/form/verify" method="POST">
        <label for="name">username : </label>
        <input id="name" name="name" type="text"><br><br>
        <label for="name">Password : </label>
        <input id="pass123" name="pass123" type="text"><br><br>
        <input type="submit">
    </form>
@endsection
