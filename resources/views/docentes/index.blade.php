@extends('layouts.app')

@section('titulo', 'Lista docentes')

@section('contenido')

    <h2>Listado de docentes</h2>
<div class="row">
    @foreach ($docentico as $item)
    <div class="col-sm">
        <div class="card text-center" style="width: 18rem;">
            <img src="{{ Storage::url($item->imagen)}}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{$item->nombre}}</h5>

            <a href="/docentes/{{$item -> id}}" class="btn btn-primary">Ver Detalles</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
