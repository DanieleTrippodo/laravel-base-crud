<!-- resources/views/animals/show.blade.php -->
@extends('layouts.app')

@section('title', 'Animal Details')

@section('content')
    <h1>{{ $animal->name }}</h1>
    <p><strong>Species:</strong> {{ $animal->species }}</p>
    <p><strong>Description:</strong> {{ $animal->description }}</p>

    <a href="{{ route('animals.index') }}" class="btn btn-secondary mt-3">Back to Animal List</a>
@endsection

