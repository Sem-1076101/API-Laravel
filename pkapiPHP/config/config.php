<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apiphp";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors in database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}