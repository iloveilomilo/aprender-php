<?php
$miconexion = new mysqli("localhost","deasarrollador","","pasteleria");
if($miconexion->connect_error){
    echo "Falloal concetar con MySQL";
}

print "Opcion 1:<br>";
echo $miconexion->host_info;
print "<br>";


$miconexion = new mysqli("127.0.0.1","deasarrollador","","pasteleria",3306);
if($miconexion->connect_error){
    echo "Falloal concetar con MySQL";
}

print "Opcion 2:<br>";
echo $miconexion->host_info;
print "<br>";

?>