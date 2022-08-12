@extends('layouts.app')

@section('titulo', 'Crear docentes')

@section('contenido')
<form action="/docentes" method="POST" enctype="multipart/form-data">
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
        <h2>Aquí puedes inscribirte como docente</h2>
        <div class="form-group">
            <label for="nombre">Nombres del docente</label>
            <input id="nombre" class="form-control" type="text" name="nombre">
        </div>
        <div class="form-group">
            <label for="apellido">Apellidos</label>
            <input id="apellido" class="form-control" type="text" name="apellido">
        </div>
        <div class="form-group">
            <label for="titulo">Título Universitario</label>
            <input id="titulo" class="form-control" type="text" name="tituloUniv">
        </div>
        <div class="form-group">
            <label for="edad">Edad</label>
            <input id="edad" class="form-control" type="text" name="edad">
        </div>
        <div class="form-group">
            <label for="contrato">Fecha del contrato</label>
            <input id="contrato" class="form-control" type="date" name="fecha_contrato">
        </div>
        <div class="form-group">
            <label for="documento">Documento</label>
            <input id="documento" class="form-control" type="file" name="documento">
        </div>
        <div class="form-group">
            <label for="imagen" class="form-label">Cargue la imagen del docente</label>
            <br>
            <input id="imagen" class="form-control" type="file" name="imagen">
        </div>
        <button class="btn btn-dark" type="submit">Inscribirse</button>
    </div>
</form>

@endsection

