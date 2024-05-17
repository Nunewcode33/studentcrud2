<?php
    // Database credentials
    $servername = "localhost"; // Change this to your database server name if different
    $username = "root"; // Change this to your database username
    $password = ""; // Change this to your database password
    $dbname = "students1"; // Change this to your database name

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //executes if the connection has failed.
    if ($conn == false){
        die("Connection failed: ". mysqli_connect_error());
    }
?>
