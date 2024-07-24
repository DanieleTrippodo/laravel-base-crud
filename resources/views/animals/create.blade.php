@extends('layouts.app')

@section('title', 'Add New Animal')

@section('content')
    <h1>Add New Animal</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('animals.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>
        <div class="mb-3">
            <label for="species" class="form-label">Species:</label>
            <input type="text" id="species" name="species" class="form-control" value="{{ old('species') }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea id="description" name="description" class="form-control">{{ old('description') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Animal</button>
    </form>

    <a href="{{ route('animals.index') }}" class="btn btn-secondary mt-3">Back to Animal List</a>
@endsection
