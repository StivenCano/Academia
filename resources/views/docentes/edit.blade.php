@extends('layouts.app')

@section('titulo', 'Editar Curso')

@section('contenido')

<form action="/docentes/{{$docentico-> id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <br>
        <h2>Formulario de edición del docente</h2>
        <div class="form-group">
            <label for="nombre">Edita el nombre del docente</label>
            <input id="nombre" class="form-control" type="text" name="nombre" value="{{$docentico->nombre}}">
        </div>
        <div class="form-group">
            <label for="descripcion">Edita el apellido del docente</label>
            <input id="descripcion" class="form-control" type="text" name="descripcion" value="{{$docentico->apellido}}">
        </div>
        <div class="form-group">
            <label for="duracion">Edita el título universitario</label>
            <input id="duracion" class="form-control" type="text" name="duracion" value="{{$docentico->tituloUniv}}">
        </div>
        <div class="form-group">
            <label for="edad">Editar la edad</label>
            <input id="edad" class="form-control" type="text" name="edad" value="{{$docentico->edad}}">
        </div>
        <div class="form-group">
            <label for="contrato">Editar la fecha del contrato</label>
            <input id="contrato" class="form-control" type="date" name="fecha_contrato" value="{{$docentico->fecha_contrato}}">
        </div>
        <div class="form-group">
            <label for="documento">Editar documento</label>
            <br>
            <iframe width="400" height="400" src="{{ Storage::url($docentico->documento) }}" frameborder="0"></iframe>
            <br>
            <input id="documento" class="form-control"  type="file" name="documento" value="{{$docentico->documento}}">
        </div>
        <div class="form-group">
            <label for="imagen">Cargue la nueva imagen del docente</label>
            <br>
            <div>
            <img class="card-img-top" src="{{ Storage::url($docentico->imagen) }}" alt="Card image cap" style="height: 150px; width: 150px;" >
            </div>
            <br>
            <input id="imagen"  type="file" name="imagen">

        </div>
        <button class="btn btn-success" href="/docentes/{{}}" type="submit">Actualizar</button>
    </div>
</form>

@endsection
