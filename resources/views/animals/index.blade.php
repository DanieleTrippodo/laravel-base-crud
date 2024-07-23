<!DOCTYPE html>
<html>
<head>
    <title>Animal Reserve</title>
</head>
<body>
    <h1>Animal List</h1>

    @if(session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('animals.create') }}">Add New Animal</a>

    <ul>
        @foreach ($animals as $animal)
            <li>
                <a href="{{ route('animals.show', $animal->id) }}">{{ $animal->name }}</a>
            </li>
        @endforeach
    </ul>

    <a href="{{ url('/') }}">Back to Home</a>
</body>
</html>
