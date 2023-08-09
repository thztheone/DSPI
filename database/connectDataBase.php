<?php
    $host = "localhost";
    $user = "root";
    $password = "root";
    $database = "thiago_exemplo";

    $conn = mysqli_connect($host, $user, $password, $database);

    if (!$conn)
    {
        echo "Error no banco de dados.";
        return;
    }
?>