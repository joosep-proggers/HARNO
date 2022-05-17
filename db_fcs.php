<?php

function connect($host, $user, $pass, $db){
    $conn = new mysqli($host, $user, $pass, $db);
    // Check connection
    if ($conn->connect_error) {
        echo "Connection failed: ";
        exit;
    }
    // correct utf-8 in database
    mysqli_set_charset( $conn, 'utf8');
    return $conn;
}

function query($conn, $sql){
    if ($conn->query($sql) === true) {
        $result = true;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        $result = false;
    }
    return $result;
}

