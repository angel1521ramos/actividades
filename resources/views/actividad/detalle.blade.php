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
            value="{{$actividad->nombre}}"
            readonly>
          <label>Grupo: </label>
          <input 
            name="grupo" 
            class="form-control" 
            value="{{$actividad->grupo}}"
            readonly>
          <label>Lugar: </label>
          <input 
            name="lugar" 
            class="form-control" 
            value="{{$actividad->lugar}}"
            readonly>
          <label>Docente: </label>
          <input 
            name="docente" 
            class="form-control" 
            value="{{$actividad->docente}}"
            readonly>
      </div>
      <div class="col-sm-6">
          <label>Hora de incio: </label>
          <input 
            name="horaI" 
            class="form-control" 
            value="{{$actividad->horaI}}"
            readonly>
          <label>Hora de termino: </label>
          <input 
            name="horaT" 
            class="form-control" 
            value="{{$actividad->horaT}}"
            readonly>
          <label>Dias: </label>
          <input 
            name="dias" 
            class="form-control" 
            value="{{$actividad->dias}}"
            readonly>
      </div>
    </div><br>
  <div class="form-group">
    <a href="javascript: history.go(-1)" class="btn btn-secondary btn-block">Cancelar</a>
    <a href="{{ route('actividad.lista', $actividad->id)}}" class="btn btn-outline-primary">
      <i class="fa fa-download "></i>   Lista de alumnos</a>
    <a href="{{ route('actividad.visualizar', $actividad->id) }}" class="btn btn-outline-warning">
      <i class="fa fa-eye"></i>   Lista de alumnos</a>
  </div>
</div>
@stop
