<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {


    include "db_conn.php";

    $user = $_SESSION['id'];

    $sql = "SELECT status FROM enroll";
    $result = mysqli_query($conn, $sql);

    $sql2 = "UPDATE enroll SET status='ENROLLED' WHERE users_id = $user";
    $result2 = mysqli_query($conn, $sql2);

    if ($result2) {
        header("Location: home.php");
        exit();
    }

} else {
    header("Location: home.php");
    exit();
}
