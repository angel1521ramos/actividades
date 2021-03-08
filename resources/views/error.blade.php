@extends('Plantilla.layout')

@section('content')
<div class="container">
    <div class="row">
        <form method="GET" action="{{ route('actividad.create') }}" style="display: inline">
        @csrf
        <h5>No hay actividades creadas</h5>
        <br>
            <button class="btn btn-primary" >Agregar actividad</button>
        </form>
    </div>
</div>
@stop