@extends('layouts.app')

@section('title', 'Animal List')

@section('content')
    <h1 class="mb-4">Animal List</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('animals.create') }}" class="btn btn-primary mb-3">Add New Animal</a>

    <ul class="list-group">
        @foreach ($animals as $animal)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('animals.show', $animal->id) }}">{{ $animal->name }}</a>
                <form action="{{ route('animals.destroy', $animal->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    <a href="{{ url('/') }}" class="btn btn-secondary mt-3">Back to Home</a>
@endsection
