<?php

include "./model/Conexao.php";
include "./model/Usuario.php";

$tst = new Usuario;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="recebe.php">
        <h2>Cadastro</h2>
        <p>
        Nome:  <input type="text" name="nome" required/><br>
        E-mail:   <input type="text" name="email" required/><br>
        Senha:    <input type="text" name="senha" required/><br>
        CPF:      <input type="text" name="cpf" required/><br>
        Telefone: <input type="number" name="tel" required/><br>
        <input type="hidden" name="cargo" value="1" />
        <input type="submit" name="cadastro" value="Cadastrar" /></p>
    </form>

    <hr>

    <form method="POST" action="recebe.php">
        <h2>Logar</h2>
        <p>
        E-mail: <input name="email" required /><br>
        Senha:  <input name="senha"  required /><br>
        <input type="submit" name="logar" value="Logar" /></p>
    </form>

    <hr>

    <form method="POST" action="recebe.php">
        <h2>Informações da conta</h2>
        <p>
        E-mail: <input type="email" name="email" required /><br>
        <input type="submit" name="recebeInfo" value="Obter Info" />
        </p>
    </form>

    <hr>

    <form method="POST" action="recebe.php">
        <h2>Pesquisa por campo:</h2>
        <p>
        Campo: <select name="campo" required >
            <option>ID</option>
            <option>Nome</option>
            <option>Email</option>
            <option>CPF</option>
            <option>Tel</option>
        </select>
        <input name="valor" required />
        <input type="submit" name="porCampo" value="Pesquisar usuário"/>
        </p>
    </form>

    <hr>

    <h2>Recebe todos os usuários:</h2>
    <?php

    
    print_r($tst->recebeUsuarios());

    ?>
</body>
</html>