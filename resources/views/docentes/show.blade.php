@extends('layouts.app')

@section('titulo', 'Detalle Curso')

@section('contenido')
<div class="m-auto">
    <div class="text-center">
        <img class="card-img-top" style="width: 250px; height: 250px;" src="{{ Storage::url($docentico->imagen) }}" alt="Card image cap" >
        <br>
        <br>
        <iframe width="400" height="400" src="{{ Storage::url($docentico->documento) }}" frameborder="0"></iframe>
        <p class="card-text">Nombre: {{$docentico->nombre}}</p>
        <p class="card-text">Título Universitario: {{$docentico->tituloUniv}}</p>
        <a href="/docentes/{{$docentico -> id}}/edit" class="btn btn-success">Editar</a>
        {{-- Para este caso no se necesita escribir destroy en la ruta como si escribimos
            edit en la ruta para obtener el formulario de edición. Aquí creamos un formulario
            simplemente para poder incluir el botón para eliminar --}}
        <form class="form-group" action="/docentes/{{$docentico->id}}" method="POST">
            @csrf
            @method('DELETE')
            <br>
            <button type="submit" class="btn btn-danger">ELIMINAR</button>

        </form>
    </div>
</div>

@endsection
