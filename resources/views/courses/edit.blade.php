@extends('layouts.plantilla')

@section('title', 'Editar curso')

@section('content')
    <h1>Editar un curso</h1>

    <form action="{{route('cursos.update', $curso)}}" method="POST">

        @csrf

        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
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
            <textarea name="desc" rows="5">{{old('desc', $curso->desc)}}</textarea>
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
            <input type="text" name="category" value="{{old('categoey', $curso->category)}}">
        </label>

        @error('category')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br><br>

        <button type="submit">Actualizar formulario</button>
    </form>
@endsection
