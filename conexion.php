<?php

$mysql = new mysqli("localhost","root","","ucadb");

if($mysql->connect_error){
    echo "error";
    die("Error de conexión");
} else{ 
    echo "conexion exitosa";
}

?>