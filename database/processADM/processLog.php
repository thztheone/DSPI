<?php
include_once("../connectDataBase.php");

$requestData = $_REQUEST;

$sqlCount = "SELECT COUNT(id) as total FROM logs";
$resultCount = $conn->query($sqlCount);
$dataCount = $resultCount->fetch_assoc()['total'];

$sql = "SELECT * FROM logs";
$searchValue = !empty($requestData['search']['value']) ? '%' . $requestData['search']['value'] . '%' : '';

if (!empty($searchValue)) {
    $sql .= " WHERE (hora LIKE ? OR nome LIKE ? OR evento LIKE ? ) ";
}

$result = $conn->prepare($sql);
if (!empty($searchValue)) {
    $result->bind_param("sss", $searchValue, $searchValue, $searchValue);
}
$result->execute();

$result = $result->get_result();

$data = [];
while ($row = $result->fetch_assoc()) {
    $infoData = array(
        "hora" => $row['hora'],
        "nome" => $row['nome'],
        "evento" => $row['evento']
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