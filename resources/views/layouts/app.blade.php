<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Animal Reserve')</title>


    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>





<body>
    {{-- contenuto HTML --}}


    <div class="container mt-5">
        @yield('content')
    </div>



</body>
</html>
