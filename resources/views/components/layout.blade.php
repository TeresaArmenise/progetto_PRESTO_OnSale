<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @if (session('message'))
    <div class="alert alert-success fs-1">
        <p>{{ session('message') }}</p>
    </div>        
    @endif
    <div class="min-vh-100">
        {{$slot}}
    </div>
</body>
</html>