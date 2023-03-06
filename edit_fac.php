<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once 'connection.php';
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $ubicacion = $_POST["ubicacion"];

        $my_query = "update facultad set nombre= '".$nombre."', descripcion= '".$descripcion." ubicacion = ".$ubicacion." 'where id=".$id;
        $result = $mysql->query($my_query);

        if($result == true){
            echo 'registry updated sucessful';
        } else { 
            echo 'error';
        }
    } else {
        echo 'unknown error';
    }

?>