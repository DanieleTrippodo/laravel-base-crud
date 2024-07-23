<!DOCTYPE html>
<html>
<head>
    <title>Add New Animal</title>
</head>
<body>
    <h1>Add New Animal</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('animals.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <div>
            <label for="species">Species:</label>
            <input type="text" id="species" name="species" value="{{ old('species') }}" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description">{{ old('description') }}</textarea>
        </div>
        <div>
            <button type="submit">Add Animal</button>
        </div>
    </form>

    <a href="{{ route('animals.index') }}">Back to Animal List</a>
</body>
</html>
