<?php
include_once("../connectDataBase.php");

$requestData = $_REQUEST;

$sqlCount = "SELECT COUNT(id) as total FROM historico";
$resultCount = $conn->query($sqlCount);
$dataCount = $resultCount->fetch_assoc()['total'];

$sql = "SELECT * FROM historico";
$searchValue = !empty($requestData['search']['value']) ? '%' . $requestData['search']['value'] . '%' : '';

if (!empty($searchValue)) {
    $sql .= " WHERE (id LIKE ? OR nome LIKE ? OR cpf LIKE ? OR placa LIKE ? OR carro LIKE ?) ";
}

$result = $conn->prepare($sql);
if (!empty($searchValue)) {
    $result->bind_param("sssss", $searchValue, $searchValue, $searchValue, $searchValue, $searchValue);
}
$result->execute();

$result = $result->get_result();

$data = [];
while ($row = $result->fetch_assoc()) {
    $infoData = array(
        "id" => $row['id'],
        "nome" => $row['nome'],
        "cpf" => $row['cpf'],
        "placa" => $row['placa'],
        "carro" => $row['carro'],
    );
    $data[] = ($infoData);
}

$start = intval($requestData['start']);
$length = intval($requestData['length'] == -1 ? 100 : $requestData['length']);
$dataPaginated = array_reverse(array_slice($data, $start, $length));

$resultData = [
    "draw" => intval($requestData['draw']),
    "recordsTotal" => intval($dataCount),
    "recordsFiltered" => intval(count($data)),
    "data" => $dataPaginated
];

echo json_encode($resultData);
?>