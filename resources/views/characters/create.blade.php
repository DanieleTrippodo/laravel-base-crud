@extends('layouts.app')

@section('title', 'Add New Character')

@section('content')
    <h1>Add New Character</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('characters.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label for="class_type" class="form-label">Class Type</label>
            <input type="text" class="form-control" id="class_type" name="class_type" value="{{ old('class_type') }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image_url" class="form-label">Image URL</label>
            <input type="text" class="form-control" id="image_url" name="image_url" value="{{ old('image_url') }}">
        </div>

        <div class="mb-3">
            <label for="image_file" class="form-label">Image File</label>
            <input type="file" class="form-control" id="image_file" name="image_file">
        </div>

        <button type="submit" class="btn btn-primary">Add Character</button>
    </form>
@endsection
