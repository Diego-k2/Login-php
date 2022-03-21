<?php
    $servername = "localhost";
    $database = "login";
    $username = "root";
    $password = "";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn) {
        echo "Connected successfully";
    } else {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_close($conn);
?>