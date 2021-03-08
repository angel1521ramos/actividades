@extends('Plantilla.layout')

@section('content')
<form method="POST" action="{{ route('actividad.store') }}"> 
@csrf
<div class="container">
    <h3>Registrar actividad</h3><br>
    <div class="row">
        <div class="col-sm-6">
            <label>Nombre</label>
            <input 
                name="nombre" 
                class="form-control" 
                value="{{old('nombre')}}"
                placeholder="ingresa aqui el nombre de la actividad" required>
            {!! $errors->first('nombre', '<span class="help-block">:message</span>') !!}
            <label>Grupo</label>
            <input 
                name="grupo" 
                class="form-control" 
                value="{{old('grupo')}}"
                placeholder="ingresa aqui el grupo de la actividad" required>
            {!! $errors->first('grupo', '<span class="help-block">:message</span>') !!}
            <label>Lugar</label>
            <input 
                name="lugar" 
                class="form-control" 
                value="{{old('lugar')}}"
                placeholder="ingresa aqui la lugar de la actividad" required>
            {!! $errors->first('lugar', '<span class="help-block">:message</span>') !!}
            <label >Docente</label>
            <input 
                name="docente" 
                class="form-control" 
                value="{{old('docente')}}"
                placeholder="ingresa aqui el docente de la actividad" required>
            {!! $errors->first('docente', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="col-sm-6">
            <label>Hora de Inicio</label>
            <input 
                name="horaI" 
                class="form-control" 
                value="{{old('horaI')}}"
                placeholder="ingresa aqui la hora de inicio de la actividad" required>
            {!! $errors->first('horaI', '<span class="help-block">:message</span>') !!}
            <label>Hora de Termino</label>
            <input 
                name="horaT" 
                class="form-control" 
                value="{{old('horaT')}}"
                placeholder="ingresa aqui la hora de termino de la actividad" required>
            {!! $errors->first('horaT', '<span class="help-block">:message</span>') !!}
            <label>Dias</label>
            <input 
                name="dias" 
                class="form-control" 
                value="{{old('dias')}}"
                placeholder="ingresa aqui los dias de la actividad" required>
            {!! $errors->first('dias', '<span class="help-block">:message</span>') !!}
        </div>
    </div><br>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="javascript: history.go(-1)" class="btn btn-secondary btn-block">Cancelar</a>
    </div>
</div>
</form>
@stop
