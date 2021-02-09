@extends('layouts.plantilla')

@section('title', 'Contact Us')

@section('content')
    <h1>Dejanos un mensaje</h1>

    <form action="{{route('contactUs.store')}}" method="POST">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name">
            <br>
        </label>
        <br>

        @error('name')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label>
            Correo electronico:
            <br>
            <input type="text" name="mail">
            <br>
        </label>
        <br>

        @error('mail')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label>
            Mensaje:
            <br>
            <textarea name="mensaje" rows="4"></textarea>
            <br>
        </label>
        <br>

        @error('mensaje')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <button type="submit">Enviar mensaje</button>
    </form>

    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif
@endsection
