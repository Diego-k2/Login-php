<?php 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "login";
    $port = 3306;

    //conexao com a porta
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname, $user, $pass");

>