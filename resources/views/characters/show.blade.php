@extends('layouts.app')

@section('title', 'Character Details')

@section('content')
    <h1>{{ $character->name }}</h1>
    <p><strong>Class Type:</strong> {{ $character->class_type }}</p>
    <p><strong>Description:</strong> {{ $character->description }}</p>

    @if ($character->image_url)
        <p><strong>Image URL:</strong> <a href="{{ $character->image_url }}" target="_blank">{{ $character->image_url }}</a></p>
    @endif

    @if ($character->image_path)
        <p><strong>Uploaded Image:</strong></p>
        <img src="{{ asset('storage/' . $character->image_path) }}" alt="{{ $character->name }}" style="max-width: 100%;">
    @endif

    <a href="{{ route('characters.index') }}" class="btn btn-secondary mt-3">Back to Character List</a>
@endsection
