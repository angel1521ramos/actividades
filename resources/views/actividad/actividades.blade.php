
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
        <h3 class="box-title">Lista de actividades</h3>
      </div>
      <div class="box-body">
        <table id="posts-table" style="width:100%">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Encargado</th>
              <th>Horario</th>
              <th>Dias</th>
            </tr>
          </thead>
          
          <tbody>
              @foreach ($actividad as $x)<!-- la variable post debe ser creada en el post controler--->
                  <tr>
                      <td>{{$x->nombre}}</td>
                      <td>{{$x->docente}}</td>
                      <td>{{$x->horaI}} - {{$x->horaT}}</td>
                      <td>{{$x->dias}}</td>
                  </tr>
                  
              @endforeach
          </tbody>
  
        </table>
      </div>
    </div>
  </section>
</body>
</html>
