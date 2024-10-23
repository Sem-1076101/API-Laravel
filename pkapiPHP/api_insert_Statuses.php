<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Authorization, X-Requested-With');

require 'config/config.php';

$data = json_decode(file_get_contents("php://input"), true);

$title = $data['title'];
$description = $data['description'];
$hexcolor = $data['hexcolor'];

$sql = "INSERT INTO statuses (title, description, hexcolor) VALUES ('$title', '$description', '$hexcolor')";

if (mysqli_query($conn, $sql)) {
    echo json_encode(['msg' => 'Data Inserted Successfully!', 'status' => true]);
} else {
    echo json_encode(['msg' => 'Data Failed to be Inserted!', 'status' => false]);
}