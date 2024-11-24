<?php

    $database= new mysqli("localhost","root","","smart_hospital");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>