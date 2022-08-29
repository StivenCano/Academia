@extends('layouts.app')

@section('titulo', 'Crear estudiante')

@section('contenido')

<form action="/student" method="POST" enctype="multipart/form-data">
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

<div class="container">
    <div class="row">
      <div class="col-sm">
        <h2>Documento de identidad</h2>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Tipo de documento</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Cédula de ciudadanía</option>
              <option>Tarjeta de identidad</option>
              <option>Pasaporte</option>
              <option>Extranjería</option>
            </select>
          </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">No. de documento</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="10101010">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Cargar</span>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile01">
                  <label class="custom-file-label" for="inputGroupFile01">Cargue Doc. de identificación</label>
                </div>
              </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">País de expedición</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Colombia</option>
                  <option>Venezuela</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Departamento donde fue expedido</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Cédula de ciudadanía</option>
                  <option>Tarjeta de identidad</option>
                  <option>Pasaporte</option>
                  <option>Extranjería</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Municipio donde fue expedido</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Cédula de ciudadanía</option>
                  <option>Tarjeta de identidad</option>
                  <option>Pasaporte</option>
                  <option>Extranjería</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Fecha de expedición</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" >
              </div>
      </div>
      <div class="col-sm">
        <h2>Datos de identificación</h2>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nombres</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Primer apellido</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Segundo apellido</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Género</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Hombre</option>
              <option>Mujer</option>
              <option>Prefiero no decirlo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">País de nacimiento</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Colombia</option>
              <option>Venezuela</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Departamento de nacimiento</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Hombre</option>
              <option>Mujer</option>
              <option>Prefiero no decirlo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Municipio de nacimiento</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Hombre</option>
              <option>Mujer</option>
              <option>Prefiero no decirlo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Estrato Socioeconómico</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
            </select>
        </div>
        <button type="button" class="btn btn-secondary">Regresar</button>
        <button type="button" class="btn btn-success">Continuar</button>
      </div>
    </div>
</div>
</form>
@endsection
