@extends('layouts.default')

@section('title', 'User title')

@section('sidebar')
    <div>
        <nav>
            sidebar de user
        </nav>
    </div>
@endsection

@section('content')
    <h1>
        Hello World
    </h1>

    {{ $user->name }} <br>
    {{ $user->email }} <br>
@endsection
