<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>nnew</title>
</head>
<body>
    <header>
        <div class="header-cont">
            <div class="nav">
                <a href="/">Torna alla Home</a>
            </div>
            <div class="nav">
                <a href="/cicli">Passa a vedere i cicli</a>
            </div>
            <div class="nav">
                <a href="/navbar">navbar</a>
            </div>
        </div>
    </header>

    <div class="container">
        @foreach ($team as $member )
            <div class="box">
                <h2>{{$member['name']}}</h2>
                <h3>{{$member['surname']}}</h3>
            </div>
        @endforeach
    </div>
</body>
</html>
