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
        echo "Se o resultado for 1 = dados corretos<br>";
        echo "Resultado: " . $tst->validarUsuario($email, $senha);
    }

    if (isset($_POST["recebeInfo"])) {
        $email = $_POST["email"];
        echo "Informações da conta:<br><br>";
        print_r($tst->recebeUsuario($email));
    }

    if (isset($_POST["porCampo"])) {
        $campo = strtolower($_POST["campo"]);
        $valor = $_POST["valor"];
        print_r($tst->recebeUsuarioPorCampo($campo, $valor));
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