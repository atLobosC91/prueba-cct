<?php

function conect_db()
{
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "db_cct";
    $conn = mysqli_connect($server, $user, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
            echo 'conexión exitosa';
        }

    return $conn;
}

function close_db_conn($conn)
{
    mysqli_close($conn);
}
