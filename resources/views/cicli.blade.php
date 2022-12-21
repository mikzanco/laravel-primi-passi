<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Hompage</title>
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
    <div class="container-big">

        <div class="container">
            <h1>{{ $nome_page }}</h1>
        </div>

        <div class="container">
            <h3>Qualche libro da leggere stampato con un ciclo FOREACH</h3>
            <ul>
                @foreach($books as $book)
                    <li>{{ $book }}</li>
                @endforeach
            </ul>

        </div>
    </div>
    <div class="container">
        <h3>Una semplice lista di 20 numeri stampata con un ciclo FOR</h3>
        <ul>
            @for($i = 0; $i < 20; $i++)
                <li> {{ $i +1 }} </li>
            @endfor
        </ul>
    </div>


</body>
</html>
