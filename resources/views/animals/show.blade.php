<!-- resources/views/animals/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Animal Details</title>
</head>
<body>
    <h1>{{ $animal->name }}</h1>
    <p>Species: {{ $animal->species }}</p>
    <p>Description: {{ $animal->description }}</p>
    <a href="{{ route('animals.index') }}">Back to Animal List</a>
</body>
</html>
