<?php

$sname = "localhost";
$uname = "root";
$password = "123";

$db_name = "school_portal";

$conn = mysqli_connect($sname, $uname, $password, $db_name, 3307);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
