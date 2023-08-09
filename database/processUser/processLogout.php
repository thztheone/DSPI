<?php
    session_start();

    include("../connectDataBase.php");
    include("processLog.php");

    SetLog($conn, $_SESSION['nome'], "Saiu da conta");

    unset($_SESSION['id']);
    unset($_SESSION['nome']);
    unset($_SESSION['email']);
    unset($_SESSION['cpf']);
    unset($_SESSION['tel']);
    unset($_SESSION['type']);

    echo "<script>window.location.href = '../../index.php';</script>";
?>