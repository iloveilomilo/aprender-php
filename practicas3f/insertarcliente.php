<?php
$miconexion= new mysqli("localhost","desarrollador","","pasteleria");
if($miconexion->connect_error){
    echo"Fallo al conectar con MySQL";
}

$losNombres = $_POST["nombre"];
$losApellidos = $_POST["apellidos"];
$elUsuario = $_POST["usuarioo"];

if (!$miconexion->query("INSERT INTO clientes VALUES (3,'$losNombres','$losApellidos','$elUsuario')")
){
    echo "Fallo la insercion de datos en la tabla"
}
