<?php


require_once 'conexion.php';


$query = mysqli_query($conexion, "select * from empleado");
//
echo '<div class="table-responsive mt-5">
<table  class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nombre </th>
      <th scope="col">apellido</th>
      <th scope="col">telefono</th>
      <th scope="col">direccion</th>
      <th scope="col">fecha_nacimiento</th>
      <th scope="col">observacion</th>
      <th scope="col">sueldo</th>
      <th scope="col">Accion</th>
     
    </tr>
  </thead>
  <tbody>';
   
  

while($empleado= mysqli_fetch_assoc($query)){
    //var_dump($empleado);
    echo '<tr>';
    echo '<td>'.$empleado['id_empleado'].'</td>';
    echo '<td>'.$empleado['nombre'].'</td>';
    echo '<td>'.$empleado['apellido'].'</td>';
    echo '<td>'.$empleado['telefono'].'</td>';
    echo '<td>'.$empleado['direccion'].'</td>';
    echo '<td>'.$empleado['fecha_nacimiento'].'</td>';
    echo '<td>'.$empleado['observacion'].'</td>';
    echo '<td>'.$empleado['sueldo'].'</td>';
    echo '<td ><a class="btn btn-warning update mx-1" id_empleado="'.$empleado['id_empleado'].'" nombre="'.$empleado['nombre'].'" apellido="'.$empleado['apellido'].'"  telefono="'.$empleado['telefono'].'" direccion="'.$empleado['direccion'].'" fecha_nacimiento="'.$empleado['fecha_nacimiento'].'" observacion="'.$empleado['observacion'].'" sueldo="'.$empleado['sueldo'].'" href="#" role="button"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
    echo '<a class="btn btn-danger  delete mx-1" id_empleado="'.$empleado['id_empleado'].'"  href="#" role="button"><i class="fa fa-trash" aria-hidden="true"></i></a></td>';
   echo '</tr>';
}
echo '</tbody></table> </div>';


?>