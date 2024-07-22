<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome to the Animal Reserve</h1>
    <p>This is the new home page of the Animal Reserve website.</p>
    <a href="{{ route('animals.index') }}">View Animal List</a>
</body>
</html>
