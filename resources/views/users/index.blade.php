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
        Usuarios registrados
    </h1>

    <ol>
        @foreach ($users as $user)
            <li>
                {{ $user -> name}}
                <a href="{{ url('/users', $user -> id) }}">
                    Editar
                </a>
            </li>
        @endforeach
    </ol>
    <!-- <table>
        {{ $users }}
    </table> -->

</body>
</html>