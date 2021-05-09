@extends('layouts.app')
@section('title', $user->name)

@section('content')

    <h1>En esta pagina podras editar un cursos</h1>



    <form action="{{route('courses.update', $user)}}" method="post">

        @csrf
        @method('put')
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name', $user->name)}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>

        @enderror
        <br>
        <label>
            Email: <br>
            <input type="text" name="email" value="{{old('description', $user->email)}}">

        </label>
        @error('description')
        <br>
        <small>*{{$message}}</small>
        <br>

    @enderror

    <br>
        <label>
            Tipo: <br>
            <input type="text" name="tipo" value="{{old('active', $user->tipo)}}">

        </label>
        @error('active')
        <br>
        <small>*{{$message}}</small>
        <br>

    @enderror


        <br>
        <button type="submit">Actualizar Usuario</button>

    </form>



@endsection
