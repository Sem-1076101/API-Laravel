<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Authorization, X-Requested-With');

require 'config/config.php';

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];
$status_id = $data['status_id'];
$title = $data['title'];
$description = $data['description'];
$priority = $data['priority'];
$user_id = $data['user_id'];

$sql = "UPDATE tasks SET status_id='$status_id', title='$title', description='$description', priority='$priority', user_id='$user_id' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo json_encode(['msg' => 'Data Updated Successfully!', 'status' => true]);
} else {
    echo json_encode(['msg' => 'Data Failed to be Updated!', 'status' => false]);
}