<?php
$miconexion = new mysqli("localhost","desarrollador","","pasteleria");
if($miconexion->connect_error){
    echo "Falloal concetar con MySQL";
}

$resultado = $miconexion->query("SELECT *FROM clientes ORDER BY id ASC");

ECHO "<H3>Orden Inverso</h3>";

for ($num_fila=$resultado->num_rows-1; $num_fila >=0; $num_fila--) { 
    $resultado->data_seek($num_fila);
    $fila = $resultado->fetch_assoc();
    echo "ID = " . $fila["id"];
    echo " Nombres = " . $fila["nombres"];
    echo " Apellidos = " . $fila["apellidos"];
    echo " Usuario = " . $fila["usuario"]."<br>";

}

echo "Orden del conjunto de resultados <br>";
$resultado->data_seek(0);
while ($fila = $resultado->fetch_assoc()) {
    echo "ID = " . $fila["id"];
    echo " Nombres = " . $fila["nombres"];
    echo " Apellidos = " . $fila["apellidos"];
    echo " Usuario = " . $fila["usuario"]."<br>";
}

?>