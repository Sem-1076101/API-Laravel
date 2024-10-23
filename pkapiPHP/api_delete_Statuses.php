<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');


$data = json_decode(file_get_contents("php://input"), true);
$status_id = $data['id'];
include 'connect.php';
$sql = "DELETE FROM statuses WHERE id = '$status_id'";
if (mysqli_query($conn, $sql)) {
    echo json_encode(['msg' => 'Task verwijderd!', 'status' => true]);
} else {
    echo json_encode(['msg' => 'Iets ging fout met het verwijderen!', 'status' => false]);
}
?>