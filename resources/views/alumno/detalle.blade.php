@extends('Plantilla.layout')

@section('header')
  <h1>hola</h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Tabla</a></li>
    <li class="active">Detalle</li>
  </ol>
@endsection

@section('content')
  <div class="container"><!--filas de 8 de 12----->
    <div class="row">
      <div class="col-sm-6">
        <label>Nombre: </label>
          <input 
            name="nombre" 
            class="form-control" 
            value="{{$alumno->nombre}} {{$alumno->apellidoP}} {{$alumno->apellidoM}}"
            readonly>
        <label>Semestre: </label>
          <input 
            name="semestre" 
            class="form-control" 
            value="{{$alumno->semestre}}"
            readonly>
        <label>Carrera: </label>
          <input 
            name="carrera" 
            class="form-control" 
            value="{{$alumno->carrera}}"
            readonly>
      </div>
      <div class="col-sm-6">
        <label>Actividad: </label>
          <input 
            name="actividad" 
            class="form-control" 
            value="{{$alumno->actividad->nombre}}"
            readonly>
        <label>Correo: </label>
          <input 
            name="correo" 
            class="form-control" 
            value="{{$alumno->correo}}"
            readonly>
        <label>Telefono: </label>
          <input 
            name="telefono" 
            class="form-control" 
            value="{{$alumno->telefono}}"
            readonly>
      </div>
    </div>
    <div class="form-group">
      <a href="javascript: history.go(-1)" class="btn btn-success btn-block">CANCELAR</a>
    </div>
  </div>
@stop
