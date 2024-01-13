<?php

include('connection.php');

// include('admin-find-student.php');

//  WHERE users_id = $id_users

$stmt = $conn->prepare("SELECT * FROM grades");
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);

return $stmt->FetchAll();
