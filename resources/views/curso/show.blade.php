@extends('layouts.plantilla')

@section('title','cursos' . $curso->name)


@section('content')
    <h1>Bienvenidos al curso: {{$curso->name}} </h1>
    <a href="{{route('cursos.index')}}">Volver a Curso</a>
    <br>
    <a href="{{route('cursos.edit', $curso)}}">Editar curso</a>
    <p><strong>Caregoria: </strong>{{$curso->categorias}}</p>
    <p>{{$curso->descripcion}}</p>

    <form action="{{route('cursos.destroy' , $curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection