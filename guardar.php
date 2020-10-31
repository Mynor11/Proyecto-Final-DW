<?php 
// conectar con el servidor
$conectar=mysqli_connect("localhost:3306","root","","prueba");
// verificar la conexion
if(!$conectar){
    echo "No se pudo conectar con el servidor";
}
else {
    $base = mysqli_select_db($conectar, "prueba");
    if(!$base){
        echo"No se encontro la base de datos"; 
    }
}
// Recuperar las variables
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$actividad=$_POST['actividad'];
// hacemos la sentencia de sql
$sql="INSERT INTO datos VALUES ('$nombre',
                                '$apellido',
                                '$email',
                                '$direccion',
                                '$telefono',
                                '$actividad')";

// Ejecutamos la sentencia de sql
$ejecutar=mysqli_query($conectar,$sql);
// Verificar la ejecucion
echo $sql;
if (!$ejecutar){
    echo"Hubo algun error";
} else {
    echo'<script>
    alert("Registrado correctamente en la Base de Datos");
    window.location = "seguros.html";
</script>
';
}
?>