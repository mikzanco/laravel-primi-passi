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

    <div class="container">
        <h1>{{ $saluto }}</h1>
        <h2>{{ $altro_saluto }}</h2>

        <a href="/cicli"></a>
    </div>

</body>
</html>
