@extends('layouts.app')

@section('title', 'Animal Details')

@section('content')
    <h1>{{ $animal->name }}</h1>
    <p><strong>Species:</strong> {{ $animal->species }}</p>
    <p><strong>Description:</strong> {{ $animal->description }}</p>

    @if ($animal->image_url)
        <p><strong>Image URL:</strong> <a href="{{ $animal->image_url }}" target="_blank">{{ $animal->image_url }}</a></p>
    @endif

    @if ($animal->image_path)
        <p><strong>Uploaded Image:</strong></p>
        <img src="{{ asset('storage/' . $animal->image_path) }}" alt="{{ $animal->name }}" style="max-width: 100%;">
    @endif

    <a href="{{ route('animals.index') }}" class="btn btn-secondary mt-3">Back to Animal List</a>
@endsection
