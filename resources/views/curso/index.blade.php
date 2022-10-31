@extends('layouts.plantilla')

@section('title','cursos')


@section('content')
    <h1>Bienvenido al curso principal</h1>
    <a href="{{route('cursos.create')}}">Crear curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li><a href="{{route('cursos.show', $curso->id)}}">{{$curso->name}}</a></li> 
            
        @endforeach
    {{$cursos->links()}}
@endsection

