@extends('layouts\default')

@section('sidebar')
@endsection

@section('content')
    <h5>Adicionar business (model)</h5>
    @if ($errors->any())
    Errors: <br>
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
    <form method="POST" action="{{ route('businesses.store') }}">
        @csrf
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
            {{ $message }}
        @enderror
        <br>
        <input type="text" name="email" value="{{ old('email') }}">
        @error('email')
            {{ $message }}
        @enderror
        <br>
        <input type="text" name="address" value="{{ old('address') }}">
        @error('address')
            {{ $message }}
        @enderror
        <br>
        <button type="submit">Save</button>
    </form>
    <hr>

    @foreach ($businesses as $business)
        {{ $business->name }} {{ $business->email }}<br>
    @endforeach

    {{-- {{ dd($businesses) }} --}}
@endsection
