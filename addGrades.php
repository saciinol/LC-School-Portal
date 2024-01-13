<?php

session_start();
// include "db_conn.php";


$_SESSION['table'] = 'grades';
$table_name = $_SESSION['table'];
$subject_name = $_GET['subject_name'];
$units = $_GET['units'];
$code = $_GET['code'];
$grade = $_GET['grade'];


// $sql = "INSERT INTO $table_name(subject_name, units, code, grade) VALUES ('$subject_name', '$units', '$code', '$grade')";
// $result = mysqli_query($conn, $sql);

// if ($result) {
//     header("Location: admin-edit-student.php?success=Succesfully added to the system");
//     exit();
// } else {
//     header("Location: admin-edit-student.php?error=unknown error occured");
//     exit();
// }

try {
    $insert_method = "INSERT INTO $table_name(subject_name, units, code, grade) VALUES ('" . $subject_name . "', '" . $units . "', '" . $code . "', '" . $grade . "')";

    include('connection.php');

    $conn->exec($insert_method);
    $response = [
        'success' => true,
        'message' => 'Succesfully added to the system.'
    ];
} catch (PDOException $e) {
    $response = [
        'success' => false,
        'message' => $e->getMessage()
    ];
}

$_SESSION['response'] = $response;
header('location: ../admin-edit-student.php');
