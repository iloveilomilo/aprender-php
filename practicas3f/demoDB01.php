<?php
$miconexion = new mysqli("localhost","desarrollador","","pasteleria");
if($miconexion->connect_error){
    echo "Falloal concetar con MySQL";
}

print "Opcion 1:<br>";
echo $miconexion->host_info;
print "<br>";


$miconexion = new mysqli("127.0.0.1","desarrollador","","pasteleria",3306);
if($miconexion->connect_error){
    echo "Falloal concetar con MySQL";
}

print "Opcion 2:<br>";
echo $miconexion->host_info;
print "<br>";

?>