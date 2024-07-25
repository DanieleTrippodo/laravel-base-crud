@extends('layouts.app')

@section('title', 'Character List')

@section('content')
    <h1 class="mb-4">All Valkyria Chronicles Units</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('characters.create') }}" class="btn btn-primary mb-3">Add New Character</a>

    <ul class="list-group">
        @foreach ($characters as $character)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('characters.show', $character->id) }}">{{ $character->name }}</a>
                <div>
                    <a href="{{ route('characters.edit', $character->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('characters.destroy', $character->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

    <a href="{{ url('/') }}" class="btn btn-secondary mt-3">Back to Home</a>
@endsection
