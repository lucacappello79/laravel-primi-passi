<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Laravel primi passi</title>
</head>


<body>
<h1>{{$greetings}} {{$planet}}</h1>

<nav>
        
    <ul>
        {{-- @foreach ($data2 as $item)  --}}
        @foreach ($data2 as $item)
            <li>{{ $item }}</li>     
        @endforeach
    </ul>

    <ul>
        <li><a href="{{ route('page2') }}">Page 2</a></li>
        <li><a href="{{ route('page3') }}">Page 3</a></li>
        <li><a href="{{ route('page4') }}">Page 4</a></li>
        <li><a href="{{ route('page5') }}">Page 5</a></li>
    </ul>
</nav>


    
</body>
</html>