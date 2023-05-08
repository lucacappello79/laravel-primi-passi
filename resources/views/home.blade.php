<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <title>Laravel primi passi</title>
</head>


<body>
<h1>{{$greetings}} {{$planet}}</h1>



<nav>
    <ul>
        @foreach ($links as $item)
            <li><a href="{{ route($item['route']) }}">{{ $item['title'] }}</a></li>
        @endforeach
    </ul>
</nav>


    
</body>
</html>