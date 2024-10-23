<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Authorization, X-Requested-With');

require 'config/config.php';

$data = json_decode(file_get_contents("php://input"), true);

$status_id = $data['status_id'];
$title = $data['title'];
$description = $data['description'];
$priority = $data['priority'];
$user_id = $data['user_id'];



if($status_id == "" || $title == "" || $description == "" || $priority == "" || $user_id == "") {
        echo json_encode(['msg' => 'Alle velden moeten ingevuld zijn!']);
}
else {
    $sql = "INSERT INTO tasks (status_id,title, description, priority, user_id) VALUES ('$status_id', '$title', '$description', '$priority', '$user_id')";

    if (mysqli_query($conn, $sql)) {
        echo json_encode(['msg' => 'Task aangemaakt!', 'status' => true]);
    } else {
        echo json_encode(['msg' => 'Er is iets fout gegaan met het aanmaken van de Task!', 'status' => false]);
    }
}