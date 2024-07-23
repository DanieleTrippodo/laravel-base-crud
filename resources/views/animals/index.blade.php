<!-- resources/views/animals/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Animal Reserve</title>
</head>
<body>
    <h1>Animal List</h1>
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
