<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Hola, {{ Auth::user()->name}}
    </h1>

    <a href="{{ url ('users') }}"> > Usuarios </a>
    <br>
    <br>

    <form method="post" action="{{ url('logout') }}">
        @csrf

        <button type="submit">
            Salir
        </button>

    </form>

</body>
</html>