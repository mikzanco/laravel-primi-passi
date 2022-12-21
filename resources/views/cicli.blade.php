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
    <div class="container-big">

        <div class="container">
            <h1>{{ $nome_page }}</h1>
            <a href="/">Torna alla Home</a>
        </div>

        <div class="container">
            <ul>
                @foreach($books as $book)
                    <li>{{ $book }}</li>
                @endforeach
            </ul>

        </div>
    </div>



</body>
</html>
