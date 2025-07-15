<?php
// Database connection sample, fill in your own values

$username = "your_db_username";
$password = "your_db_password";
$database = "your_database_name";
$host = "localhost";
$conn = new mysqli($host, $username, $password, $database);
$conn->set_charset("utf8mb4");