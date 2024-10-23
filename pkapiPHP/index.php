<?php
require 'config/config.php';




































































//if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_SERVER['REQUEST_URI'] == '/status') {
//    // Get all statuses from database
//    $sql = "SELECT * FROM status";
//    $result = $conn->query($sql);
//    $statuses = array();
//    if ($result->num_rows > 0) {
//        while ($row = $result->fetch_assoc()) {
//            $statuses[] = $row;
//        }
//    }
//    header('Content-Type: application/json');
//    echo json_encode($statuses);
//} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER['REQUEST_URI'] == '/status') {
//    // Create new status in database
//    $title = $_POST['title'];
//    $description = $_POST['description'];
//    $hexcolor = $_POST['hexcolor'];
//    $sql = "INSERT INTO status (title, description, hexcolor) VALUES ('$title', '$description', '$hexcolor')";
//    if ($conn->query($sql) === TRUE) {
//        $status_id = $conn->insert_id;
//        $status = array('id' => $status_id, 'title' => $title, 'description' => $description, 'hexcolor' => $hexcolor);
//        header('Content-Type: application/json');
//        echo json_encode($status);
//    } else {
//        header("HTTP/1.1 500 Internal Server Error");
//        echo "Error: " . $sql . "<br>" . $conn->error;
//    }
//}
//
//// Task routes
//if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_SERVER['REQUEST_URI'] == '/task') {
//    // Get all tasks from database
//    $sql = "SELECT * FROM task";
//    $result = $conn->query($sql);
//    $tasks = array();
//    if ($result->num_rows > 0) {
//        while ($row = $result->fetch_assoc()) {
//            $tasks[] = $row;
//        }
//    }
//    header('Content-Type: application/json');
//    echo json_encode($tasks);
//} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER['REQUEST_URI'] == '/task') {
//    // Create new task in database
//    $status_id = $_POST['status_id'];
//    $title = $_POST['title'];
//    $description = $_POST['description'];
//    $priority = $_POST['priority'];
//    $user_id = $_POST['user_id'];
//    $sql = "INSERT INTO task (status_id, title, description, priority, user_id) VALUES ('$status_id', '$title', '$description', '$priority', '$user_id')";
//    if ($conn->query($sql) === TRUE) {
//        $task_id = $conn->insert_id;
//        $task = array('id' => $task_id, 'status_id' => $status_id, 'title' => $title, 'description' => $description, 'priority' => $priority, 'user_id' => $user_id);
//        header('Content-Type: application/json');
//        echo json_encode($task);
//    } else {
//        header("HTTP/1.");
//    }
//}