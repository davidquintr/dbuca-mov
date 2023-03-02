<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once 'connection.php';
        $mode = $_POST["mode"];
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];

        if($mode == 0){
            $my_query = "select * from facultad where id = ".$id.";";
            echo 'search by code';
        } else if($mode == 1) {
            $my_query = "select * from facultad where nombre like '%".$nombre."%';";
            echo 'search by name';
        }

        include_once('generical_return.php');

    } else {
        echo 'unknown error';
    }


?>