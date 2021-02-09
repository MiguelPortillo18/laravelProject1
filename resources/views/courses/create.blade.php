@extends('layouts.plantilla')

@section('title', 'Crear curso')

@section('content')
    <h1>En esta pagina podras crear un curso</h1>

    <form action="{{route('cursos.store')}}" method="POST">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Descripcion: 
            <br>
            <textarea name="desc" rows="5">{{old('name')}}</textarea>
        </label>

        @error('desc')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Categoria: 
            <br>
            <input type="text" name="category" value="{{old('category')}}">
        </label>

        @error('category')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br><br>

        <button type="submit">Enviar formulario</button>
    </form>
@endsection
