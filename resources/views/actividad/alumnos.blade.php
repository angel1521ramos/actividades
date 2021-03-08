
<!DOCTYPE html>
<html lang="es">
<head>
  <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
  </style>
	<title>Actividades extracurriculares</title>
</head>
<body>
  <section class="posts container">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Lista de alumnos</h3>
      </div>
      <div class="box-body">
        <table id="posts-table" style="width:100%">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Carrera</th>
              <th>Semestre</th>
              <th>Correo</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($alumno as $x)
                  <tr>
                      <td>{{$x->nombre}} {{$x->apellidoP}} {{$x->apellidoM}}</td>
                      <td>{{$x->carrera}}</td>
                      <td>{{$x->semestre}}</td>
                      <td>{{$x->correo}}</td>
                  </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>
</body>
</html>
