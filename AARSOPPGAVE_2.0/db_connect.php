<?php

    $server = "localhost";
    $user = "root";
    $pw = "root";
    $db = "termin1";

    $conn = mysqli_connect($server, $user, $pw, $db);

    if(!$conn) {
        echo "Connection failed!";        
    }
