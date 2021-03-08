@extends('Plantilla.layout')

@section('content')
  <form method="GET" action="{{ route('alumno.create') }}" style="display: inline">
    @csrf
    <button class="btn btn-primary" >Agregar alumno</button>
  </form><br><br>
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Lista de alumnos</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="posts-table" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Actividad</th>
            <th>Semestre</th>
            <th>Carrera</th>
            <th>Acciones</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($alumno as $x)<!-- la variable post debe ser creada en el post controler--->
                <tr>
                    <td>{{$x->nombre}} {{$x->apellidoP}} {{$x->apellidoM}}</td>
                    <td>{{$x->actividad->nombre}}</td>
                    <td>{{$x->semestre}}</td>
                    <td>{{$x->carrera}}</td>
                    <td>
                      <form method="GET" action="{{ route('alumno.show', $x->id) }}" style="display: inline">
                        @csrf
                          <button class="btn btn-sm btn-success" ><i class="fa fa-eye"></i></button>
                      </form>
                      <form method="GET" action="{{ route('alumno.edit', $x->id) }}" style="display: inline">
                        @csrf
                        @method('UPDATE')
                        <button class="btn btn-sm btn-primary" ><i class="fa fa-pencil"></i></button>
                      </form>
                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
                          <i class="fa fa-times"></i>
                        </button>
                    </td>
                </tr>
                
            @endforeach
        </tbody>

      </table>
    </div>
    <div class="form-group">
      <a href="{{ route('inicio')}}" class="btn btn-primary">volver</a>
    </div><br>
  </div>
@stop

@push('scripts')
<!-- Modal -->
<form method="POST" action="{{ route('alumno.destroy', $x) }}" style="display: inline">
  @csrf
  @method('DELETE')
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar alumno</h5>
        </div>
        <div class="modal-body">
          ¿Desea eliminar la información del alumno?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button>
          <button class="btn btn-danger">Si, eliminar</button>
        </div>
      </div>
    </div>
  </div>
</form>
@endpush