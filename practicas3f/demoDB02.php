<?php
    $miconexion= new mysqli("localhost","desarrollador","","pasteleria");
    if($miconexion->connect_error){
        echo"Fallo al conectar con MySQL";
    }

    if(!$miconexion->query("CREATE TABLE clientes(id INT PRIMARY KEY, nombres VARCHAR (20), apellidos VARCHAR (20), usuario VARCHAR (20))") ||
    !$miconexion->query("INSERT INTO clientes VALUES (1,'Arturo','Rojas Lopez','art')")
    ){
        echo "FALLÓ LA CREACION DE LA TABLA";
    }
    
?>