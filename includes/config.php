<?php
date_default_timezone_set('Asia/Jakarta');
$servername = "localhost";
$username = "root";
$database = "kuliner";
$password = "";
$base_url = 'http://localhost/kuliner/';

$conn = mysqli_connect($servername, $username,
$password, $database);

if (!$conn) {
die("Connection failed: " .
mysqli_connect_error());
}
// echo "Connected successfully";