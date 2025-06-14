<?php
// Database connection
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'BlogCMS';
$con = mysqli_connect($host, $user, $password, $database);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
