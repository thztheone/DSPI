<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "thiago_exemplo";

    $conn = mysqli_connect($host, $user, $password, $database);

    if (!$conn)
    {
        echo "Erro no banco de dados.";
        return;
    }
?>
