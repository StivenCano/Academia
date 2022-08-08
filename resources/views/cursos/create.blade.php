@extends('layouts.app')

@section('titulo', 'Crear Curso')

@section('contenido')
<form action="/cursos" method="POST" enctype="multipart/form-data">
    @csrf

    @if ($errors->any())
        @foreach ($errors->all() as $alerta)
        <div class="alert alert-danger" role="alert">
            <ul>
            <li>{{$alerta}}</li>
            </ul>
        </div>
        @endforeach

    @endif
    <br>
        <h2>Aquí puedes crear un nuevo curso</h2>
        <div class="form-group">
            <label for="nombre">Nombre del curso</label>
            <input id="nombre" class="form-control" type="text" name="nombre">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input id="descripcion" class="form-control" type="text" name="descripcion">
        </div>
        <div class="form-group">
            <label for="duracion">Duración</label>
            <input id="duracion" class="form-control" type="text" name="duracion">
        </div>
        <div class="form-group">
            <label for="imagen">Cargue la imagen del curso</label>
            <br>
            <input id="imagen"  type="file" name="imagen">

        </div>
        <button class="btn btn-info" type="submit">Crear</button>
    </div>
</form>
@endsection
