@extends('layouts.app')

@section('titulo', 'Detalle Curso')

@section('contenido')

    <div class="m-auto">
        <div class="text-center">
            <img class="card-img-top" style="width: 250px; height: 250px;" src="{{ Storage::url($cursito->imagen) }}" alt="Card image cap" >
            <p class="card-text">Descripción: {{$cursito->descripcion}}</p>
            <p class="card-text">Duración: {{$cursito->duracion}} horas</p>
            <a href="/cursos/{{$cursito -> id}}/edit" class="btn btn-success">Editar</a>
            {{-- Para este caso no se necesita escribir destroy en la ruta como si escribimos
                edit en la ruta para obtener el formulario de edición. Aquí creamos un formulario
                simplemente para poder incluir el botón para eliminar --}}
            <form class="form-group" action="/cursos/{{$cursito->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">--ELIMINAR--</button>
            </form>
        </div>
    </div>

@endsection
