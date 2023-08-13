<?php

include "./model/Conexao.php";
include "./model/Usuario.php";
$tst = new Usuario();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["cadastro"])) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
        $tel = $_POST["tel"];
        $type = $_POST["cargo"];
        $senha = $_POST["senha"];
        echo $tst->addUsuario($nome, $email, $cpf, $tel, $type, $senha);
    }

    if (isset($_POST["logar"])) {
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        echo $tst->validarUsuario($email, $senha);
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    
    
    ?>    
</body>
</html>