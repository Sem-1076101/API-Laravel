<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Authorization, X-Requested-With');

require 'config/config.php';

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];
$title = $data['title'];
$description = $data['description'];
$hexcolor = $data['hexcolor'];

$sql = "UPDATE statuses SET title='$title', description='$description', hexcolor='$hexcolor' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo json_encode(['msg' => 'Data Updated Successfully!', 'status' => true]);
} else {
    echo json_encode(['msg' => 'Data Failed to be Updated!', 'status' => false]);
}