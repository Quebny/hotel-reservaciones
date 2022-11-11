@extends('layouts.app')

@section('contenido')
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
@endsection