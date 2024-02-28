<?php

if (isset($_POST)) {
    require_once 'conexion.php';

    $id_empleado = isset($_POST['id_empleado']) ? mysqli_real_escape_string($conexion, $_POST['id_empleado']) : false;
   

    $errores = array();


    if (!empty($id_empleado) && is_numeric($id_empleado)) {
        $id_empleado_validado = true;
    } else {
        $id_empleado_validado = false;
        $errores['id_empleado'] = "El id_empleado no es valido";
    }
   

    if (count($errores) == 0) {
        $sql = "delete from empleado where id_empleado=$id_empleado";
        $guardar = mysqli_query($conexion, $sql);
        echo "eliminado exitosamente";
    } else {
        foreach ($errores as $val) {
            echo $val;
            echo '<br>';
        }
    }
}
