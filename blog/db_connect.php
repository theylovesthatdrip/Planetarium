<?php session_start();
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "blog";

    $conn = mysqli_connect($server, $user, $pass, $db);
?>