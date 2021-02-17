<?php
$hosts= gethostname();
$dbConnection = new mysqli("mysql", "frodo", "bolson", "proyect");

echo "<h1>Este es el $hosts</h1>";

if ($dbConnection->connect_errno) {
    echo "Falló la conexión: $dbConnection->connect_error";
    exit();
}else{
    echo "Conexión a BBDD exitosa";
}
$dbConnection -> close();  

?>