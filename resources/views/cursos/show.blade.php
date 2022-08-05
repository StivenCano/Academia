@extends('layouts.app')

@section('titulo', 'Detalle Curso')

@section('contenido')

    <div class="m-auto">
        <div class="text-center">
            <img class="card-img-top" style="width: 250px; height: 250px;" src="{{ Storage::url($cursito->imagen) }}" alt="Card image cap" >
            <p class="card-text">Descripción: {{$cursito->descripcion}}</p>
            <p class="card-text">Duración: {{$cursito->duracion}} horas</p>
            <a href="/cursos/{{$cursito -> id}}/edit" class="btn btn-success">Editar</a>
        </div>
    </div>

@endsection
