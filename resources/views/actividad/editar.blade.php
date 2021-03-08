@extends('plantilla.layout')

@section('content')
    <div class="row">
    <form method="POST" action="{{ route('actividad.update', $actividad->id) }}">
        @csrf
        @method('PUT')
        <div class="col-md-6"><!--filas de 8 de 12----->
            <div class="box box-primary">
                <div class="box-body">

                        <!--div del titulo del post------------------------------------------------------------------------------>
                        <div class="form-group {{$errors->has('nombre') ? 'has-error' : '' }} ">
                            <label>Nombre</label>
                            <input 
                                name="nombre" 
                                class="form-control" 
                                value="{{$actividad->nombre}}"
                                placeholder="ingresa aqui el nombre de la actividad"><!--para mostrar los errores front end-->
                        </div>

                        <!--div del titulo del post------------------------------------------------------------------------------>
                        <div class="form-group {{$errors->has('grupo') ? 'has-error' : '' }} ">
                            <label>Grupo</label>
                            <input 
                                name="grupo" 
                                class="form-control" 
                                value="{{$actividad->grupo}}"
                                placeholder="ingresa aqui la grupo de la actividad"><!--para mostrar los errores front end-->
                        </div>

                        <!--div del titulo del post------------------------------------------------------------------------------>
                        <div class="form-group {{$errors->has('lugar') ? 'has-error' : '' }} ">
                            <label>Lugar</label>
                            <input 
                                name="lugar" 
                                class="form-control" 
                                value="{{$actividad->lugar}}"
                                placeholder="ingresa aqui la lugar de la actividad"><!--para mostrar los errores front end-->
                        </div>

                        <!--div de las categoria del post------------------------------------------------------------------------------>
                        <div class="form-group {{$errors->has('docente_id') ? 'has-error' : '' }} ">
                            <label >Docente</label>
                            <input 
                                name="docente" 
                                class="form-control" 
                                value="{{$actividad->docente}}"
                                placeholder="ingresa aqui el docente de la actividad">
                            {!! $errors->first('docente_id', '<span class="help-block">:message</span>') !!}
                        </div>
                </div>
            </div>
        </div>

        <div class="col-md-6"><!--filas de 8 de 12----->
            <div class="box box-primary">
                <div class="box-body">

                    <!--div del titulo del post------------------------------------------------------------------------------>
                    <div class="form-group {{$errors->has('horaI') ? 'has-error' : '' }} ">
                        <label>Hora de inicio</label>
                        <input 
                            name="horaI" 
                            class="form-control" 
                            value="{{$actividad->horaI}}"
                            placeholder="ingresa aqui la hora de inicio de la actividad"><!--para mostrar los errores front end-->
                    </div>

                    <!--div del titulo del post------------------------------------------------------------------------------>
                    <div class="form-group {{$errors->has('horaT') ? 'has-error' : '' }} ">
                        <label>Hora de termino</label>
                        <input 
                            name="horaT" 
                            class="form-control" 
                            value="{{$actividad->horaT}}"
                            placeholder="ingresa aqui la hora de termino de la actividad"><!--para mostrar los errores front end-->
                    </div>
                    
                    <!--div del titulo del post------------------------------------------------------------------------------>
                    <div class="form-group {{$errors->has('dias') ? 'has-error' : '' }} ">
                        <label>Dias</label>
                        <input 
                            name="dias" 
                            class="form-control" 
                            value="{{$actividad->dias}}"
                            placeholder="ingresa aqui los dias de la actividad"><!--para mostrar los errores front end-->
                    </div>

                    <!--div del boton guardar del post------------------------------------------------------------------------------>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                        <a href="javascript: history.go(-1)" class="btn btn-secondary btn-block">Cancelar</a>
                    </div>

                </div>
            </div>
        </div>

    </form>
    </div>
@endsection

