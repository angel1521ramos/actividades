@extends('Plantilla.layout')

@section('content')
  <form method="GET" action="{{ route('actividad.create') }}" style="display: inline">
    @csrf
    <button class="btn btn-primary" >Agregar actividad</button>
  </form>
  <form method="GET" action="{{ route('alumno.create') }}" style="display: inline">
    @csrf
    <button class="btn btn-primary" >Agregar alumno</button>
  </form><br><br>
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Lista de Actividades</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="posts-table" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Encargado</th>
            <th>Horario</th>
            <th>Dias</th>
            <th>Acciones</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($actividad as $x)<!-- la variable post debe ser creada en el post controler--->
                <tr>
                    <td>{{$x->nombre}}</td>
                    <td>{{$x->docente}}</td>
                    <td>{{$x->horaI}} - {{$x->horaT}}</td>
                    <td>{{$x->dias}}</td>
                    <td>
                      <form method="GET" action="{{ route('actividad.show', $x->id) }}" style="display: inline">
                        @csrf
                          <button class="btn btn-sm btn-success" ><i class="fa fa-eye"></i></button>
                      </form>
                      <form method="GET" action="{{ route('actividad.edit', $x->id) }}" style="display: inline">
                        @csrf
                        @method('UPDATE')
                        <button class="btn btn-sm btn-primary" ><i class="fa fa-pencil"></i></button>
                      </form>
                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-times"></i></button>
                    </td>
                </tr>
                
            @endforeach
        </tbody>

      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <div class="form-group">
    <a href="{{ route('actividad.lista.actividades')}}" class="btn btn-outline-primary">
      <i class="fa fa-download "></i>   Lista de actividades</a>
    <a href="{{ route('actividad.visualizar.actividades') }}" class="btn btn-outline-warning">
      <i class="fa fa-eye"></i>   Lista de actividades</a>
  </div>
@stop

@push('styles')
  <link rel="stylesheet" href="{{ URL::asset('panelAdmin/plugins/datatables/dataTables.bootstrap.css')}}">
@endpush

@push('scripts')
  <script src="{{ URL::asset('panelAdmin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{ URL::asset('panelAdmin/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
  
<!-- Modal -->
<form method="POST" action="{{ route('actividad.destroy', $x) }}" style="display: inline">
  @csrf
  @method('DELETE')
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Actividad</h5>
        </div>
        <div class="modal-body">
          ¿Desea eliminar esta actividad?
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