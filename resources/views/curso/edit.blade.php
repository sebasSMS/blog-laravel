@extends('layouts.plantilla')

@section('title', 'cursos edit')

@section('content')
    <h1>en esta pagian podras Editar tus cursos</h1>

    <form action="{{ route('cursos.update', $curso) }}" method="post">
        {{-- esat fnucion es para mandar un TOKEN  --}}
        @csrf
        @method('put')
        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $curso->name )}}">
        </label>
        @error('name')
            <br>
            <small>*{{ $message }}</small>

            <br>
        @enderror

        <br>
        <label for="">
            descripcion:
            <br>
            <textarea name="descripcion" id="" rows="5">{{ old('descripcion' ,$curso->descripcion) }}</textarea>
        </label>
        @error('descripcion')
            <br>
            <small>*{{ $message }}</small>

            <br>
        @enderror

        <br>
        <label for="">
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{ old('categoria', $curso->categoria) }}">
        </label>
        @error('categoria')
            <br>
            <small>*{{ $message }}</small>

            <br>
        @enderror

        <br>
        <br>
        <button type="submit">Actualizar form</button>

    </form>
@endsection
<!DOCTYPE html>
