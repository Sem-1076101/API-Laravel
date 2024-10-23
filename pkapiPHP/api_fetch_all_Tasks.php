<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin');

require 'config/config.php';

//require dirname('config/config.php');
//echo dirname(__FILE__);
$sql = "SELECT tasks.id, tasks.title, tasks.description, tasks.priority, tasks.user_id, statuses.title AS status_title 
        FROM tasks
        INNER JOIN statuses
        ON tasks.status_id = statuses.id";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode($data);
} else {
    echo json_encode(['msg' => 'No data!', 'status' => false]);
}