@extends('layouts.app')

@section('title', 'Character Details')

@section('content')
    <h1>{{ $character->name }}</h1>

    <div class="card" style="width: 100%;">
        <img src="{{ $character->image_path ? asset('storage/' . $character->image_path) : $character->image_url }}" class="card-img-top" alt="{{ $character->name }}">
        <div class="card-body">
            <h5 class="card-title">{{ $character->name }}</h5>
            <p class="card-text"><strong>Class Type:</strong> {{ $character->class_type }}</p>
            <p class="card-text">{{ $character->description }}</p>
            <a href="{{ route('characters.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
@endsection
