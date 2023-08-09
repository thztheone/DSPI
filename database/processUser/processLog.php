<?php
function SetLog($conn, $nome, $event) {
    $dataHora = date('Y/m/d H:i:s');
    $sql = "INSERT INTO logs (hora, nome, evento) VALUES (?, ?, ?)";
    
    $dataBase = $conn->prepare($sql);
    $dataBase->bind_param("sss", $dataHora, $nome, $event);
    $dataBase->execute();
    
    $dataBase->close();
}
?>