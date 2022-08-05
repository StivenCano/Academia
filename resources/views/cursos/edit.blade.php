@extends('layouts.app')

@section('titulo', 'Editar Curso')

@section('contenido')

<form action="/cursos/{{$cursito-> id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <br>
        <h2>Formulario de edición de curso</h2>
        <div class="form-group">
            <label for="nombre">Edita el nombre</label>
            <input id="nombre" class="form-control" type="text" name="nombre" value="{{$cursito->nombre}}">
        </div>
        <div class="form-group">
            <label for="descripcion">Edita la descripción</label>
            <input id="descripcion" class="form-control" type="text" name="descripcion" value="{{$cursito->descripcion}}">
        </div>
        <div class="form-group">
            <label for="duracion">Edita la duración</label>
            <input id="duracion" class="form-control" type="text" name="duracion" value="{{$cursito->duracion}}">
        </div>
        <div class="form-group">
            <label for="imagen">Cargue la nueva imagen del curso</label>
            <br>
            <div>
            <img class="card-img-top" src="{{ Storage::url($cursito->imagen) }}" alt="Card image cap" style="height: 150px; width: 150px;" >
            </div>
            <br>
            <input id="imagen"  type="file" name="imagen">

        </div>
        <button class="btn btn-success" href="/cursos/{{}}" type="submit">Actualizar</button>
    </div>
</form>

@endsection
