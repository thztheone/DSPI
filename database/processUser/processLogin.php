<?php
if (empty($_POST) or empty($_POST['email']) or empty($_POST['senha']))
echo "<script>window.location.href = '../../index.php';</script>";

session_start();

include("../connectDataBase.php");
include("processLog.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM users WHERE email = '{$email}' AND senha = '{$senha}'";

$result = $conn->query($sql);
$infos = $result->fetch_object();

if ($result->num_rows > 0) {
    $_SESSION['id'] = $infos->id;
    $_SESSION['nome'] = $infos->nome;
    $_SESSION['email'] = $infos->email;
    $_SESSION['cpf'] = $infos->cpf;
    $_SESSION['tel'] = $infos->tel;
    $_SESSION['type'] = $infos->type;

    SetLog($conn, $_SESSION['nome'], "Realizou o login");

    echo "<script>window.location.href = '../../home.php';</script>";
} else {
    echo "<script>window.location.href = '../../index.php';</script>";
}
?>