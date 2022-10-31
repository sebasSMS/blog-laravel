@extends('layouts.plantilla')

@section('title', 'cursos create')

@section('content')
    <h1>en esta pagian podras crear tus cursos</h1>

    <form action="{{ route('cursos.store') }}" method="post">
        {{-- esat fnucion es para mandar un TOKEN  --}}
        @csrf
        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
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
            <textarea name="descripcion" id="" rows="5">{{old('descripcion')}}</textarea>
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
            <input type="text"  value="{{old('categoria')}}" name="categoria">
        </label>
        @error('categoria')
        <br>
        <small>*{{ $message }}</small>
        <br>
    @enderror

        <br>
        <br>
        <button type="submit">Enviar form</button>

    </form>
@endsection
<!DOCTYPE html>
