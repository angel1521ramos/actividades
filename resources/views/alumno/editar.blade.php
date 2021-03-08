@extends('plantilla.layout')

@section('content')
<form method="POST" action="{{ route('alumno.update', $alumno->id) }}"> 
    @csrf
    @method('PUT')
    <div class="container">
        <h3>Registrar alumno</h3><br>
        <div class="row">
            <div class="col-sm-6">
                <label>Nombre</label>
                <input 
                    name="nombre" 
                    class="form-control" 
                    value="{{$alumno->nombre}}"
                    placeholder="ingresa aqui el nombre del alumno" required>
                    {!! $errors->first('nombre', '<span class="help-block">:message</span>') !!}
                <!--div del titulo del post------------------------------------------------------------------------------>
                <label>Apellido paterno</label>
                <input 
                    name="apellidoP" 
                    class="form-control" 
                    value="{{$alumno->apellidoP}}"
                    placeholder="ingresa aqui el apellido paterno del alumno" required>
                    {!! $errors->first('apellidoP', '<span class="help-block">:message</span>') !!}
                <!--div del titulo del post------------------------------------------------------------------------------>
                <label>Apellido materno</label>
                <input 
                    name="apellidoM" 
                    class="form-control" 
                    value="{{$alumno->apellidoM}}"
                    placeholder="ingresa aqui el apellido materno del alumno" required>
                    {!! $errors->first('apellidoM', '<span class="help-block">:message</span>') !!}
                <!--div de las categoria del post------------------------------------------------------------------------------>
                <label >Actividad</label>
                <select name="actividad_id" class="form-control">
                    <option value="">Selecciona un actividad</option>
                    @foreach ($actividad as $x)
                        <option value="{{ $x->id }}" 
                            {{old('actividad_id', $alumno->actividad_id) == $x->id ? 'selected' : ''}}>{{$x->nombre}}</option>
                    @endforeach
                </select>
                    {!! $errors->first('actividad_id', '<span class="help-block">:message</span>') !!}
            </div>
            <div class="col-sm-6">
                <!--div del titulo del post------------------------------------------------------------------------------>
                    <label>Semestre</label>
                    <select class="form-select" aria-label="Default select example" name="semestre">
                        <option selected >Selecciona un semestre</option>
                        <option value="1er">1er</option>
                        <option value="2do">2do</option>
                        <option value="3ero">3ero</option>
                        <option value="4to">4to</option>
                        <option value="5to">5to</option>
                        <option value="6to">6to</option>
                        <option value="7mo">7mo</option>
                        <option value="8vo">8vo</option>
                        <option value="9no">9no</option>
                      </select>
                    {!! $errors->first('semestre', '<span class="help-block">:message</span>') !!}
                <!--div del titulo del post------------------------------------------------------------------------------>
                    <label>Correo</label>
                    <input 
                        name="correo" 
                        class="form-control" 
                        value="{{$alumno->correo}}"
                        placeholder="ingresa aqui el Correo del alumno" required>
                    {!! $errors->first('correo', '<span class="help-block">:message</span>') !!}
                <!--div del titulo del post------------------------------------------------------------------------------>
                    <label>Telefono</label>
                    <input 
                        name="telefono" 
                        class="form-control" 
                        value="{{$alumno->telefono}}"
                        placeholder="ingresa aqui el telefono del alumno" required>
                    {!! $errors->first('telefono', '<span class="help-block">:message</span>') !!}
                <!--div del titulo del post------------------------------------------------------------------------------>
                    <label>Carrera</label>
                    <select class="form-select" aria-label="Default select example" name="carrera">
                        <option selected>Selecciona una carrera</option>
                        <option value="Administración">Administración</option>
                        <option value="Animación Digital y Efectos Visuales">Animación Digital y Efectos Visuales</option>
                       <option value="Bioquímica">Bioquímica</option>
                        <option value="Eléctrica">Eléctrica</option>
                        <option value="Electrónica">Electrónica</option>
                        <option value="Gestión Empresarial">Gestión Empresarial</option>
                        <option value="Informática">Informática</option>
                        <option value="Industrial">Industrial</option>
                        <option value="Mecatrónica">Mecatrónica</option>
                        <option value="Mecánica">Mecánica</option>
                        <option value="Petrolera">Petrolera</option>
                        <option value="Química">Química</option>
                        <option value="Sistemas Computacionales">Sistemas Computacionales</option>
                      </select>
                    {!! $errors->first('carrera', '<span class="help-block">:message</span>') !!}
            </div>
        </div><br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">GUARDAR</button>
            <a href="javascript: history.go(-1)" class="btn btn-success btn-block">CANCELAR</a>
        </div>
    </div>
</form>
@endsection

